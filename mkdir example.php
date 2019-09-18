<pre>
<?php
$folder="images";
if(file_exists($folder))
{
echo "folder exists.....";
}
else
{
mkdir($folder,0644);
echo "folder created.....";
}

?>