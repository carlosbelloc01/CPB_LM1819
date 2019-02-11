<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <head><title>Tablas de multiplicar</title></head>
<body>
1.............
<?php
$ciclo1=1;
while($ciclo1<=10)
{
echo "<table border=3><tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo1.":</td></tr>";
$ciclo2=1;
while($ciclo2<=10)
{
$mult=$ciclo1*$ciclo2;
echo "<tr align=center><td>".$ciclo1."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$mult."</td></tr>";
$ciclo2++;
}
echo "</table>";
$ciclo1++;
}
?>

2..............
<?php

$fecha1=mktime(0,0,0,"1","2","2019");
$fecha2=mktime(0,0,0,"02","11","2019");

$diferencia=$fecha2-$fecha1;
$dias=$diferencia/(60*60*24);

echo $dias;


?>

3..............
<?php 
$entrada=array(12,2,32,10,11,58,60,7,48,79);  
$mayor=$entrada[0];  
$pos=0;  
for($j=0;$j<count($entrada);$j++) 

{ 
  if($mayor<$entrada[$j]) 
  { 
    $mayor=$entrada[$j]; 
   $pos=$j; 
  } 
} 
echo "El mayor es ".$mayor;  
?>

</body>
</html>