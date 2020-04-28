<?php

class MLogin
{

  function __construct()
  {

  }

  private function login($arg_User,$arg_Password){
    try {
      $objConexion = new Conexion();
      $conexion = $objConexion->get_Conexion();
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $query = "SELECT * FROM apostols_UEAS.USUARIOS WHERE USER = :_USER AND PASSWORD = :_PASSWORD";
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt = $conexion->prepare($query);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt->bindParam(':_USER',$arg_User,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt->bindParam(':_PASSWORD',$arg_Password,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      if (isset($stmt)) {
        if ($stmt->execute()) {
          $credenciales = $stmt->fetch();
          $stmt=null;
          return $credenciales;
        }else {
          $stmt=null;
          return null;
        }
      }else {
        $stmt=null;
        return null;
      }
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
  }

  public function get_Credenciales($arg_User,$arg_Password){
    return $this->login($arg_User,$arg_Password);
  }
}
