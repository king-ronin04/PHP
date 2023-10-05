<form method="POST">
    <input type="text" name="marks">
    <input type="submit">
</form>

<?php
if($_POST){
    $marks=$_POST['marks'];
    if($marks<33){
        echo "fail";
    }
    else if($marks>=34 && $marks<50){
        echo "D grade";
    }
    else if($marks>=50 && $marks<65){
        echo "Cgrade";
    }
    else if($marks>=65 && $marks<77){
        echo "B grade";
    }
    else if($marks>=77 && $marks<90){
        echo "A grade";
    }
    else if($marks>=90 && $marks<100){
        echo "A+ grade";
    }
    else
    {
        echo "Invalid Input";
    }
}
?>