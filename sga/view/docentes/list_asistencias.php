<?php
session_start();
require_once '../../global/ClassGlobalConexion.php';
$objConexion = new Conexion();
$conexion = $objConexion->get_Conexion();
$aula = $_GET['curso'];
$catedra = $_GET['catedra'];
date_default_timezone_set("America/Guayaquil");
$date = date("Y-m-d");
$query = "SELECT COUNT(*) FROM apostols_UEAS.ASISTENCIAS WHERE FECHA_ASISTENCIA = :_FECHA AND COD_AULA = :_AULA";
$stmt = $conexion->prepare($query);
$stmt->bindParam(':_FECHA', $date, PDO::PARAM_STR, 4000);
$stmt->bindParam(':_AULA', $aula, PDO::PARAM_STR, 4000);
$stmt->execute();
$num_rows = $stmt->fetchColumn();
if ($num_rows > 0) {
    echo "<script>alert('UD YA TOMO ASISTENCIAS');"
    . "window.location='index.php';</script>";
}

$query = "SELECT * FROM apostols_UEAS.AULAS_ALUMNOS,apostols_UEAS.PERSONAS WHERE COD_AULA = :_COD_AULA AND COD_CATEDRA = :_COD_CATEDRA AND AULAS_ALUMNOS.CEDULA_ALUMNO = PERSONAS.CEDULA";
$stmt = $conexion->prepare($query);
$stmt->bindParam(':_COD_AULA', $aula, PDO::PARAM_STR, 4000);
$stmt->bindParam(':_COD_CATEDRA', $catedra, PDO::PARAM_STR, 4000);
$stmt->execute();
$cadena = "";


while ($alumnos = $stmt->fetch()) {
    //echo $alumnos['CEDULA'];
    //echo $alumnos['NOMBRES']." ".$alumnos['APELLIDOS'];
    //ECHO "EXITO";
    $cadena = $cadena . '
  <div class="input-field col s3">
    <input readonly id="cedula" name="cedula[]" type="text" value="' . $alumnos["CEDULA"] . '">
    <label for="">CEDULA</label>
  </div>
  <div class="input-field col s3">
    <input readonly  id="nombres" name="nombres[]" type="text" value="' . $alumnos["NOMBRES"] . '">
    <label for="">NOMBRES</label>
  </div>
  <div class="input-field col s3">
    <input readonly  id="disabled" name="apellidos[]" type="text" value="' . $alumnos["APELLIDOS"] . '">
    <label for="">APELLIDOS</label>
  </div>
  <div class="input-field col s2">
    <select class="requiere" required id="estado" name="estado[]" id="estado">
      <option value="" disabled selected>ESTADO</option>
      <option value="1">ASISTENCIA</option>
      <option value="2">ATRASO</option>
      <option value="3">FALTA</option>
    </select>
  </div><br>
  ';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mis Cursos</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        <div class="navbar-fixed">
            <div class="nav-wrapper">
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i>Menú</a>
            </div>
        </div>
    </header>

    <main>

        <div class="section container">
            <div class="row card-panel">
                <p><?php echo "NOMIDA DEL CURSO" . " " . $curso; ?></p>
            </div>
        </div>

        <div class="section container">
            <form class="col s16" action="./insert_asistencia.php" method="POST">
                <div class="row card-panel">
                    <?php echo $cadena; ?>
                    <input type="hidden" value="<?php echo $_GET['curso']; ?>" name="aula">
                    <div class="input-field col s2">

                        <button class="btn waves-effect waves-light" type="submit" name="registrar">REGISTRAR
                            <i class="material-icons right">send</i>
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer>

    </footer>

    <script type="text/javascript" src="../../js/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="../../js/index.js"></script>

    <style media="screen">
        nav{
            background-color: orange;
        }

        .section,.container{
            width: 90%;
        }

        .navbar-fixed{
            background-color: orange;
            display: flex;
            align-items: center;
            font-size: 2rem;
        }

        .sidenav-trigger{
            font-size: 2rem;
            display: flex;
            align-items: center;
            color: white;
        }
    </style>
</body>
</html>
