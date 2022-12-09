<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores numericos</title>
</head>
<body>

<?php  
$cadena = " esto es una variable de  cadena";  


echo "<p> cadena original es:" . $cadena . "</p>";
echo "<p> longitud: " . strlen($cadena) . "</p>";
echo "<p> numero de palabras dentro: " . str_word_count($cadena) . "</p>";
echo "<p> la inversa es: "  . strrev($cadena) . "</p>";
//echo "<p> x % y=" . $x % $y . "</p>";
$estatipo= strpos($cadena, "tipo");
echo "$estatipo";
if  ($estatipo=true){
    echo "<p> si esta la palabra tipo</p>";

}
else { 
    echo "<p> no esta la palabra tipo</p>";}
?>  


</body>
</html>

