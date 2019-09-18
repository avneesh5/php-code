<pre>
<?php
$arr=array(
array(10,20,30),
array("a","b","c"),
array("Ram","Sam","ghanshyam"),
array(100,200,500),
);
$c=count($arr);
for($i=0;$i<=$c;$i++)
{
$cc=count($arr[$i]);
for($j=0;$j<$cc;$j++)
{
    echo $arr[$i][$j]."<br>";
}
}

?>