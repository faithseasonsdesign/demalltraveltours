<?php

    require_once("connection.php");
    use PHPMailer\PHPMailer\PHPMaailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    require 'vendor/autoload.php';

    if(isset($_POST['subscribe'])){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);
            //$mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'stmp.gmail.com';
            $mail-> SMTPAuth = true;
            $mail->Username = 'securesally@gmail.com';
            $mail->Password = 'yrculvbnomaktmik';
            $mail->SMTPSecure = 'ssl';
            $mail->PORT = 465;

            $mail->setFrom("rebaonefaithmatlaba@gmail.com");

            $mail->addAddress($_POST['email_address']);

            $mail->isHTML(true);

            $mail->Subject = "Classroom Insights AI Subscription";
            $mail->Body = $_POST['email_address'] . "have subscribed for newsletter of classroom insight ai";
        
        
            $mail->send();

            //this means email was sent
            echo("<script>alert('cool stuff email sent')</script>");

        }
    }

?>