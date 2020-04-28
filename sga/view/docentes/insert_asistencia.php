<?php
session_start();
require_once '../../global/ClassGlobalConexion.php';
$objConexion = new Conexion();
$conexion = $objConexion->get_Conexion();
date_default_timezone_set("America/Guayaquil");
$fecha = date("Y-m-d");
//var_dump($cedula = $_POST['cedula[]']);
//$nombres = $_POST['estado[]'];
$cedula = $_POST['cedula'];
$estado = $_POST['estado'];
$aula = $_POST['aula'];
$c = 0;
foreach ($cedula as $key => $value) {
    $aula;
    $cedula[$c];
    $estado[$c];
    $fecha ;
    $query = "INSERT INTO apostols_UEAS.ASISTENCIAS (COD_AULA,CEDULA_ALUMNO,FECHA_ASISTENCIA,ESTADO_ASISTENCIA) VALUES (:_COD_AULA,:_CEDULA,:_FECHA,:_ESTADO)";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':_COD_AULA', $aula,PDO::PARAM_STR,4000);
    $stmt->bindParam(':_CEDULA', $cedula[$c],PDO::PARAM_STR,4000);
    $stmt->bindParam(':_FECHA', $fecha,PDO::PARAM_STR,4000);
    $stmt->bindParam(':_ESTADO', $estado[$c],PDO::PARAM_STR,4000);
    $stmt->execute();
    $c++;
}
echo "<script>alert('EXITO');"
. "window.location= 'index.php'";
