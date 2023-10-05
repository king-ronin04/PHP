<?php
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['message'];


$to="shivammishra9987@gmail.com";
$subject="Contact form".$name;
$message="<h2>Contact Query from the user:</h2>
<h4>Name:".$name."</h4>
<h4>Email:".$email."</h4>
<h4>Message:".$msg."</h4>";


$headers="anshuy835@gmail.com";

if(mail($to,$subject,$message,$headers)){
    echo "mail sent successfully";
}
else{
    echo "mail sending failed";
}

?>