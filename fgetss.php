<pre>
<?php
$fp=fopen("hi.txt","r");
for(;$line=fgetss($fp);)
{
    echo $line."<br>";
}
    ?>