<?php
    $to = "ucheemeka666.ue@gmail.com";
    $subject = "PHP sends Emails";
    $message = "Hi, if you get this, know that I used PHP.";

        // Sending email
    if(mail($to, $subject, $message)){
        echo 'Your mail has been sent successfully.';
    } else{
        echo 'Unable to send email. Please try again.';
    }

    
?>