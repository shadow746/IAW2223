<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="usuario"> usuario</label>
    <input type="text" name="usuario"><br><br>
    <label for="passwd">contraseña</label>
    <input type="password" name="passwd"><br><br>
    <input type="submit" name="submit"><br><br>
</form>  
<?php
if (isset($_POST["submit"])){
    $usuario = htmlspecialchars($_POST["usuario"]);
    $passwd = htmlspecialchars($_POST["passwd"]);
    $us = "admin";
    $pas = "H4CK3R4$1R";
    if (!strcmp($usuario,$us) && !strcmp($passwd,$pas))
    {
        echo "Usuario y contraseña correctos";
    }else {
        echo "usuario o contraseña incorrecto";
    }
}
?> 
</body>
</html>