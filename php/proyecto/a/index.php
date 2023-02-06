<?php
    session_start();
    $error="";
    
    if (array_key_exists("Logout",$_GET))
    {
        //Viene de la página sesionIniciada
        session_unset();
        setcookie("id","",time()-60*60);
        $_COOKIE['id']="";
    }
    else if ((array_key_exists("id",$_SESSION) AND $_SESSION['id']) OR (array_key_exists("id",$_COOKIE) AND $_COOKIE['id']))
    {
        header ("Location: sesionIniciada.php");
    }

    if (array_key_exists("submit",$_POST))
    {
        include("connection.php");
        if (!$_POST['username'])
        {
            $error .= "<br>username requerido.";
        }
        if (!$_POST['password'])
        {
            $error .= "<br>Contraseña requerida.";
        }
        if ($error!="")
        {
            $error="<p>Hubo algun(os) error(es) en el formulario:".$error."</p>";
        }
        else
        { /*
            if ($_POST['registro']=='1')
            {
                $query="SELECT id FROM usuarios WHERE username='".mysqli_real_escape_string($enlace,$_POST['username'])."' LIMIT 1";
                $result = mysqli_query($enlace,$query);

                if (mysqli_num_rows($result)>0)
                {
                    $error="username ya registrado";
                }
                else
                {
                    $query="INSERT INTO usuarios(username,password) VALUES('".mysqli_real_escape_string($enlace,$_POST['username'])."','".mysqli_real_escape_string($enlace,$_POST['password'])."')";
                    if (!mysqli_query($enlace,$query))
                    {
                        $error="<p>No hemos podido completar el registro, por favor inténtelo más tarde</p>";
                    }
                    else
                    {
                        //Actualizar el almacenamiento del password
                        $query="UPDATE usuarios SET password='".md5(md5(mysqli_insert_id($enlace)).$_POST['password'])."' WHERE id=".mysqli_insert_id($enlace)." LIMIT 1";
                        mysqli_query($enlace,$query);
                        $_SESSION['id']=mysqli_insert_id($enlace);
                        if ($_POST['permanecerIniciada']=='1')
                        {
                            setcookie("id",mysqli_insert_id($enlace),time()+60*60*24*365);
                        }
                        header("Location: sesionIniciada.php");
                    }
                }
            }
            else
            {*/
                // Comprobamos el inicio de sesión
                $query="SELECT * FROM usuarios WHERE username='".mysqli_real_escape_string($enlace,$_POST['username'])."'";
                $result=mysqli_query($enlace,$query);
                $fila=mysqli_fetch_array($result);
                if (isset($fila))
                {
                    $passwordHasheada=md5(md5($fila['id']).$_POST['password']);
                    if ($passwordHasheada==$fila['password'])
                    {
                        //Usuario autenticado
                        $_SESSION['id']=$fila['id'];
                        if ($_POST['permanecerIniciada']=='1')
                        {
                            setcookie("id",$fila['id'],time()+60*60*24*365);
                        }
                        header("Location: sesionIniciada.php");
                    }
                    else
                    {
                        $error="El username/contraseña no pudo ser encontrado!";
                    }
                }
                else
                {
                        $error="El username/contraseña no pudo ser encontrado!";
                }
            //}
        }
    }

?>
<?php include("header.php"); ?>

<div class="container">
        <h1>incidencias</h1>
        <div id="error">
            <?php 
            if ($error!="")
                    {
                        echo "<div class=\"alert alert-danger\" role=\"alert\">".$error."</div>";
                    }
            ?>
        </div>
        <!-- para comentar 

             <form method="POST" id="formularioRegistro">
            <p>¿Interad@? Regístrate ahora!</p>
            <fieldset class="form-group">
            <input class="form-control" type="username" name="username" placeholder="Tu username">
            </fieldset>
            <fieldset class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
             </fieldset>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="permanecerIniciada" value=1>Permanecer iniciada
                </label>
            </div>    
            <fieldset class="form-group">
                <input type="hidden" name="registro" value=1>
                <input class="btn btn-success" type="submit" name="submit" value="Registrate!">
             </fieldset>
            <p><a class="alternarFormularios">Iniciar sesión</a></p>
        </form>
        --> 

        <div class="login">
    <h1>inicio sesion</h1>
    <form action="prueba.php" method="POST" id="formularioLogin" >

  </div>
  <div class="login-form">
    <h3>usuario:</h3>
    <input type="text"  name="username" placeholder="Tu username"><br>
    <h3>contraseña:</h3>
    <input type="password" id="password" name="password" placeholder="Password">
    <div class="checkbox">
            <label>
                <input type="checkbox" name="permanecerIniciada" >Permanecer iniciada
            </label>
            </div>

    <br>
    <input class="btn btn-success" type="submit" name="submit" value="Inicia sesion">
    <br>

   
  </div>

</div>



          