<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=sanitizeInput($_POST["name"]);
    $email=sanitizeEmail($_POST["email"]);
    echo "<h2>Final DAtA</h2>";
    echo "Final name:".$name."<br>";
    echo "Final Email:".$email;
}

function sanitizeInput($input){
    $input=trim($input);
    $input=filter_var($input,FILTER_SANITIZE_STRING);
    return $input;
}

function sanitizeEmail($email){
    $email=trim($email);
    $email=filter_var($email,FILTER_SANITIZE_EMAIL);
    return $email;
}
?>