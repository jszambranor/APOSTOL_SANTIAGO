<?php
session_start();
if (is_null($_SESSION['USER_UEAS']) || is_null($_SESSION['TYPE_USER'])) {
  $_SESSION = array();
  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
  }
}else {
if ($_SESSION['TYPE_USER'] === '1') {
echo'<meta http-equiv="refresh" content="0; url=./admin/index.php">';
}elseif ($_SESSION['TYPE_USER'] === '2') {
  echo '<meta http-equiv="refresh" content="0; url=./docentes/index.php">';
}elseif ($_SESSION['TYPE_USER'] === '3') {
  echo '<meta http-equiv="refresh" content="0; url=./alumnos/index.php">';
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
