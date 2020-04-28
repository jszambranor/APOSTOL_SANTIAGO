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
<style>
.btn{
  background-color: orange;
}
.btn:hover{
  background-color: #FFA600;
}
</style>
<body>

  <?php
  echo $navbar;
  ?>

  <main>
  <div class="container">
    <div class="section">
<center>
  <div id="titulo"class="row card-panel"><a style="font-size:2rem;" href="./rubricas.php"><b>CONTACTENOS</b></a></div>
</center>
<div id="titulo"class="row card-panel">
<form class="col s12" method="POST" action="../controller/ClassSendMail.php">
    <div class="row">

        <div class="input-field col s6">
            <input required="true" id="apellidos" name="apellidos" type="text" class="validate" onkeyup="Mayus(this);" onkeypress="return soloLetras(event)">
            <label id="select-input" for="apellidos">Apellidos *</label>
        </div>
        <div class="input-field col s6">
            <input required="true" id="nombres" name="nombres" type="text" class="validate" onkeyup="Mayus(this);" onkeypress="return soloLetras(event)">
            <label id="select-input" for="nombres">Nombres *</label>
        </div>
        <div class="input-field col s6">
            <input required="true" id="nombres" name="asunto" type="text" class="validate" onkeyup="Mayus(this);" onkeypress="return soloLetras(event)">
            <label id="select-input" for="nombres">Asunto *</label>
        </div>
        <div class="input-field col s12">
            <input required="true" id="mail" name="mail" type="email" class="validate" onkeypress="return soloMail(event)">
            <label id="select-input" for="mail">Correo Electrónico *</label>
        </div>
        <div class="input-field col s12">
          <textarea id="textarea2" class="materialize-textarea" data-length="300" required></textarea>
          <label for="textarea2">Mensaje</label>
</div>

        <div class="input-field col s12">
          <center>
            <button class="btn" type="submit" name="action" id="btn">ENVIAR MENSAJE
                <i class="material-icons left">send</i>
            </button>
          </center>
        </div>

    </div>
</form>
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
      $('input#input_text, textarea#textarea2').characterCounter();
      $('.sidenav').sidenav();
      $('.dropdown-trigger').dropdown();
    });
  </script>

</body>

</html>
