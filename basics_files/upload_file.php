<?php
//This condition to hide a error message in the page 
//And to check if the user already click a submit or not 
if(isset($_POST['submit']))
{
    // echo "<pre>";
    // print_r($_FILES['file_upload']);
    // echo "</pre>";
    
}
//This array contain a types of error message 
$phpFileUploadErrors = array(
    UPLOAD_ERR_OK =>'the file uploaded successfully',
    UPLOAD_ERR_INI_SIZE => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    UPLOAD_ERR_FORM_SIZE => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    UPLOAD_ERR_PARTIAL => 'The uploaded file was only partially uploaded',
    UPLOAD_ERR_NO_FILE => 'No file was uploaded',
    UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder',
    UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk.',
    UPLOAD_ERR_EXTENSION => 'A PHP extension stopped the file upload.',
);

$temp_name=$_FILES['file_upload']['tmp_name']; //from this location
$the_file_name=$_FILES['file_upload']['name']; 
$directory="uploads"; //to this location
//Moves an uploaded file to a new location
if(move_uploaded_file($temp_name,$directory."/".$the_file_name))
{
    $the_message ="File uploaded successfully"; 
}
else
{
    $the_error=$_FILES['file_upload']['error'];
    $the_message= $phpFileUploadErrors[$the_error];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload_file.php" method="post" enctype="multipart/form-data">  
    <h3>
        <?php
        if(!empty($the_message))
        {
            echo $the_message;
        }
        ?>
    </h3>
    <input type="file" name="file_upload" ><br><br>
    <input type="submit" name="submit">
    </form>
</body>
</html>