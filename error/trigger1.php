<?php

function customErro($error,$errstr){
    echo "<b>Error:</b>[$error] $errstr<br>";
    echo "Ending Script";
    die();
}

set_error_handler("customError");

$test=2;
if($test>=1){
    trigger_error("Value must be 1or below",E_USER_ERROR);
}