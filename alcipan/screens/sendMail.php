<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require '../libs/PHPMailer/src/Exception.php';
require '../libs/PHPMailer/src/PHPMailer.php';
require '../libs/PHPMailer/src/SMTP.php';
    
    if ($_POST) {
        $firstName=$_POST["firstName"];
        $lastName=$_POST["lastName"];
        $umail=$_POST["mail"];
        $phoneNumber=$_POST["phoneNumber"];
        $subject=$_POST["subject"];
        $message=$_POST["message"];

        // print($firstName);
        // print($lastName);
        // print($mail);
        // print($phoneNumber);
        // print($subject);
        // print($message);
    }
    
    
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.duruslab.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'iletisim@duruslab.com';                     //SMTP username
        $mail->Password   = '12345678909As';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );
        //Recipients
        $mail->setFrom('iletisim@duruslab.com', 'Site Mesajı');
        // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
        $mail->addAddress('Feda.grup@outlook.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->ContentType = 'text/html; charset=UTF-8';
        $mail->Subject = $subject;
        $mail->Body    = "Gönderen : $firstName $lastName"."<br/>"."Mail: $umail"."<br/>"."Numara : $phoneNumber"."<br/>"."Mesaj : $message";

        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        header("Location:iletisim.php?success=1");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
?>