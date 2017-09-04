<?php

 if(isset($_GET['email_address']) && !empty($_GET['email_address'])){
    $emailAddress = $_GET['email_address'];
    }

        if(isset($_GET['name']) && !empty($_GET['name'])){
    $name= $_GET['name'];
    }

        $to      = $emailAddress;
        $subject = 'the subject';
        $message = 'hello ' . $name;
        $headers = 'From: youremail@example.com' . "\r\n" .
            'Reply-To: youremail@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if(!mail($to, $subject, $message, $headers))
        {
            die('There was an error sending out the email');
        }

?>