<?php

function printHeader($isPage = false){

  $directory = ($isPage) ? "../": "";

  $header = <<<EOF

  <html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.0.1">
  <title>Registro de Estudiantes ITLA</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

  <!-- Bootstrap core CSS -->
<link href="{$directory}assets\bootstrap\css\bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{$directory}assets\css\estilos.css" rel="stylesheet" type="text/css">

 
  
</head>
<body>
  <header>
<div class="collapse bg-dark" id="navbarHeader">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-7 py-4">
        <h4 class="text-white">Acerca de:</h4>
        <p class="text-muted">Esta pagina fue creada por Dustin Rosa Ferreras, Matricula:2018-6493</p>
      </div>
      
    </div>
  </div>
</div>
<div class="navbar navbar-dark bg-dark shadow-sm">
  <div class="container d-flex justify-content-between">
    <a href="{$directory}index.php " class="navbar-brand d-flex align-items-center">
  <strong>Inicio</strong>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</div>
</header>

EOF;

echo $header;

}

function printFooter($isPage = false){

  $directory = ($isPage) ? "../": "";

  $header = <<<EOF

  <footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Volver Arriba</a>
    </p>
    <p>Registro de Estudiante ITLA is © Bootstrap, CRUD</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="assets\bootstrap\js\bootstrap.min.js"> </script>      

</body></html>

EOF;

echo $header;

}




?>





