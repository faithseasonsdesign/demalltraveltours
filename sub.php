<?php


    /*$firstName = $_POST[''];
    $lastName = $_POST[''];
    $contactNumber = $_POST[''];
    */
    $emailAddress = $_POST['email_address'];
    $subject = "Classroom Insights Subscription";
    $message = "$emailAddress have subscribed to Classroom Insight AI newsletter";


    $mailheader = "From:".$emailAddress."\r\n";

    $recipient = "info@classroominsightsai.co.za";

    mail($recipient,$subject,$message,$mailheader)
    or die('failed to send email');

    include("redirectPage.php");


?>