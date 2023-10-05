<?php
$g_v="Hello, I'm Global Variable.";

function access_global_variable(){
    echo $GLOBALS['g_v'];
    echo "<br>";
}

function modidy_global_variable(){
    $GLOBALS['g_v']="Hi AGain ,Hello, I'm Global Variable.";
}

echo "Accessing: ";
access_global_variable();
modidy_global_variable();
echo "<br>";
echo "Accessing: ";
access_global_variable();