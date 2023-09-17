<form method="POST">
    Name: <input type="text" name="name">
    <br>
    Value: <input type="text" name="value">
    <br>
    <button type="submit">Set</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cookie_name = $_POST["name"];
    $cookie_value = $_POST["value"];

    setcookie($cookie_name, $cookie_value, time() + 500); 
    
    if (isset($_COOKIE[$cookie_name])) {
        echo "Cookie '" . $cookie_name . "' has been set<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    } else {
        echo "Cookie '" . $cookie_name . "' is not set";
    } 
}
?>