<form method="POST">
    <input type="text" name="country" >
    <input type="text" name="age" >
    <input type="submit">
</form>

<?php
if($_POST){
    $country=$_POST['country'];
    $age=$_POST['age'];
    // if(strcmp($country,'Indian')!=0)
    //     echo 'As You are not Indian you are not eligible';
    // else if(strcmp($country,'Indian'==0) && age<=18)
    //     echo 'Though you are indian you are not eligible for voting';
    // else if(strcmp($country,'Indian'==0) && age>=18)
    //     echo 'You are Indian and You are eligible for voting';
    
    
    if($country=='Indian'){
        if($age>=18){
            echo "Eligible to vote";
        }
        else
        {
            echo "Not Eligible to vote";
        }
    }
    else{
        echo "Not Indian NOt eligible for vote";
    }
}
?>