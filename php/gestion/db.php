<?php
$host = 'sdb-w.hosting.stackcp.net';     
$database = 'gestion_incidencias-323133eda3';     
$conn = mysqli_connect($host,$database);   
if (!$conn) {                                             
    die("Conexión fallida con base de datos: " . mysqli_connect_error());     
  }
?>


