<?php
    class Handler{
        private $data;

        function __construct($values){
            $this->data = json_decode(file_get_contents("php://input"), true);
            $this->verifyData($values);
        }

        function verifyData($values){
            foreach($values as $value){   
                if(!isset($this->data[$value])){
                    $code = 200;
                    $title = "Rejected";
                    $message = "Request rejected because the argument ".$value." is missing";
                    $res = new Response($code, $title, $message);
                    $res->sendMessage();
                }
            }
        }

        function getData(){
            return $this->data;
        }
    }
?>