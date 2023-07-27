<?php

    require_once("connection.php");

    //protect function
    function protect($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //protect function ended here


    $user_first_name = protect($_POST['user_first_name']);
    $user_last_name = protect($_POST['user_last_name']);
    $user_email_address = protect($_POST['user_email_address']);
    $user_contact_number = protect($_POST['user_contact_number']);
    $user_message = $user_first_name . " " . $user_last_name . " says : \r\n" . protect($_POST['user_message']);
    $subject = "Classroom Insights AI enquiry";


    $mailheader = "From:".$user_email."\r\n";
    //classroom insights ai email will go there
    $recipient = "info@classroominsightsai.co.za";
    
    mail($recipient,$subject,$user_message,$mailheader)
    or die('failed to send email');

    include("redirectPage.php");

?>