<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php 
   echo "<p><h1>Los dias que quedan para la feria</h1></p>";

   $d1=strtotime("April 23");
   $d2=ceil(($d1-time())/60/60/23);
   echo "Quedan " . $d2 ." dias hasta la Feria !!! (23th of April).";
?>
</body>
</html>

