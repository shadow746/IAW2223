<?php
$servername = "sdb-53.hosting.stackcp.net";
$bd = "bdpruebas-35303035a708";
$username = "cristina";
$password = "Admin123";

$servername2 = "sdb-53.hosting.stackcp.net";
$bd2 = "bdpruebas-35303035a708";
$username2 = "usuario";
$password2 = "usuario";

// Create connection
$enlace = mysqli_connect($servername, $username, $password, $bd);
$enlace2 = mysqli_connect($servername2, $username2, $password2, $bd2);

// Compruebo si hay o no enlace
if (!$enlace ) {
  die("Connection failed: " . mysqli_connect());
}


else
    {
        $query = "SELECT * from usuarios";
        if ($result = mysqli_query($enlace, $query))
        {
            $fila = mysqli_fetch_array($result);
             print_r($fila);
        }
    elseif 
         ($result2 = mysqli_query($enlace2, $query))
        {
            $fila2 = mysqli_fetch_array($result2);
             print_r($fila2);
        
    }
    mysqli_close($enlace);
        mysqli_close($enlace2);


?>
   