<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>

<?php

#crear las tablas de multiplicacion hasta el 10. Tablas una al lado de otra con titulo encima de cada tabla (un div por cada uno)
#y dentro de las tablas la operación completa (1 x 2 = 2).

echo "<table border=3><tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo1.":</td></tr>";
$ciclo2=1;
while($ciclo2<=10)
{
$mult=$ciclo1*$ciclo2;
echo "<tr align=center><td>".$ciclo1."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$mult."</td></tr>";
$ciclo2++;
}







?>
    
</body>
</html>