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
<div class="_tittle1"><a href="./autoridades.php"><b>DIRECTOR GENERAL</b></a></div>
<div class="imagen"><img src="../images/rector.jpg" alt="">
<div class="_contenido1">
  <div class="_tittle1"><a href="./autoridades.php"><b>Lcdo. Luis Chumo.</b></a></div>
<p> Director General de la Unidad Educativa Particular Apóstol Santiago,
  recibió la condecoración Gran Cruz de la Educación,
  en mérito a su vocación de servicio a la sociedad y
  distinguida trayectoria en el quehacer académico.
  Fue el 13 de Noviembre Día Nacional de la Educación,
  en el marco de la segunda edición de los Awards 2018,
  organizado por la Revista EDUCACIÓN en el Aula Magna
  de la Universidad Católica de Santiago de Guayaquil.</p>
</div>
<div class="_tittle1"><a href="./autoridades.php"><b>DIRECTORA ADMINISTRATIVA</b></a></div>
<div class="imagen"><img src="../images/vice.jpg" alt="">
<div class="_contenido1">
  <div class="_tittle1"><a href="./autoridades.php"><b>Lcda. Marisol Veliz Chavez.</b></a></div>
<p> Co-creadora de la escuela Tía Piedacita, ahora, Unidad Educativa Apóstol Santiago.
De carácter fuerte y amable, mantiene el liderazgo en la institución, misma que se
acerca a los mil estudiantes y se expande a nivel de infraestructura con un nuevo edificio de 3 pisos.

Tomado de twiter: “Por una educación de excelencia, más humana y con valores”.</p>
</div>
  </div>

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
