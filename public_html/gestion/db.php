<?php
$host = "sdb-53.hosting.stackcp.net";   
$user = "cristina";   
$pass = "Admin123";   
$database = "bdpruebas-35303035a708";     
$conn = mysqli_connect($host,$user,$pass,$database);   
if (!$conn) {                                             
    die("Conexión fallida con base de datos: " . mysqli_connect_error());     
  }
?>





