<?php
$test=2;
if($test>=1){
    trigger_error("Value must be 1or below",E_USER_ERROR);
    echo("After Trigger");
}

?>