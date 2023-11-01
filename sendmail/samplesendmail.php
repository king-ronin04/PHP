<?php
$to_email = "anshuy0012@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
//$headers = "Content-Type:text/html;charset=utf-8";
$headers = "From:anshuy835@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>