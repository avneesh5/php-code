<?php

for($i=2;$i<=20;$i++)
{
for($j=2;$j<$i;$j++)  //2 3 5 7 11 13 17 19
{
if($i%$j==0)
{
break;
}
}
if($j==$i)
{
echo $i."<br>";
}
}
?>