<?php
//para insertar codigo html sin añadir todo
header("content-type:text/html;charset=utf-8");
//datos
$servername = "sdb-53.hosting.stackcp.net";
$bd = "bdpruebas-35303035a708";
$username = "cristina";
$password = "Admin123";


$enlace = mysqli_connect($servername,$username,$password,$bd);

if(!$enlace)
{
    echo "error en enlace: ".mysqli_connect_error();

}else
{
    $query1="alter table usuarios ADD correo varchar(30)";
    $query2="alter table usuarios ADD direccion varchar(30)";

    $resultado1 = mysqli_query($enlace,$query1);
        if ($resultado1)
        {
            // ponemos la segunda columna que se inserte solo si la 1 se hizo bien
            $resultado2 = mysqli_query($enlace,$query2);
        if ($resultado2)
        {
            echo "hecho correctamente ambas";

        }else
        {
            echo "error <br>" . mysqli_error($enlace); //para saber que tipo de error tenemos, usar siempre
            // para no tardar en encontrar el problema
        }  
        //como pide un par de columnas debemos hacer ambos else o no podrás insertar ambas
     }  else
        {
        echo "error<br>" . mysqli_error($enlace);
        
     
        }
     //cerramos siempre
    mysqli_close($enlace);   
}

?>