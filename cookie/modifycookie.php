<?php
$cookie_name="user";
$cookie_value="Mohan";

setcookie($cookie_name,$cookie_value,time()+500);
if(isset($_COOKIE[$cookie_name]))
{
    echo "Cookie '". $cookie_name . "'has been set<br>";
    echo "Value is: ".$_COOKIE[$cookie_name];
}else{
    echo "Cookie '".$cookie_name."'is not set";
}

?>