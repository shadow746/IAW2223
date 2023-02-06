<?php
    
// echo "<script>window.location='pagina.php';</script>";
$servername = "sdb-53.hosting.stackcp.net";
$bd = "bdpruebas-35303035a708";
$username = "cristina";
$password = "Admin123";

$enlace = mysqli_connect($servername, $username, $password, $bd);

    $enlace = mysqli_connect($servername, $username, $password, $bd);
    if (mysqli_connect_error())
    {
    die("Error de conexión en la base de datos");

    }


?>

