<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
$title = "Php Header Footer";                   
include "header.php";                 
?>

<p style='text-align: center;'>
We are using two different files as header and footer.
<?php
include "menu.php";
?>

</p>

<?php
include "footer.php";                
?>

</body>
</html>