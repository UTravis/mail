<?php
    /**
     * Creating a class called Mailer
     * 
     * Class is to contain all the neccessary parameter required by the mail function
     * 
       **/
      
       Class Mailer{
           //senders address
           public $from;
           public $subject;
           public $message;
           /**
            * recipiants address 
            * Defaulty set to gskillscomputerschool1@gmail.com
            *
            * and setting headers to send html formatted mail
            **/
            public $to = "gskillscomputerschool1@gmail.com";

            public function header(){
                $header = "MIME-Version: 1.0 ". "\r\n";
                $header .= "Content-type: text/html; charset=iso-8859-1 ". "\r\n";
                $header .= "From: {$this->from} ". "\r\n". "Reply-To: {$this->from} ". "\r\n". "X-Mailer: PHP/". phpversion();
                return $header;
            }    
    
            final public function send(){
                return mail($this->to,$this->subject,$this->message,$this->header());
            }
       }
?>