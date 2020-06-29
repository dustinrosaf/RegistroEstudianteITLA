<?php

include '../layout/layout.php';
include '../helpers/utilities.php';

session_start();

if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['career']) && isset($_POST['status']) ){

    $_SESSION['student'] = isset($_SESSION['student']) ? $_SESSION['student'] : array();

    $student = $_SESSION['student'];
  
    $studentId = 1;

    if(!empty($student)){

        $lastElement = getLastElement($student);
        $studentId = $lastElement['id'] + 1;

    }

  

  array_push($student , [ 'id' =>$studentId ,'name'=> $_POST['name'],'lastname' => $_POST['lastname'] ,'career' => $_POST['career'] ,'status' => $_POST['status'] ]);

  $_SESSION['student'] =$student;

  header("Location: ../index.php");
  exit();
  
}

?>

<?php printHeader(true); ?>

<main role="main">

<div class="card">
  <div class="card-header">
   <a href="../index.php" class="btn btn-warning"> Volver Atras</a> Crear Nuevo Estudiante
  </div>
  <div class="card-body">

  <form action="add.php" method="POST" >
  <div class="form-group">
    <label for="name">Nombre del Estudiante</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="form-group">
    <label for="lastname">Apellido del Estudiante</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
  </div>

  <div class="form-group">
    <label for="career">Carrera a la cual pertenece</label>
    <select class="form-control" id="career" name="career">
    
    <?php foreach($career as $id => $text): ?>
     
        <option value="<?php echo $id ?>"> <?php echo $text; ?> </option> 


    <?php endforeach; ?>   

    </select>
  </div>

  <div class="form-group">
  Estatus del Estudiante
  <label for="status">Activo</label>
  <input type="checkbox" checked="" class="form-control" id="activo" name="status">

  <label for="status">Inactivo</label>
  <input type="checkbox" disabled="" class="form-control" id="inactivo" name="status">
  </div>
  <button type="submit" class="btn btn-success">Guardar</button>
 </form>

  </div>
</div>
</main>

<?php printFooter(true); ?>

 