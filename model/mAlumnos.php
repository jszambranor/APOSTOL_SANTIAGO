<?php
/**
 *
 */
class MAlumnos
{

  function __construct()
  {

  }

  private function mAlumnos($arg_Cedula,$arg_Nombres,$arg_Apellidos,$arg_Fecha,$arg_Telefono,$arg_Celular,$arg_Correo,$arg_Direccion,$arg_Foto,
  $arg_Curso,$arg_Paralelo,$arg_Jornada,$arg_Enfermedad,$arg_Alergias,$arg_Cedula_R,$arg_Nombres_R,$arg_Apellidos_R,$arg_Fecha_R,$arg_Telefono_R,
  $arg_Celular_R,$arg_Correo_R,$arg_Direccion_R,$arg_Foto_R){
    try {
      $objConexion = new Conexion();
      $conexion = $objConexion->get_Conexion();
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $query = "CALL apostols_UEAS.SET_ALUMNOS(:_CEDULA,:_NOMBRES,:_APELLIDOS,:_FECHA,:_TELEFONO,:_CELULAR,:_CORREO,:_DIRECCION,:_FOTO,
      :_COD_CURSO,:_COD_PARALELO,:_COD_JORNADA,:_ENFERMEDADES,:_ALERGIAS,:_CEDULA_R,:_NOMBRES_R,:_APELLIDOS_R,:_FECHA_R,:_TELEFONO_R,
      :_CELULAR_R,:_CORREO_R,:_DIRECCION_R,:_FOTO_R)";
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt = $conexion->prepare($query);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
    try {
      $stmt->bindParam(':_CEDULA',$arg_Cedula,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
    try {
      $stmt->bindParam(':_NOMBRES',$arg_Nombres,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
    try {
      $stmt->bindParam(':_APELLIDOS',$arg_Apellidos,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
    try {
      $stmt->bindParam(':_FECHA',$arg_Fecha,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
    try {
      $stmt->bindParam(':_TELEFONO',$arg_Telefono,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
    try {
      $stmt->bindParam(':_CELULAR',$arg_Celular,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
    try {
      $stmt->bindParam(':_CORREO',$arg_Correo,PDO::PARAM_STR,4000);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
    try {
      $stmt->bindParam(':_DIRECCION',$arg_Direccion,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt->bindParam(':_FOTO',$arg_Foto,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt->bindParam(':_COD_CURSO',$arg_Curso,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt->bindParam(':_COD_PARALELO',$arg_Paralelo,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt->bindParam(':_COD_JORNADA',$arg_Jornada,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt->bindParam(':_ENFERMEDADES',$arg_Enfermedad,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt->bindParam(':_ALERGIAS',$arg_Alergias,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt->bindParam(':_CEDULA_R',$arg_Cedula_R,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt->bindParam(':_NOMBRES_R',$arg_Nombres_R,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt->bindParam(':_APELLIDOS_R',$arg_Apellidos_R,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt->bindParam(':_FECHA_R',$arg_Fecha_R,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
    try {
      $stmt->bindParam(':_TELEFONO_R',$arg_Telefono_R,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
    try {
      $stmt->bindParam(':_CELULAR_R',$arg_Celular_R,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
    try {
      $stmt->bindParam(':_CORREO_R',$arg_Correo_R,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
    try {
      $stmt->bindParam(':_DIRECCION_R',$arg_Direccion_R,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt->bindParam(':_FOTO_R',$arg_Foto_R,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      if (isset($stmt)) {
        $estado = array();
        if ($stmt->execute()) {
          $query = "SELECT PERSONAS.CEDULA AS ALUMNO_P, ALUMNOS.CEDULA AS ALUMNO_A FROM apostols_UEAS.PERSONAS,apostols_UEAS.ALUMNOS WHERE PERSONAS.CEDULA = :_CEDULA AND ALUMNOS.CEDULA = :_CEDULA_a ";
          $stmt = $conexion->prepare($query);
          $stmt->bindParam(':_CEDULA',$arg_Cedula);
          $stmt->bindParam(':_CEDULA_a',$arg_Cedula);
          $stmt->execute();
          $data = $stmt->fetch();
          if ($data['ALUMNO_P'] === $arg_Cedula && $data['ALUMNO_A'] === $arg_Cedula) {
            return 1;
          }else{
            return 0;
          }
        }else {
          echo "error";
          return 0;
        }
      }else {
        return 0;
      }
    } catch (PDOException $e) {
      echo "<script>alert('ERROR '".$e->getMessage().");</script>";
    }
  }

  public function set_MAlumnos($arg_Cedula,$arg_Nombres,$arg_Apellidos,$arg_Fecha,$arg_Telefono,$arg_Celular,$argCorreo,$arg_Direccion,$arg_Foto,
  $arg_Curso,$arg_Paralelo,$arg_Jornada,$arg_Enfermedad,$arg_Alergias,$arg_Cedula_r,$arg_Nombres_r,$arg_Apellidos_r,$arg_Fecha_r,$arg_Telefono_r,
  $arg_Celular_r,$argCorreo_r,$arg_Direccion_r,$arg_Foto_r)
  {
    return $this->mAlumnos($arg_Cedula,$arg_Nombres,$arg_Apellidos,$arg_Fecha,$arg_Telefono,$arg_Celular,$argCorreo,$arg_Direccion,$arg_Foto,
    $arg_Curso,$arg_Paralelo,$arg_Jornada,$arg_Enfermedad,$arg_Alergias,$arg_Cedula_r,$arg_Nombres_r,$arg_Apellidos_r,$arg_Fecha_r,$arg_Telefono_r,
    $arg_Celular_r,$argCorreo_r,$arg_Direccion_r,$arg_Foto_r);
  }
}
 ?>
