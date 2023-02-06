<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

echo "<p><h1>Uso de switch</h1></p>";

$fecha=date('D/M/Y');
$dia=substr($fecha,0,3);

switch ($dia)
{
    case 'Mon': echo "Lástima es lunes, ¡Ánimo!<br>";
    break;
    case 'Tue': echo "Hoy es martes un pasito mas hacia el viernes<br>";
    break;
    case 'Wed'; echo "Bueno estamos en la mitad de la jornada labora, ya queda menos<br>";
    break;
    case 'Thu': echo "Si tienes suerte hoy es juernes, sino tranquilo ya mañana<br>";
    break;
    case 'Fri': echo "Aleluya por fin es viernes<br>";
    break;
    case 'Sat': echo "Sábado sabadete camisa limpia....<br>";
    break;
    case 'Sun': echo "Domingo disfruta que mañana de nuevo al calvario<br>";
    break;
    default: echo "Algo ha fallado";
}
echo "<br>";
?>

</body>
</html>