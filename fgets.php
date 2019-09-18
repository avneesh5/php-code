<pre>
<?php
$fp=fopen("hi.txt","r");
for(;$line=fgets($fp);)
{
    echo $line."<br>";
}
    ?>