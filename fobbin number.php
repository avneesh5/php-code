<?php
$x1=0;
$x2=1;
$i=1;
echo $x1."".$x2."";
while($i<=10)
{
$x3=$x1+$x2;
echo $x3."";
$x2=$x3;
$i++;
}
?>