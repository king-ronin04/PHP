<?php
if(isset($_POST['submit']))
{
    // File 1
    $file1 = $_FILES['file1'];
    $fileName1 = $file1['name'];
    $fileSize1 = $file1['size'];
    $fileTmpLoc1 = $file1['tmp_name'];
    $fileError1 = $file1['error'];

    // File 2
    $file2 = $_FILES['file2'];
    $fileName2 = $file2['name'];
    $fileSize2 = $file2['size'];
    $fileTmpLoc2 = $file2['tmp_name'];
    $fileError2 = $file2['error'];

    // Function to upload a file
    function uploadFile($file, $index)
    {
        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTmpLoc = $file['tmp_name'];
        $fileError = $file['error'];

        $f = explode('.', $fileName);
        $fileExt = strtolower($f[1]);
        $allowedExt = array('jpg', 'jpeg', 'png', 'txt');

        if (in_array($fileExt, $allowedExt))
        {
            if ($fileSize < 200000)
            {
                $fileNewName = uniqid('TEST_', false);
                $dest = 'uploads/' . $fileNewName . '_' . $index . '.' . $fileExt;
                move_uploaded_file($fileTmpLoc, $dest);
                return true;
            }
            else
            {
                echo "File size exceeded for File ";
            }
        }
        else
        {
            echo "File type not supported for File ";
        }

        return false;
    }

    // Upload File 1
    if (uploadFile($file1, 1))
    {
        echo "Uploaded File 1 Successfully<br>";
    }

    // Upload File 2
    if (uploadFile($file2, 2))
    {
        echo "Uploaded File 2 Successfully";
    }
}
else
{
    echo "Upload at least two files";
}
?>
