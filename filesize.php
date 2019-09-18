<pre>
<?php
$fp=fopen("hi.txt","r");
$size=filesize("hi.txt");
echo fread($fp,$size);




?>