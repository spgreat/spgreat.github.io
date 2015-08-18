<?php

    $to = "sgreatorexvoith@g.harvard.edu";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $message = $_REQUEST['message'] ;
    $email = $_REQUEST['email'] ;
    $subject = "New Message From Your Contact Form";

    $fields = array();
    $fields{"name"} = "Name";
    $fields{"email"} = "Email";
    $fields{"subject"} = "Subject";
    $fields{"message"} = "Message";

    $body = " Name: " . $name. " \r\n Email: " . $email. "\r\n Message:" . $message;

    $send = mail($to, $subject, $body , $headers);

?>