<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>

</head>
<body>
    
<?php
 
$email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));
$reemail = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));
$noticias = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));

if(filter_var($email, FILTER_VALIDATE_EMAIL))  {
    PRINT "error en el email";
}  else if (!filter_var($reemail, FILTER_VALIDATE_EMAIL))  {
    print "error en el email de confirmacion"
}  else if ($email != $reemail)  {
    print "debe coincidir el email de confirmación"
}  else if ($noticias ==1)  {
    print "debe indicar si desea o no recibir noticias";
}  else {
    if ($noticias == 0)  {
        print "Su correo $email no va ha recibir noticias";
    } else  {
        print "Su correo $email va ha recibir noticias";
    }
}



?>

</body>
</html>