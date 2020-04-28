<?php
/**
 *
 */
class Docentes
{

  function __construct(argument)
  {

  }

  public function insert_docentes ($arg_Cedula,$arg_Nombres,$arg_Apellidos,$arg_Fecha,$arg_Telefono,$arg_Celular,$arg_Correo,$arg_Direccion,$arg_Foto)
  {
    $objConexion = new Conexion();
    $conexion = $objConexion->get_Conexion();
    $query = "CALL apostols_UEAS.SET_DOCENTES (:_CEDULA,:_NOMBRES,:_APELLIDOS,:_FECHA,:_TELEFONO,:_CELULAR,:_CORREO,:_DIRECCION,:_FOTO)";
    try {
      $stmt = $conexion->prepare($query);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->get_Message().");</script>";
    }
    try {
      $stmt->bindParam(':_CEDULA',$arg_Cedula,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->get_Message().");</script>";
    }
    try {
      $stmt->bindParam(':_NOMBRES',$arg_Nombres,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->get_Message().");</script>";
    }
    try {
      $stmt->bindParam(':_APELLIDOS',$arg_Apellidos,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->get_Message().");</script>";
    }
    try {
      $stmt->bindParam(':_FECHA',$arg_Fecha,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->get_Message().");</script>";
    }
    try {
      $stmt->bindParam(':_TELEFONO',$arg_Telefono,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->get_Message().");</script>";
    }
    try {
      $stmt->bindParam(':_CELULAR',$arg_Celular,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->get_Message().");</script>";
    }
    try {
      $stmt->bindParam(':_CORREO',$arg_Correo,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->get_Message().");</script>";
    }
    try {
      $stmt->bindParam(':_DIRECCION',$arg_Direccion,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->get_Message().");</script>";
    }

    try {
      $stmt->bindParam(':_FOTO',$arg_Foto,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->get_Message().");</script>";
    }

    try {
      if (isset($stmt)) {
        $estado = array();
        if ($stmt->execute()) {
          $query = "SELECT apostols_UEAS.PERSONAS.CEDULA AS DOCENTE_P, apostols_UEAS.DOCENTES.CEDULA AS DOCENTES_A FROM apostols_UEAS.PERSONAS,apostols_UEAS.DOCENTES WHERE PERSONAS.CEDULA = :_CEDULA AND DOCENTES.CEDULA = :_CEDULA_a ";
          $stmt = $conexion->prepare($query);
          $stmt->bindParam(':_CEDULA',$arg_Cedula);
          $stmt->bindParam(':_CEDULA_a',$arg_Cedula);
          $stmt->execute();
          $data = $stmt->fetch();
          if ($data['DOCENTES_P'] === $arg_Cedula && $data['DOCENTES_A'] === $arg_Cedula) {
            return 1;
          }else{
            return 0;
          }
        }else {
          return 0;
        }
      }else {
        return 0;
      }
    } catch (PDOException $e) {
      echo "<script>alert('ERROR '".$e->get_Message().");</script>";
    }
  }
}

 ?>
