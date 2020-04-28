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
  <div class="_tittle"><a href="./vision.php"><b>VISION</b></a></div>
  <div class="_contenido">
  <p> “Para el año 2024, la Unidad Educativa Apóstol Santiago,
    será reconocida por la comunidad educativa, por su excelencia
    académica en la formación de bachilleres, cimentada en principios
    y valores éticos y morales, capaces de aportar al crecimiento de
    la sociedad ecuatoriana y del mundo.”</p>
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
