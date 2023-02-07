<?php
$servername = "sdb-53.hosting.stackcp.net";
$bd = "bdpruebas-35303035a708";
$username = "cristina";
$password = "Admin123";

// Create connection
$enlace = mysqli_connect($servername, $username, $password, $bd);

// Compruebo si hay o no enlace
if (!$enlace) {
  die("Connection failed: " . mysqli_connect());
}

else{
$query ="SELECT * FROM usuarios LIMIT 1";    
//echo "Connected successfully";

$resultado = mysqli_query($enlace,$query);
if ($resultado) {

    $fila = mysqli_fetch_array($resultado);
    print_r($fila);
}


mysqli_close($enlace);

}
?> 