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
  <div class="_tittle1"><a href="./nuestro_patrono.php"><b>NUESTRO PATRONO</b></a></div>

    </div>



  <div class="col s12 large">
    <h2 class="header">Apsotol Santiago</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="../images/apostol.jpg" style="">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>
           San Santiago Apóstol, llamado también San Santiago el Mayor, es uno de los doce apóstoles de Jesucristo. Era hijo de Zebedeo y hermano de San Juan Evangelista, autor del cuarto de los Evangelios y otro de los doce apóstoles. Los dos hermanos eran pescadores del mar de Galilea, donde los reclutó Jesucristo; desde entonces, Santiago formó parte del círculo más cercano al maestro.
          Después de la crucifixión de Jesús, el apóstol Santiago se dedicó a predicar la nueva fe, contribuyendo a la difusión del cristianismo en occidente. Una tradición española no documentada supone que Santiago viajó a Hispania para predicar por encargo del propio Jesucristo y que se le apareció la Virgen María en Zaragoza (en el lugar en donde luego se levantó la basílica del Pilar). Santiago murió decapitado durante las persecuciones contra los cristianos que ordenó el rey de Judea, Herodes Agripa I (es el único apóstol cuyo martirio aparece recogido en los Hechos de los Apóstoles).
          Según otra tradición medieval igualmente difícil de comprobar, su cuerpo llegó hasta Galicia y fue enterrado en el Campus Stellae, cerca de Padrón; allí se erigió un templo en el siglo IX, hacia el cual se encaminaron las peregrinaciones del Camino de Santiago; en torno al templo y a las peregrinaciones surgió la ciudad de Santiago de Compostela.
          Santiago fue tenido por patrono de la reconquista cristiana de la Península contra el Islam (dando nombre a una importante orden militar) y, ya en la época contemporánea, tanto la Virgen del Pilar como el propio Santiago se convirtieron en símbolos nacionales de España. Su festividad se conmemora el 25 de julio.</p>

          </p>
        </div>
        <div class="card-action">
          <a href="#"></a>
        </div>
      </div>
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
