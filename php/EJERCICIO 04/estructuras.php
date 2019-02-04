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


for ($i=0; $i <6 ; $i++) {    #sale numeros del 0 al 6 pero solo sale hasta el 5
    print "$i\n";
}


#for ($i=0; $i <6 ; $i = $i + 2) {    #sale numeros de 2 en 2
   # print "$i\n";
}

#for ($i=6; $i <0 ; $i--) {    #sale del 6 al 0
    #print "$i\n";
}


#for ($i=6; $i <0 ; $i--) {    #del 6 al 0 pero que solo salgan los numeros pares
 #   if ($i % 2 == 0)
  #  print "<p>$i</p>";
}


#contador = 0;
#for ($i=6; $i <0 ; $i++) {    #saber cuantos impares hay del 0 al 6 (cuantos)
 #  if ($i % 2 == 0){
     #print "<p>$i</p>";
 #}  else {
 #    $contador++;
 }
}
#echo "hay $contador impares entre 6 y 0";



$filas = 3;                         #crear una tabla con filas y columnas. LAS TABLAS BIDIMENSIONALES SE RECORREN CON UN DOBLE BUCLE FOR
$columnas = 4;
echo "<table style='border: 2px solid black'>";
for ($i=0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j=0; $j)
}                                                           #terminar en ytb
for ($i=)



#muestre en pantalla del 1 al 10 la conversion en pesetas (1 euro = tantas pesetas)


define("PESETAS", "166.386");

for ($i=1; $i <= 10 ; $i++) {
    echo "$i € =" .  $i*PESETAS . " pts<br/>";
}
















?>



</body>
</html>