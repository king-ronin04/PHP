<?php
if(isset($_POST['submit']))
{
    $files = $_FILES['file'];
   //print_r($files);
   $fileName = $files['name'];
   $fileSize = $files['size'];
   $fileTmpLoc = $files['tmp_name'];
   $fileError = $files['error'];
    //echo "FileTmpLoc".$fileTmpLoc;
   //allowed only jpg jpeg png files
   $f = explode('.', $fileName);
   //print_r($f);
   $fileExt = strtolower($f[1]);
   $allowedExt = array('jpg','jpeg','png','txt');
   if(in_array($fileExt, $allowedExt))
   {
    if($fileSize<200000)
    {
        $fileNewName = uniqid('TEST_',false);
        $dest = 'uploads/'.$fileNewName.'.'.$fileExt;
        move_uploaded_file($fileTmpLoc, $dest);
        //header('Location:index.php?success=true');
        echo "Uploaded Successfully";
    }
    else
    {
        echo "File size exceeded";
    }
   }
   else
   {
       echo "File type not supported";
   }
}
else
 echo " Upload a file";

?>