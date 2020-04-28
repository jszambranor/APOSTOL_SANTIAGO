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
</head>

<body>

  <?php
  echo $navbar;
  ?>

  <main>
  <div class="container">
    <div class="section">
<center>
      <div id="titulo"class="row card-panel"><a style="font-size:2rem;" href="./rubricas.php"><b>RUBRICAS</b></a></div>

  <img src="../images/rubricas.jpg">
</center>
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
