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
  
  echo "<p><h1> While</h1></p>";
  $fin=1;
  echo "<table>";
  while ($fin<11) {
      echo "<tr><td>".$fin."</td></tr>";

      $fin++;
  }
  echo "</table>";

?>
</body>
</html>

