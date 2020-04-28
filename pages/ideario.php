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
  <header>  <?php
    echo $navbar;
    ?>
</header>

<main>

  <div class="container">
    <div class="section">
  <div class="_tittle"><a href="./ideario.php"><b>IDEARIO</b></a></div>
  <div class="_contenido">
  <p> “<b>Aprendizaje permanente:</b> La concepción de la educación como un aprendizaje permanente que se desarrolla a lo largo de toda la vida.

<br><b>Interaprendizaje y multiaprendizaje:</b> Instrumentos para potenciar las capacidades humanas por medio de la cultura, el deporte, el acceso de la información y sus tecnologías, para alcanzar niveles de desarrollo personal y colectivo.

<br><b>Educación en valores:</b> La educación debe basarse en la transmisión de práctica de valores que promuevan la libertad personal, democracia, el respeto, la responsabilidad, la solidaridad, la tolerancia, etc.

<br><b>Igualdad de género:</b> Igualdad de condiciones y oportunidades.

<br><b>Educación para la democracia y el buen vivir:</b> Generar espacios democráticos promotores de una cultura de paz, libre de bullying, enmarcado en el respeto, la integración, la convivencia social, la inclusión y todo valor que genera una convivencia pacífica en el establecimiento.

<br><b>Cultura de paz y solución de conflictos:</b> La educación debe orientarse y construir una sociedad justa, una cultura de paz y no violencia, para la prevención, tratamiento y solución pacífica de conflictos en todos los espacios de la vida personal, escolar, familiar y social.

<br><b>Identidades culturales:</b> Derecho a una educación que les permita construir y desarrollar su propia identidad cultural, mediante espacios que los lleve a la reflexión y fortalecimiento de su cultura.”</p>
  </div>
    </div>
    <br><br>
  </div>
  </main>
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
