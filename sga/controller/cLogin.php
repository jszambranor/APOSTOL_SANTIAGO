<?php
class CLogin
{

  public function __construct()
  {

  }

private function cLogin($arg_User,$arg_Password){
  try {
    $objMLogin = new MLogin();
    $Login = $objMLogin->get_Credenciales($arg_User,$arg_Password);
  } catch (PDOException $e) {
    echo "<script>alert(".$e->getMessage().");</script>";
  }

  try {
    if (isset($Login)) {
      if ($Login['USER'] === $arg_User) {
        if ($Login['PASSWORD'] === $arg_Password) {
          session_start();
          $Login['TYPE'];
          $_SESSION['USER_UEAS'] = $Login['USER'];
          $_SESSION['TYPE_USER'] = $Login['TYPE'];
          echo'<meta http-equiv="refresh" content="0; url=./view/index.php">';
        }else {
          echo "<script>alert('¡Error! CONTRASEÑA INVALIDO');</script>";
        }
      }else {
        echo "<script>alert('¡Error! USUARIO INVALIDO');</script>";
      }
    }else{
      echo "<script>alert('¡Error! USUARIO O CONTRASEÑA NO VALIDOS')</script>";
    }
  } catch (PDOException $e) {
    echo "<script>alert(".$e->getMessage().");</script>";
  }
}

public function get_Login($arg_User,$arg_Password){
  $this->cLogin($arg_User,$arg_Password);
}
}
