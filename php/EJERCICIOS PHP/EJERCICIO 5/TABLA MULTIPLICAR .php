<?php

$num = trim(htmlspecialchars($_REQUEST["numero"], ENT_QUOTES, "UTF-8"));


if (empty($num)) {
    print "<p> Indique el numero de la tabla a mostrar </p>";
}else if ($num = 0) {
    print "<p>$tabla0</p>";
}else if ($num = 1) {
    print "<p>$tabla1</p>";
}else if ($num = 2) {
    print "<p>$tabla2</p>";
}else if ($num = 3) {
    print "<p>$tabla3</p>";
}else if ($num = 4) {
    print "<p>$tabla4</p>";
}else if ($num = 5) {
    print "<p>$tabla5</p>";
}else if ($num = 6) {
    print "<p>$tabla6</p>";
}else if ($num = 7) {
    print "<p>$tabla7</p>";
}else if ($num = 8) {
    print "<p>$tabla8</p>";
}else if ($num = 9) {
    print "<p>$tabla9</p>";
}else ($num = 10) {
    print "<p>$tabla10</p>";
}

?>