<?php
    session_start();

    header("content-type:text/html;charset=utf-8");
    $error="";
  
        
        

    if (array_key_exists("submit",$_POST))
    {   
        
        if(!$_POST["username"])
        {
            $error.="<br>El username es requerido.";
        }
        if(!$_POST["password"])
        {
            $error.="<br>El password es requerido.";
        }
        if ($error!="")
        {
            $error="<p>Hubo algun/os error/es en el formulario".$error."</p>";
        
            }else
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
                    
                        echo "<script>window.location='index.php';</script>";

                    }
                    else
                    {
                        $error="El usuario/contraseña no pudo ser encontrado!";
                    }
                }
                else
                {
                        $error="El usuario/contraseña no pudo ser encontrado";
                }
            
            
        }


    }
?>

<?php
    include("header.php");
?>
    <div class="container">
        <h1>Formulario de Login</h1>
        <div id="error">
            <?php
            echo $error;
            ?>

        </div>
        <div>
            <p><h3>Introduce tu username y contraseña para entrar al sistema</h3></p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="form-group">
                    <label for="username">Nombre de username
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="Ayudausername" placeholder="Escribe tu username">
                    </label>
                </div>
                <div class="form-group">
                    <label for="password">Password
                        <input type="password" name="password" aria-describedby="AyudaPasswd" class="form-control" id="password" placeholder="Escribe tu Password">
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="sesioniniciada" value=1 class="form-check-input" id="AyudaCheck">
                    <label class="form-check-label" for="AyudaCheck">Mantener Sesión</label>
                </div>
                    <br><button type="submit" name="submit" class="btn btn-primary">Login</button>

            </form>

        </div>
    </div>

<?php
    include("footer.php");
?>


          