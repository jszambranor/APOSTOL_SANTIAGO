<?php
session_start();
require_once '../../global/ClassGlobalConexion.php';
require_once '../../model/mConsultas.php';
$objConsultas = new Consultas();
$get_Cursos = $objConsultas->get_Cursos();
 ?>
 <!DOCTYPE html>
 <html lang="es">

 <head>
   <meta charset="utf-8">
   </meta>
   <title>Home Admin</title>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link type="text/css" rel="stylesheet" href="../../css/administrador_index.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 </head>

 <body>
 <header>
   <div class="navbar-fixed">
     <span>UNIDAD EDUCATIVA PARTICULAR APOSTOL SANTIAGO</span>
   </div>
   <main class="main">
     <div class="contenedor">
       <center>
       <div class="aulas">
         <?php echo $get_Cursos; ?>
       </div>
     </center>
     </div>
     <div class="fixed-action-btn">
       <a class="btn-floating btn-large red">
         <i class="large material-icons">apps</i>
       </a>
       <ul>
         <li><a class="btn-floating red" href="./"><i class="material-icons">home</i></a></li>
         <li><a class="btn-floating yellow darken-1" href="./"><i class="material-icons">fast_rewind</i></a></li>
     </div>
   </main>

   <footer>

   </footer>
   <style media="screen">
   .contenedor,.aulas{
     width: 100%;
   }

   .card-title{
     max-width: 100%;
   }

   .contenedor{
     display: flex;
     justify-content: center;
     align-items: center;
     margin-top: 3%;
   }
   .card{
     width: 20%;
     display: inline-block;
   }
   </style>
   <script type="text/javascript" src="../../js/jquery-3.4.1.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   <script type="text/javascript" src="../../js/index.js"></script>
 </body>

 </html>
