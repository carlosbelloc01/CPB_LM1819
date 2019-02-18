<!--Formulario con la edad y si ha puesto un numero y si no error-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    
</head>
<body>
    
<?php
$edad = $_REQUEST["edad"];
$email = $_REQUEST["edad"];

if (is_numeric($edad)) {
    print "Su edad es $edad";
}  else  {
    print "Error al introducir la edad";
}

if (filter_var($email, FILTER_VALIDATE_EMAIL))  {
    print "email correcto";
}   else  {
    print "email incorrecto";
}

?>



</body>
</html>
