<form method="post" action="">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="submit" name="submit">
</form>

<?php
if(isset($_REQUEST['submit'])){
    if(!filter_has_var(INPUT_POST,"name")){
        echo("NAME NOT FOUND");
    }else{
        echo("NAME FOUND");
    }
}
//INPUT_POST is one of the filter types used in PHP to access
//filter input data receiver via the HTTP POST method
//  INPUT_POST -> flag
// $_REQUEST can be replaced by $_POST 
?>
