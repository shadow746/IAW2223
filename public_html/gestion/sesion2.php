<?php

    /*
    
    session_start();

    if (array_key_exists("Logout",$_GET))
    {
        
        //Viene de la página index
        session_unset();
        setcookie("id","",time()-60*60);
        $_COOKIE['id']="";
    }
    else if ((array_key_exists("id",$_SESSION) AND $_SESSION['id']) OR (array_key_exists("id",$_COOKIE) AND $_COOKIE['id']))
    {
        header ("Location: sesion2.php");
    }
*/
    if (array_key_exists("submit",$_POST))
    {
        $host = "sdb-53.hosting.stackcp.net";   
$user = "cristina";   
$pass = "Admin123";   
$database = "bdpruebas-35303035a708";     
$conn = mysqli_connect($host,$user,$pass,$database);
        if (!$_POST['username'])
        {
            echo "<br>username requerido.";
        }
        if (!$_POST['password'])
        {
            echo "<br>Contraseña requerida.";
        }
        
        else
        {
            if ($_POST['registro']=='1')
            {
                $query="SELECT id FROM usuarios WHERE username='".mysqli_real_escape_string($conn,$_POST['username'])."' LIMIT 1";
                $result = mysqli_query($conn,$query);

                if (mysqli_num_rows($result)>0)
                {
                    $error="username ya registrado";
                }
                else
                {
                    $query="INSERT INTO usuarios(username,password) VALUES('".mysqli_real_escape_string($conn,$_POST['username'])."','".mysqli_real_escape_string($conn,$_POST['password'])."')";
                    if (!mysqli_query($conn,$query))
                    {
                        $error="<p>No hemos podido completar el registro, por favor inténtelo más tarde</p>";
                    }
                    else
                    {
                        //Actualizar el almacenamiento del password
                        $query="UPDATE usuarios SET password='".md5(md5(mysqli_insert_id($conn)).$_POST['password'])."' WHERE id=".mysqli_insert_id($conn)." LIMIT 1";
                        mysqli_query($conn,$query);
                        $_SESSION['id']=mysqli_insert_id($conn);
                      /*  if ($_POST['permanecerIniciada']=='1')
                        {
                            setcookie("id",mysqli_insert_id($conn),time()+60*60*24*365);
                             echo "<script>window.location='index.php';</script>";

                        }*/
                    }
                }
            }
            else
            {
                // Comprobamos el inicio de sesión
               
               $host = "sdb-53.hosting.stackcp.net";   
$user = "cristina";   
$pass = "Admin123";   
$database = "bdpruebas-35303035a708";     
$conn = mysqli_connect($host,$user,$pass,$database);
                $query="SELECT * FROM usuarios WHERE username='".mysqli_real_escape_string($conn,$_POST['username'])."'";
                $result=mysqli_query($conn,$query);
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
                        echo "<script>window.location='includes/home.php';</script>";
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
            }
        }
    }

?>
<?php include("header2.php"); ?>

      <div class="container">
        <h1>incidencias</h1>
        <p><strong>Informa tus incidencias</strong></p>
       <!-- <div id="error">
            <?php 
            if ($error!="")
                    {
                        echo "<div class=\"alert alert-danger\" role=\"alert\">".$error."</div>";
                    }
            ?>
        </div> 
        -->
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
        <form method="POST" id="formularioLogin">
            <p>Inicia sesión con tu usuario/contraseña</p>
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
                <input type="hidden" name="registro" value=0>
                <input class="btn btn-success" type="submit" name="submit" value="Inicia sesion">
            </fieldset>
            <p><a class="alternarFormularios">Regístrate</a></p>
        </form>
        </div>
    <?php include("footer2.php"); ?>



                