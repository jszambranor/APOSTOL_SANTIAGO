<?php
session_start();
if (isset($_SESSION['USER_UEAS'])) {
    $_SESSION['USER_UEAS'];
    $_SESSION['TYPE_USER'];
    require_once('../../global/ClassGlobalConexion.php');
    require_once('../../model/mConsultas.php');

    $objeto = new Consultas();
    $conexion = $objeto->get_Datos($_SESSION['USER_UEAS']);
    $estadisticasA = $objeto->count_alumnos();
    $estadisticasD = $objeto->count_docentes();
    $catedras = $objeto->get_Catedras();
    $docentes = $objeto->get_Docentes();
    $cursos = $objeto->get_Aulas();
} else {
}

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
</header>
  <main class="main">
      <center>
        <div class="opciones">
          <div class="botones red">
          <a class="waves-effect waves-light" href="./registro_alumnos.php"><span>AGREGAR ESTUDIANTES</span></a>
          </div>
          <div class="botones blue">
          <a class="waves-effect waves-light" href="./registro_docentes.php"><span>AGREGAR DOCENTES</span></a>
          </div>
          <div class="botones green">
          <a class="waves-effect waves-light" href="lista_cursos_reportes.php"><span>REPORTE DE ASISTENCIAS</span></a>
          </div>
        </div>
      </center>
    <center>
    <div class="tittle">
      <div class="content">
        <span>ESTADISTICAS</span>
        <img src="../../images/estadistica.png" alt="">
      </div>
    </div>
    <div class="estadisticas">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="../../images/estudiantes.png">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">ALUMNOS <?php echo $estadisticasA['ALUMNOS']; ?></span>

            </div>
          </div>

          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="../../images/docentes.png">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">DOCENTES <?php echo $estadisticasD['DOCENTES']; ?></span>
            </div>
          </div>
    </div>

  </center>
  <center>
    <div class="opciones">
      <div class="botones pink">
      <a class="waves-effect waves-light modal-trigger" href="#asignacion_docente"><span>ASIGNAR DOCENTES</span></a>
      </div>
             <div class="botones red"  id="logout">
          <a class="waves-effect waves-light" href="../../global/logout.php"><span>CERRAR SESION</span></a>

      </div>
    </div>
    
       

  </center>
  </main>

    <div id="asignacion_docente" class="modal">
      <div class="modal-content">
      <center><b><h4>ASIGANCION DE CURSOS A DOCENTE</h4></b></center>
      <!--  <div class="container" id="container">
          <div class="row">-->
            <form id="frmdocentes" action="../../controller/asignar_docente_curso.php"  method="POST">
              <div class="row">
                <div class="input-field col s12">
                  <select id="docentes" name="docentes">
                    <option value="" disabled selected>DOCENTES</option>
                    <?php echo $docentes; ?>
                  </select>
                </div>
                <div class="input-field col s12">
                  <select id="cursos" name="cursos">
                    <option value="0" disabled selected>CURSOS</option>
                    <?php echo $cursos; ?>
                  </select>
                </div>
                <div class="input-field col s12">
                  <select id="catedras" name="catedras">
                    <option value="0">CATEDRAS</option>
                    <?php echo $catedras; ?>
                  </select>
                </div>
                <br><br><br>
                <center>
                <button type="submit" class="btn waves-effect waves-light"  name="btn_asignar" id="btn_asignar">ASIGNAR CURSO
                  <i class="material-icons left">verified_user</i>
                </button>
              </center>
              </div>
            </form>
          </div>
    </div>
  <footer>

  </footer>

  <style media="screen">
  .card{
    max-width: 20%;
  }
    .card-image{
      max-height: 200px;
    }
    .card-image img{
      max-width: 100%;
      max-height: 198px;
    }

    .opciones a{
      width: 100%;
    }

    .modal{
      width: 80%;
      height: 700px;
    }
  </style>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="../../js/index.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
  		$('#btn_asignar').click(function(){
        var docente_selected= $('#docentes').val();
        var curso_selected = $('#cursos').val();
        var catedra_selected = $('#catedras').val();
  			$.ajax({
  				type:"POST",
  				url:"../../controller/asignar_docente_curso.php",
  				data:{"docentes" : docente_selected,"cursos" : curso_selected, "catedras" : catedra_selected},
  				success:function(r){
  					if(r==1){
  						alert("agregado con exito");
              window.location.reload();
  					}else{
  						alert("Fallo el server");
  					}
  				}
  			});
  			return false;
  		});
  	});
  </script>
</body>

</html>
