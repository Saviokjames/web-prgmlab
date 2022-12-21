<?php

$array=array("savio","k","james");
for($i=0;$i<3;$i++)
{
 echo($array[$i]." ");
}
echo("<br>");
$sum=0;

echo("next problem=<br>");
function add($a,$b)
{
$c=$a+$b;
echo("sum=".$c);
}

echo ("enter 2 values");
?>
<html>
<form method="post">
        a=<input type="number" name="num1">
       b= <input type="number" name="num2">
        <input type="submit" value="submit">
        </form>
</html>
<?php
$a=$_POST['num1'];
$b=$_POST['num2'];
add($a,$b);
?>



