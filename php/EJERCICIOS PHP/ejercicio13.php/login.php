<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    
<form action="almacenar.php">
<p>
    <label for="email"> Email </label>
    <input type="email" name="email" id="email"
    <?php
        if (isset($_COOKIE['mailUsu'])) {
            
        }
    ?>


    
    />
</p>
    <label for="pass"> Contraseña </label>
    <input type="password" name="pass" id="pass"/>

<p>

<p>
    <label for="check"> Recordar Email? </label>
    <input type="checkbox" name="check" id="check"/>
</p>


<p>
    <input type="submit" value="enviar">
</p>

</body>
</html>