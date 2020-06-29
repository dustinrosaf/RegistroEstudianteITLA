<?php

include 'layout/layout.php';
include 'helpers/utilities.php';

session_start();
$_SESSION['student'] = isset($_SESSION['student']) ? $_SESSION['student'] : array();

$listadoEstudiantes = $_SESSION['student'];

if(!empty($listadoEstudiantes)){

  if(isset($_GET['careerId'])){

        $listadoEstudiantes = searchProperty($listadoEstudiantes, 'career',$_GET['careerId']);

  }

}

?>

<?php printHeader(); ?>



<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Registro de Estudiantes ITLA</h1>
      <p class="lead text-muted">Para crear un nuevo registro de estudiante, favor dar clic en "Crear Nuevo Estudiante"</p>
      <p>
        <a href="Estudiantes/add.php" class="btn btn-primary my-2">Crear Nuevo Estudiante</a>
        
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">


      <?php if(empty($listadoEstudiantes)): ?>

        <h2>No hay Estudiantes registrados, registrelo aqui: <a href="Estudiantes/add.php" class="btn btn-primary"></a>Nuevo Estudiante</h2>

      <?php else : ?>  

        <div class="row">
          <div class="col-md-9"></div>
          <div class="col-md-3">

          <div class="btn-group">
            <a href="index.php?careerId=1" class="btn btn-dark text-light">Software</a>
            <a href="index.php?careerId=2" class="btn btn-dark text-light">Redes</a>
            <a href="index.php?careerId=3" class="btn btn-dark text-light">Multimedia</a>
            <a href="index.php?careerId=4" class="btn btn-dark text-light">Mecatronica</a>
            <a href="index.php?careerId=5" class="btn btn-dark text-light">Seguridad Informatica</a>
            <a href="index.php" class="btn btn-dark text-light">Todos</a>
            
          </div>

          </div>
        </div>

          <?php foreach ($listadoEstudiantes as $student) : ?> 
                 


        <div class="col-md-4">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $student['name'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $student['lastname'] ?></h6>
                    <p class="card-text"><?php echo getCareerName($student['career']) ?></p>
                    <p class="card-text"><?php echo $student['status']?></p>
                    <a href="Estudiantes/edit.php?id=<?php echo $student['id'];?>" class="card-link">Editar</a>
                    <a href="Estudiantes/delete.php?id=<?php echo $student['id'];?>" class="card-link">Borrar</a>
                 </div>
            </div>
        </div> 

          <?php endforeach; ?>
        
      <?php endif; ?>
        
      </div>
    </div>
  </div>

</main>

<?php printFooter(); ?>

