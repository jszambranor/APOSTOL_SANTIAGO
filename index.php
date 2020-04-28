<?php
require_once('./global/ClassNavbar.php');
$objeto = new NavBar();
$navbar=$objeto->get_NavBarIndex();
$footer=$objeto->get_Footer();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>UE Apostol Santiago</title>
  <link rel="icon" type="image/png" href="./images/icon.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link rel="stylesheet" type="text/css" href="./css/index.css">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/footer.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
  <header>
    <?php
    echo $navbar;
    ?>
  </header>

<main>

  <div class="slider">
<ul class="slides">
  <li>
    <img id="slider" src="./images/slider/img1.jpeg"> <!-- random image -->
    <div class="caption center-align">
      <h3>This is our big Tagline!</h3>
      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
    </div>
  </li>
  <li>
    <img id="slider" src="./images/slider/img2.jpeg"> <!-- random image -->
    <div class="caption left-align">
      <h3>Left Aligned Caption</h3>
      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
    </div>
  </li>
  <li>
    <img id="slider" src="./images/slider/img3.jpeg"> <!-- random image -->
    <div class="caption right-align">
      <h3>Right Aligned Caption</h3>
      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
    </div>
  </li>
  <li>
    <img id="slider" src="./images/slider/img4.jpeg"> <!-- random image -->
    <div class="caption center-align">
      <h3>This is our big Tagline!</h3>
      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
    </div>
  </li>
  <li>
    <img id="slider" src="./images/slider/img5.jpeg"> <!-- random image -->
    <div class="caption center-align">
      <h3>This is our big Tagline!</h3>
      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
    </div>
  </li>
</ul>
</div>


  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <center><img id="logo" src="./sga/images/logo.png"></center>
      <h1 class="header center"><b>Bienvenido</b></h1>
      <div class="row center">
        <h5 class="header col s12 light">Toda la información historica, actual y referente a las actividades de nuestra institucion podras encontrarlas en este portal.</h5>
      </div>
      <div class="row center">
        <a href="./pages/utiles_escolares.php" id="download-button" class="btn-large "><i class="material-icons left">description</i>Lista de Utiles Escolares</a>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 ">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">folder</i></h2>
            <h5 id="archivos-titulo" class="center"><b>ARCHIVOS DE INTERES</b></h5>
            <a id="archivos" href="./document/codconvivencia.pdf" target="_blank"><i class="material-icons">archive</i>Codigo de Convivencia</a><br>
            <a id="archivos" href="./document/pci.pdf" target="_blank"><i class="material-icons">archive</i>Plan Curricular Institucional</a><br>
            <a id="archivos" href="./document/Cod_ninez.pdf" target="_blank"><i class="material-icons">archive</i>Codigo de la Niñez</a><br>
            <a id="archivos" href="./document/Constitucion de bolsillo.pdf" target="_blank"><i class="material-icons">archive</i>Constitucion de Bolsillo</a><br>
            <a id="archivos" href="./document/Ley_de_Educación.pdf" target="_blank"><i class="material-icons">archive</i>Ley de Educacion</a><br>
            <a id="archivos" href="./document/riesgos.pdf" target="_blank"><i class="material-icons">archive</i>Plan de Reduccion de Riesgos</a><br>
            <a id="archivos" href="./document/manualcontratacion.pdf" target="_blank"><i class="material-icons">archive</i>Manual de Contratacion</a><br>
          </div>
        </div>
      </div>
    </div>
    <br><br>
  </div>



  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center"><b>MISION</b></h5>

            <p class="header col s12 light">La Unidad Educativa Apóstol Santiago, es una institución que ofrece a sus estudiantes, desde la etapa preescolar, hasta educación general básica una educación integral e inclusiva...</p>
            <a href="./pages/vision.php">Ver mas...</a>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center"><b>VISION</b></h5>

            <p class="header col s12 light">Para el año 2024, la Unidad Educativa Apóstol Santiago, será reconocida por la comunidad educativa, por su excelencia académica en la formación de...</p>
            <a href="./pages/vision.php">Ver mas...</a>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center"><b>IDEARIO</b></h5>

            <p class="header col s12 light">Aprendizaje permanente: La concepción de la educación como un aprendizaje permanente que se desarrolla a lo largo de toda la vida. Interaprendizaje y multiaprendizaje: Instrumentos para potenciar las capacidades humanas por medio de la cultura...</p>
            <a href="./pages/ideario.php">Ver mas...</a>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 ">
          <div id]="p-block" class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons"></i></h2>
            <h5 class="center"><b>NUESTRO PATRONO</b></h5>
            <div id="block"><img style="width:100%;"  src="./images/apostol.jpg" alt=""></div>
            <div id="block1"><p id"p-block" class="light">
              San Santiago Apóstol, llamado también San Santiago el Mayor, es uno de los doce apóstoles de Jesucristo.
              Era hijo de Zebedeo y hermano de San Juan Evangelista, autor del cuarto de los Evangelios y otro de los
              doce apóstoles.
              Los dos hermanos eran pescadores del mar de Galilea, donde los reclutó Jesucristo; desde entonces,
              Santiago formó parte del círculo más cercano al maestro.
              Después de la crucifixión de Jesús, el apóstol Santiago se dedicó a predicar la nueva fe,
              contribuyendo a la difusión del cristianismo en occidente.
              Una tradición española no documentada supone que Santiago viajó a Hispania para predicar
              por encargo del propio Jesucristo y que se le apareció la Virgen María en Zaragoza
              ...
            </p>
            <a href="./pages/nuestro_patrono.php">Ver mas...</a></div>
          </div>
        </div>


      </div>

    </div>
    <br><br>
  </div>

</main>

  <?php echo $footer;?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="./js/materialize.js"></script>
  <script src="./js/init.js"></script>
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
      M.AutoInit();
      var elems = document.querySelectorAll('.dropdown-trigger');
      var instances = M.Dropdown.init(elems);
      var elems1 = document.querySelectorAll('.parallax');
      var instances1 = M.Parallax.init(elems1);
    });
    $(document).ready(function() {

      $('.sidenav').sidenav();
      $('.dropdown-trigger').dropdown();
      $('.slider').slider();
    });
  </script>

</body>

</html>
