<?php
require_once '../global/ClassGlobalConexion.php';
require_once '../model/mDocentes.php';
$cedula = $_POST['docentes'];
$aula = $_POST['cursos'];
$catedra = $_POST['catedras'];
$objConexion = new Conexion();
$conexion = $objConexion->get_Conexion();
$stmt = $conexion->prepare("SELECT MAX(COD_LECTIVO) AS LECTIVO FROM apostols_UEAS.LECTIVO");
$stmt->execute();
$lec = $stmt->fetch();
$stmt = null;
$lectivo = $lec['LECTIVO'];
$objDocente = new MDocentes();
echo $insert = $objDocente->asignar_Docente_Curso($aula,$cedula,$catedra,$lectivo);
/*$query = "INSERT INTO apostols_UEAS.AULAS_DOCENTES (COD_AULA,COD_CATEDRA,CEDULA_DOCENTE,COD_LECTIVO)
VALUES (:_COD_AULA,:_COD_CATEDRA,:_CEDULA_DOCENTE,:_COD_LECTIVO)";
$stmt = $conexion->prepare($query);
$stmt->bindParam(':_COD_AULA',$aula,PDO::PARAM_STR,4000);
$stmt->bindParam(':_COD_CATEDRA',$catedra,PDO::PARAM_STR,4000);
$stmt->bindParam(':_CEDULA_DOCENTE',$cedula,PDO::PARAM_STR,4000);
$stmt->bindParam(':_COD_LECTIVO',$lectivo,PDO::PARAM_STR,4000);
$stmt->execute();*/
 ?>
