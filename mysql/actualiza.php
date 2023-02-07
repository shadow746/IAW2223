
<?php
$servername = "sdb-53.hosting.stackcp.net";
$bd = "bdpruebas-35303035a708";
$username = "cristina";
$password = "Admin123";
$enlace = mysqli_connect($servername,$username,$password,$bd);

if(!$enlace)
{
    echo "error en la parte de enlace";
}else
{
    $query="UPDATE usuarios SET password='usuario' WHERE username='cristina' LIMIT 1";
    $resultado = mysqli_query($enlace,$query);
    
    if ($resultado)
    {
        echo "el usuario se actualizo bien";
    }else
    {
        echo "error ".mysqli_error($enlace);
    }
}
    myseqli_close($enlace);

?>