<?php

    session_start();
    $contenidoDiario="";
    if (array_key_exists("id",$_COOKIE) && $_COOKIE['id']) {
        $_SESSION['id'] = $_COOKIE['id'];
    }
    if (array_key_exists("id",$_SESSION) && $_SESSION['id'])
    {
        include("connection.php");
        $query = "SELECT diario from usuarios WHERE id='".mysqli_real_escape_string($enlace,$_SESSION['id'])."' LIMIT 1";
        $result=mysqli_query($enlace,$query);
        $fila=mysqli_fetch_array($result);
        $contenidoDiario=$fila['diario'];
    }
    else
    {
        header("Location: index.php");
    }
    include("header.php");
?>
<nav class="navbar navbar-light bg-faded navbar-fixed-top">
  <a class="navbar-brand" href="#">Diario Secreto</a>
  <div class="pull-xs-right">
    <a href="index.php?Logout=1"><button class="btn btn-success-outline" type="submit">Cerrar Sesión</button></a>
    </div>
</nav>
<div class="container-fluid" id="contenedorSesionIniciada">
    <textarea id="diario" class="form-control"><?php echo $contenidoDiario; ?></textarea>
</div>
<?php include("footer.php"); ?>