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
            $mail = new PHPMailer();

            // If sending via SMTP
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->IsSMTP();
            //$mail->SMTPDebug = 4; //FOR DEBUGGING
            $mail->Username = "kitchensales97@gmail.com";
            $mail->Password = "kitchensales";
            $mail->SMTPSecure = "ssl"; // OR use TLS if needed
            $mail->Port = 465; // When using TLS, the port must be 587

            $mail->addAddress("kitchensales97@gmail.com"); // client email
            $mail->setFrom("kitchensales97@gmail.com"); // kitchen email
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
