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
    $mail ->Host = "mail.adeoyemuhdfawas.com";
    $mail ->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail ->Port = 465;

    $mail ->Username = "adeoyemuhdfawas@adeoyemuhdfawas.com";
    $mail ->Password = "S@wafma6bluehost";

    $mail ->setFrom($Email, $Name);
    $mail ->addAddress("adeoyemuhdfawas@gmail.com", "Adeoye Fawas");

    $mail ->Subject = $Subject;
    $mail ->Body = $Message;

    $mail ->Send();

    header("Location: success.html");

?>

<!--<!DOCTYPE html>

<html lang="en">

<head>

/*Required meta tags*/
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

</style>

</head>

<body>
    
<h1 style="font-size:20px; text-align:center;">Hey Fawas! Someone has got something to tell you.</h1>
<div style="text-align:center;font-size:19px;">
<?php /*
echo "Name: " . $Name . "<br/>";
echo "Email: " . $Email;
*/?>
<hr>
</div>
<h2><p style="text-align:center; font-size:20px;">Here's what the person has to say:</p></h2>
<div style="text-align:center;font-size:19px;">
<?php /*
echo "<p>Here's the message:</p>";
echo $Message;
*/?>
<hr>
</div>


</body>

</html>-->