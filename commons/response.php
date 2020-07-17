<?php

    class response{
        private  $code;
        private  $title;
        private  $message;

        function __construct($code, $title, $message){
            $this->code = $code;
            $this->title = $title;
            $this->message = $message;
        }

        function sendMessage(){
            $response = array("Title" => $this->title, "Message" => $this->message);
            http_response_code($this->code);
            echo json_encode($response, JSON_UNESCAPED_UNICODE);
            die();
        }
        
    }
?>