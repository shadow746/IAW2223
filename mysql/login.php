
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de entrada</title>
</head>
<body>
    <H1>Tienes que loguearte</H1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="username"> usuario</label>
    <input type="text" name="username"><br><br>
    <label for="password"> contraseña</label>
    <input type="password" name="password"><br><br>
    <input type="submit" name="submit"><br><br>
</form>  
<?php
header("content-type:text/html;charset=utf-8");
if (isset($_POST["submit"]))
{
 
$servername = "sdb-53.hosting.stackcp.net";
$bd = "bdpruebas-35303035a708";
$username = "cristina";
$password = "Admin123";

    $enlace = mysqli_connect($servername,$username,$password,$bd);

    if(!$enlace)
    {
        echo "Conexion fallida: ".mysqli_connect_error();

    }else
    {
        //HABRIA QUE CONTROLAR LA ENTRADA 
        $usu = mysqli_real_escape_string($enlace,$_POST["username"]);
        $pass = mysqli_real_escape_string($enlace,$_POST["password"]);
        
        $query = sprintf("SELECT * FROM usuarios WHERE username='%s' AND password='%s'",$usu,$pass);
        $resultado = mysqli_query($enlace,$query);

        //print_r($resultado);

        if ($resultado)
        {
            $fila = mysqli_fetch_array ($resultado);
            //print_r($fila);
            if (mysqli_num_rows($resultado)>0)
            {
                echo "Bienvenido ". $fila["username"];
            }else
            {
                echo "Lo siento, no eres usuario registrado<br>" . mysqli_error($enlace);
            }
            
        }    
        mysqli_close($enlace);     
    }
}


?> 
</body>
</html>
