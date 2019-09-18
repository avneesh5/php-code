<html>
<head>
    <title> multiple file uploading</title>
    </head>
<body>
    <h1>File uploading</h1>
    <p><b>Note:</b>please upload a file of type<b> .PNG, .JPG, .JPEG</b></p>
    <p><b>Note: </b><b>File size should below 2MB</b></p>
    <?php
    if(isset($_POST['upload']))
    {
    if(is_uploaded_file($_FILES['image']['tmp_name']))
    {
    
        $filename=$_FILES['image']['name'];
        $size=$_FILES['image']['size'];
        $type=$_FILES['image']['type'];
        $tname=$_FILES['image']['tmp_name'];
        //validation
    $str=str_shuffle("abcdefghijklmnopqrstuvwxyz");
    $ext=substtr($str,10,10);
    $newfilename=$ext."=".$filename;
    if($type="image/jpg" || $ttype="image/png" ||$type="image/jpeg")
    {
    if(move_uploaded_file($tname,"uploads/$newfilename"))
    {
    echo "<p>File uploaded successfully</p>";
    }
    }
    else
    {
    echo "<p>Please select a valid file to upload</p>";
    }
    }
    else
    {
    echo "<p>Please select a file to upload</p>";
    }
    }
    
    ?>
    <form method="POST" action="" enctype="multipart/form-data">
    upload avatar:<input type="file" name="image"><br>
    <input type="submit" name="upload" value="submit">
    
    </form>
    </body>
</html>