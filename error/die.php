<?php

if(file_exists("file.txt")){
    $file=fopen("file.txt","r");
    echo "File is available";
}
else{
    die("Error: the file does not exist");
}
?>