<html>
<head>
<title>file uploading</title>
    </head>
<body>
<pre>
<?php
if(isset($_POST['btn']))
{
$name=$_POST['name'];
$mail=$_POST['mail'];
    ?>
<form method="POST" acttion="" enctype="multipart/form-data">
name:<input type="text" name="name"><br>
mail:<input type="text" name="mail">
<br>
<input type="submit" name="btn" value="save">
</form>
</body>
    </html>







