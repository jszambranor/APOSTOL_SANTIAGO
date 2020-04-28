<?php
session_start();
echo "¡Espere por favor...!";
echo  '<!DOCTYPE html>
 <html lang="es-ES" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Redireccionando...</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   </head>
   <body>
   <main>
     <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>

    <div class="spinner-layer spinner-red">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>

    <div class="spinner-layer spinner-yellow">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>

    <div class="spinner-layer spinner-green">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
   </main>

     <style media="screen">
       main{
         display: flex;
         justify-content: center;
         align-item: center;
         max-height: 100%;
       }
       .preloader-wrapper{
         margin-top: 20%;
       }
     </style>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script type="text/javascript" src="../../js/init.js"></script>
   </body>
 </html>';
if (is_null($_SESSION['USER_UEAS']) || is_null($_SESSION['TYPE_USER'])) {
  echo "<script>alert('TIENES QUE INICIAR SESION');</script>";
  $_SESSION = array();
  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
  }
  session_destroy();
  echo'<meta http-equiv="refresh" content="0; url=../index.php">';
}else {

if ($_SESSION['TYPE_USER'] === '1') {
echo'<meta http-equiv="refresh" content="1; url=./admin/index.php">';
}elseif ($_SESSION['TYPE_USER'] === '2') {
  echo '<meta http-equiv="refresh" content="1; url=./docentes/index.php">';
}elseif ($_SESSION['TYPE_USER'] === '3') {
  echo '<meta http-equiv="refresh" content="1; url=./alumnos/index.php">';
}elseif ($_SESSION['TYPE_USER'] != '1' && $_SESSION['TYPE'] != 2 && $_SESSION['TYPE'] != '3' ) {
  echo "<script>alert('EL TIPO DE USUARIO NO ESTA PERMITIDO');</script>";
  $_SESSION = array();
  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
  }
  session_destroy();
  echo'<meta http-equiv="refresh" content="1; url=../index.php">';
  }
}
 ?>
