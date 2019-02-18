<?php

$nombre = trim(htmlspecialchars( strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8))";

if ($_nombre["NOMBRE"] !="") {
    PRINT "<p> Su nombre es $_nombre [nombre]</p>";
}

if (isset($_nombre["option"])) {
    print "<p>Opción marcada</p>";
}





print_r($_REQUEST);
print_r($_REQUEST);

?>