<?php
$subject = "Hello, World!";
$pattern = "/Hello/";

if (preg_match($pattern, $subject, $match)) {
    echo "Pattern found in the string.";
    print_r($match);
} else {
    echo "Pattern not found in the string.";
}

?>

