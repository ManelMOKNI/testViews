<?php

use PHPMailer\PHPMailer\PHPMailer;

include_once "phpmailer/PHPMailer.php";
include_once "phpmailer/Exception.php";
include_once "phpmailer/SMTP.php";

class ClaimsManager extends Model
{
    public function addClaim($var)
    {
        if ($this->registerClaim('claim', $var)) {
            $mail = new PHPMailer;

            // If sending via SMTP
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->IsSMTP();
            $mail->SMTPDebug = 4;
            $mail->Username = "mokni.mohamedbayrek@gmail.com";
            $mail->Password = "";
            $mail->SMTPSecure = "ssl"; // OR use TLS if needed
            $mail->Port = 465; // When using TLS, the port must be 587


            $mail->addAddress("mokni.mohamedbayrek@gmail.com");
            $mail->setFrom("mokni.mohamedbayrek@gmail.com");
            $mail->Subject = "subject";
            $mail->isHTML(true);
            $mail->Body = "body";

            if ($mail->send()) {
                echo "email sent";
            } else {
                //echo "email not sent";
                echo $mail->ErrorInfo;
            }
        }
    }
}
