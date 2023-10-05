<?php
$to_email="shivammishra9987@gmail.com";
$subject="Simple Email Test Via PHP";
$body="Hi, This is test email send by PHP Script";
$headers="Content-Type:text/html;charset=utf-8";

if(mail($to_email,$subject,$body,$headers)){
    echo "Email successfully sent to $to_email....";
}else{
    echo "Email sending failed";
}

?>