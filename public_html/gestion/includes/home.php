<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >Gestión de incidencias (CRUD)</h1>
      <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Añadir incidencia</a>
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Planta</th>
              <th  scope="col">Aula</th>
              <th  scope="col">Descripción</th>
              <th  scope="col">Fecha alta</th>
              <th  scope="col">Fecha revisión</th>
              <th  scope="col">Fecha solución</th>
              <th  scope="col">Comentario</th>
              <th  scope="col" colspan="3" class="text-center">Operaciones</th>
            </tr>  
          </thead>
            <tbody>
              <tr>

          <?php
         
           // $query="SELECT * FROM incidencia";    
            $query = "SELECT incidencia.id, planta.nombrep, aula.nombrea, descripcion, fecha_alta, fecha_rev, fecha_sol, comentario FROM `incidencia` , `planta`, `aula` WHERE planta.id=incidencia.planta and aula.id=incidencia.aula;";
            
            $vista_incidencias= mysqli_query($conn,$query);

            while($row= mysqli_fetch_assoc($vista_incidencias)){
              $id = $row['id'];                
              $planta = $row['nombrep'];        
              $aula = $row['nombrea'];         
              $descripcion = $row['descripcion'];        
              $fecha_alta = $row['fecha_alta'];        
              $fecha_rev = $row['fecha_rev'];        
              $fecha_sol = $row['fecha_sol'];        
              $comentario = $row['comentario']; 
              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$planta}</td>";
              echo " <td > {$aula}</td>";
              echo " <td >{$descripcion} </td>";
              echo " <td >{$fecha_alta} </td>";
              echo " <td >{$fecha_rev} </td>";
              echo " <td >{$fecha_sol} </td>";
              echo " <td >{$comentario} </td>";
              echo " <td class='text-center'> <a href='view.php?incidencia_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> Ver</a> </td>";
              echo " <td class='text-center' > <a href='update.php?editar&incidencia_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> Editar</a> </td>";
              echo " <td class='text-center'>  <a href='delete.php?eliminar={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> Eliminar</a> </td>";
              echo " </tr> ";
      
                  } 
                 


                ?>
                 <?php
            $query2="SELECT * FROM incidencia";       
                        $resulta = mysqli_query($conn,$query2);
                        $numero = mysqli_num_rows($resulta);
                        echo 'Número de total de incidencias: ' . $numero;
                ?>
              </tr>  
            </tbody>
        </table>
  </div>
<div class="container text-center mt-5">
       <a href="../sesion2.php?Logout=1" class="btn btn-warning mt-5"> cerrar sesion </a>
    <div>
<?php include "../footer.php" ?>