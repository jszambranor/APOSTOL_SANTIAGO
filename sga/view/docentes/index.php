<?php
session_start();
if (isset($_SESSION['USER_UEAS'])) {
    $user = $_SESSION['USER_UEAS'];
    $user_type = $_SESSION['TYPE_USER'];
    require_once('../../global/ClassGlobalConexion.php');
    require_once('../../model/mConsultas.php');
    $objeto = new Consultas();
    $list_cursos = $objeto->lista_Cursos($user);
} else {
}

 ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  </meta>
  <title>Home Docente</title>
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
</header>
  <main class="main">
      <style>
          #logout{
              margin-top: 2%;
              margin-left: 2%;
              width: 150px;
          }
      </style>
      <div class="botones red" class="left" id="logout">
          <center>
          <a class="waves-effect waves-light" href="../../global/logout.php"><span>CERRAR SESION</span></a>
          </center>
      </div>
    <center>
    <div class="tittle">
      <div class="content">
        <span>MIS CLASES</span>
        <img src="../../images/misclases.png" alt="">
      </div>
    </div>

  </center>
  <center>
  <div class="myclass">
    <?php echo $list_cursos; ?>
  </div>
</center>
  </main>

  <footer>

  </footer>

  <style media="screen">
  .card{
    max-width: 20%;
    max-height: 450px;
    margin-bottom: 3%;
    border: 2px solid;
    padding: 0;
  }
    .card-image{
      max-height: 30%;
      max-width: 50%;
    }
    .card-image img{
      max-width: 50%;
      max-height: 70%;
      margin-bottom: 1%;
    }
    .card-content{
      margin-top: 0;
      font-size: 20px;
      font-weight: bold;
      max-width: 100%;
    }

    #titulo{
      margin-top: 0;
      font-size: 13px;
      max-width: 80%;
      max-height: 100%;
      font-weight: bold;
      color : #673ab7;
      margin-bottom: 0;
    }

    #img{
      max-height: 100%;
      max-width: 90%;
    }

    @media screen and (min-width: 321px) and (max-width: 768px){
      .card{
        display: inline;
      }
    }


  </style>
  <script type="text/javascript" src="../../js/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="../../js/index.js"></script>
</body>

</html>
