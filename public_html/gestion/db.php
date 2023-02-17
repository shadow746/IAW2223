<?php
//    session_start();

  if (array_key_exists("id",$_COOKIE)) {
        $_SESSION['id'] = $_COOKIE['id'];
    }
    
    if (array_key_exists("id",$_SESSION)) {
$host = "sdb-53.hosting.stackcp.net";   
$database = "bdpruebas-35303035a708";     
$conn = mysqli_connect($host,$database);   
if (!$conn) {                                             
    die("Conexión fallida con base de datos: " . mysqli_connect_error());     
  }
  
  
    } else {
    echo "<script>window.location.href = 'https://iawcristina-com.stackstaging.com/gestion/sesion2.php';</script>";
}
?>





