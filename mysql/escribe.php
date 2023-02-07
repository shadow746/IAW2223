<?php
header("content-type:text/html;charset=utf-8");

$servername = "sdb-53.hosting.stackcp.net";
$bd = "bdpruebas-35303035a708";
$username = "cristina";
$password = "Admin123";
 
$enlace = mysqli_connect($servername, $username, $password, $bd);


if(!$enlace)
{
    echo "Conexion fallida.";
}else
{
    $query="INSERT INTO usuarios(username, password) VALUES ('pepito','usuario')";
    $resultado = mysqli_query($enlace,$query);

        $query = "SELECT * from usuarios";
        if ($resultado = mysqli_query($enlace,$query))
        {
            $fila = mysqli_fetch_array($resultado);
            echo "Tu nombre de usuario es ".$fila[1]." y tu password es ".$fila[2];
        }
    }

    mysqli_close($enlace);

?>