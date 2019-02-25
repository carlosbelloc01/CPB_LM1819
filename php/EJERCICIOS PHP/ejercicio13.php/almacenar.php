<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    
<?php

$email = trim(htmlspecialchars(strip_tags($_REQUEST['email'] ENT_QUOTES, "UTF-8"));

if (isset($_REQUEST['check'])) {
    setcookie("mailUsu", $email, time()+60*60*24*365);
} else {
    setcookie("mailUsu", $email, time()-1000);
}

?>

<p>
    <a href="login.php">Volver</a>
</p>

</body>
</html>
