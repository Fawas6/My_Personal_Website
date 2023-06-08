<?php

    $Name = $_GET['Name'];
    $Email = $_GET['Email'];
    $Subject = "New Message to Fawas";
    $Message = $_GET['Textarea'];

    require "vendor/autoload.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    $mail = new PHPMailer(true);

    #$mail ->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail ->isSMTP();
    $mail ->SMTPAuth = true;
    $mail ->Host = "smtp.gmail.com";
    $mail ->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail ->Port = 465;

    $mail ->Username = "adeoyemuhdfawas@gmail.com";
    $mail ->Password = "rkbvlaluuwihesos";

    $mail ->setFrom($Email, $Name);
    $mail ->addAddress("adeoyemuhdfawas@gmail.com", "Adeoye Fawas");

    $mail ->Subject = $Subject;
    $mail ->Body = $Message;

    $mail ->Send();

    header("Location: success.html");

?>