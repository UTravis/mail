<?php
    ##php to validate the input

    ##Name validation
    function name_valid($data){
        $data = filter_var(trim($data),FILTER_SANITIZE_STRING);
        if(preg_match("/[0-9]/",$data)){
            return FALSE;
        }else{
            return $data;
        }
    }

    ##Email Validation
    function email_valid($data){
        $data = filter_var(trim($data),FILTER_SANITIZE_EMAIL);
        if(filter_var($data,FILTER_VALIDATE_EMAIL)){
            return $data;
        }else{
            return FALSE;
        }
    }
?>