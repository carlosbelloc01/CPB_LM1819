<?php

$pies = trim(htmlspecialchars($_REQUEST["pies"], EMT_QUOTES, "UTF-8"));
$ulgadas = trim(htmlspecialchars($_REQUEST["pulgadas"], EMT_QUOTES, "UTF-8"));

$piesok = false;
$pulgadasok = false;







define('PULGADA'= 2.54)







if (empty($pies)) {
    print "<p> Campo Pies vacío </p>";
} else if (!filter_var($pies, FILTER_VALIDATE_INT))  {
    print "<p>Campo Pies No es un Número Entero</p>";
} else if ($pies < 0) {
    print "<p>Campo Pies debe ser >= 0</p>";
} else {
    $piesok = true;
}



if (empty($pulgadas)) {
    print "<p> Campo Pulgadas vacío </p>";
} else if (!filter_var($pulgadas, FILTER_VALIDATE_INT))  {
    print "<p>Campo Pulgadas No es un Número Entero</p>";
} else if ($pulgadas < 0) {
    print "<p>Campo Pulgadas debe ser >= 0</p>";
} else {
    $pulgadasok = true;
}

if ($piesok && $pulgadasok) {
    $cm = ($pies * 12 + $pulgadas) * 'PULGADA';
print "<p>$pies pies y $pulgadas pulgadas son $cm centimetros</p>";
}




?>