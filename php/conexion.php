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

else{echo "Connected successfully";
mysqli_close($enlace);

}
?> 