<?php
require_once('../global/ClassNavbar.php');
$objeto = new NavBar();
$navbar=$objeto->get_NavBarPublic();
$header=$objeto->get_HeaderPage();
$footer=$objeto->get_Footer();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $header;?>
  <link rel="stylesheet" href="../css/contenido.css">
</head>

<body>
  <?php
  echo $navbar;
  ?>
  <main>
  <div class="container">
    <div class="section">
<div class="_tittle"><a href="./mision.php"><b>MISION</b></a></div>
<div class="_contenido">
<p> “La Unidad Educativa Apóstol Santiago,
  es una institución que ofrece a sus estudiantes,
  desde la etapa preescolar, hasta educación general
  básica una educación integral e inclusiva, de respeto
  al buen vivir y a la naturaleza, mediante procesos
  pedagógicos innovadores, que le permitan desempeñarse
  en una sociedad globalizada, demostrando una alta calidad
  humana, deportiva, académica e investigativa.”</p>
</div>
    </div>
    <br><br>
  </div>
</main>

  <?php echo $footer;?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="./js/init.js"></script>
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
      M.AutoInit();
      var elems = document.querySelectorAll('.dropdown-trigger');
      var instances = M.Dropdown.init(elems);
    });
    $(document).ready(function() {

      $('.sidenav').sidenav();
      $('.dropdown-trigger').dropdown();
    });
  </script>

</body>

</html>
