<?php
class Consultas{


 function __construct()
    {

    }

  public function get_Datos($arg_User){
    try {
      $objeto = new Conexion();
      $conexion = $objeto->get_Conexion();
    } catch (PDOException $e) {
      echo "¡Error!"." NO SE PUEDE PREPARA LA CONEXION ".$e->getMessage()."<br>";
      die();
    }

    try {
      $query = "SELECT * FROM apostols_UEAS.PERSONAS WHERE CEDULA = :_CEDULA";
      $stmt = $conexion->prepare($query);
      $stmt->bindParam(':_CEDULA',$arg_User,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "¡Error!"." NO SE PUEDE PREPARA LA CONSULTA ".$e->getMessage()."<br>";
      die();
    }

    try {
    if (!isset($stmt)) {
      echo "ERROR CONSULTA VACIA";
    }elseif ($stmt->execute()) {
      $data = $stmt->fetch();
      $stmt = null;
      return ($data);
    }
    } catch (PDOException $e) {
      echo "¡Error!"." NO SE PUEDE EJECUTAR LA CONSULTA ".$e->getMessage()."<br>";
      die();
    }

  }

  public function get_DatosAlumno($arg_Cedula){
    try {
      $query="SELECT * FROM PERSONAS WHERE CEDULA = :_CEDULA";
      $smtm = $conexion->prepare($query);
    } catch (PDOException $e) {
      echo "NO SE PUEDE PREPARAR LA CONSULTA"." ".$e->getMessage()."<br>";
      die();
    }

    try {
      $stmt->bindParam(':_CEDULA',$arg_Cedula,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "NO SE PUEDE ENVIAR LOS PARAMETROS A LA CONSULTA"." ".$e->getMessage()."<br>";
      die();
    }

    try {

      if ($stmt->execute()) {
        $data = $stmt->fetch();
        $stmt = null;
        return $data;
      }else{
        echo "NO SE PUEDE EJECUTAR LA CONSULTA INTENTE NUEVAMENTE";
      }

    } catch (PDOException $e) {
      echo "¡Error!"." NO SE PUEDE EJECUTAR LA CONSULTA ".$e->getMessage()."<br>";
      die();
    }

  }

  public function count_alumnos()
  {
    try {
      $objeto = new Conexion();
      $conexion = $objeto->get_Conexion();
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $query = "SELECT COUNT(ALUMNOS.CEDULA) AS ALUMNOS FROM apostols_UEAS.ALUMNOS";
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt = $conexion->prepare($query);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
        if (isset($stmt)) {
          if ($stmt->execute()) {
            $estadisticasA = $stmt->fetch();
            $stmt = null;
            return $estadisticasA;
          }else{
            return null;
          }
        }else {
          return null;
        }
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
  }

  public function count_docentes()
  {
    try {
      $objeto = new Conexion();
      $conexion = $objeto->get_Conexion();
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $query = "SELECT COUNT(DOCENTES.CEDULA) AS DOCENTES FROM apostols_UEAS.DOCENTES";
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
      $stmt = $conexion->prepare($query);
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }

    try {
        if (isset($stmt)) {
          if ($stmt->execute()) {
            $estadisticasD = $stmt->fetch();
            $stmt = null;
            return $estadisticasD;
          }else{
            return null;
          }
        }else {
          return null;
        }
    } catch (PDOException $e) {
      echo "<script>alert(".$e->getMessage().");</script>";
    }
  }

  public function get_Cursos()
  {
    $objConexion = new Conexion();
    $conexion = $objConexion->get_Conexion();
    $query = "SELECT * FROM apostols_UEAS.COD_AULAS,apostols_UEAS.CURSOS WHERE COD_AULAS.COD_CURSO = CURSOS.COD_CURSO";
    $stmt = $conexion->prepare($query);
    $cadena = "";
    if ($stmt->execute()) {
      //$cursos = $stmt->fetch();
      while ($cursos = $stmt->fetch()) {
        $cadena = $cadena.'
          <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="../../images/curso.png">
          </div>
          <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">'.$cursos["NOMBRE_CURSO"]." ".$cursos['COD_PARALELO'].'<i class="material-icons right">more_vert</i></span>
          <p><a href="reportes.php?curso='.$cursos['COD_AULA'].'">This is a link</a></p>
          </div>
          <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
          </div>
        ';
      }
      return $cadena;
    }
  }

  public function lista_Cursos($cedula_docente)
  {
    $objConexion = new Conexion();
    $conexion = $objConexion->get_Conexion();
    $query = "SELECT * FROM apostols_UEAS.CATEDRAS,apostols_UEAS.COD_AULAS,apostols_UEAS.CURSOS,apostols_UEAS.AULAS_DOCENTES WHERE AULAS_DOCENTES.CEDULA_DOCENTE = :_CEDULA_DOCENTE AND AULAS_DOCENTES.COD_AULA = COD_AULAS.COD_AULA AND COD_AULAS.COD_CURSO = CURSOS.COD_CURSO AND AULAS_DOCENTES.COD_CATEDRA = CATEDRAS.COD_CATEDRA ORDER BY COD_AULAS.COD_CURSO ASC";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':_CEDULA_DOCENTE',$cedula_docente,PDO::PARAM_STR,4000);
    $cadena = "";
    if ($stmt->execute()) {
      while ($liscurso = $stmt->fetch()) {
        $cadena = $cadena.'
        <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
        <img id="img" class="activator" src="../../images/aulas_list.png">
        </div>
        <div class="card-content">
        <b><a href="list_asistencias.php?curso='.$liscurso["COD_AULA"].'&paralelo='.$liscurso["COD_PARALELO"].'&catedra='.$liscurso["COD_CATEDRA"].'"><span id="titulo" class="card-title activator">'.$liscurso["NOMBRE_AULA"]." ".$liscurso["NOMBRE_CATEDRA"].'</span></a></b>
        </div>
        </div>
        ';
      }
      return $cadena;
    }
  }

  public function get_Catedras()
  {
    $objConexion = new Conexion();
    $conexion = $objConexion->get_Conexion();
    $query = "SELECT * FROM apostols_UEAS.CATEDRAS";
    $stmt = $conexion->prepare($query);
    $cadena = "";
    if ($stmt->execute()) {
      while ($catedras = $stmt->fetch()) {
        $cadena = $cadena.'
        <option value="'.$catedras["COD_CATEDRA"].'">'.$catedras['NOMBRE_CATEDRA'].'</option>
        ';
      }
    }
    return $cadena;
  }

  public function get_Docentes()
  {
    $objConexion = new Conexion();
    $conexion = $objConexion->get_Conexion();
    $query = "SELECT * FROM apostols_UEAS.DOCENTES,apostols_UEAS.PERSONAS WHERE PERSONAS.CEDULA = DOCENTES.CEDULA";
    $stmt = $conexion->prepare($query);
    $cadena = "";
    if ($stmt->execute()) {
      while ($docentes = $stmt->fetch()) {
        $cadena = $cadena.'
        <option value="'.$docentes["CEDULA"].'">'.$docentes['NOMBRES']." ".$docentes['APELLIDOS'].'</option>
        ';
      }
    }
    return $cadena;
  }

  public function get_Aulas()
  {
    $objConexion = new Conexion();
    $conexion = $objConexion->get_Conexion();
    $query = "SELECT * FROM apostols_UEAS.COD_AULAS ORDER BY NOMBRE_AULA ASC";
    $stmt = $conexion->prepare($query);
    $cadena = "";
    if ($stmt->execute()) {
      while ($cursos = $stmt->fetch()) {
        $cadena = $cadena.'
        <option value="'.$cursos["COD_AULA"].'">'.$cursos['NOMBRE_AULA'].'</option>
        ';
      }
    }
    return $cadena;
  }
}

 ?>
