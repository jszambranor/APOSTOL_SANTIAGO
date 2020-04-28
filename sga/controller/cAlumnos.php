<?php
/**
 *
 */
class CAlumnos
{

  function __construct()
  {

  }


  public function set_CAlumnos($arg_Cedula,$arg_Nombres,$arg_Apellidos,$arg_Fecha,$arg_Telefono,$arg_Celular,$argCorreo,$arg_Direccion,$arg_Foto,
  $arg_Curso,$arg_Paralelo,$arg_Jornada,$arg_Enfermedad,$arg_Alergias,$arg_Cedula_r,$arg_Nombres_r,$arg_Apellidos_r,$arg_Fecha_r,$arg_Telefono_r,
  $arg_Celular_r,$argCorreo_r,$arg_Direccion_r,$arg_Foto_r){

    try {
      $objMAlumnos = new Malumnos();
      $mAlumnos = $objMAlumnos->set_MAlumnos($arg_Cedula,$arg_Nombres,$arg_Apellidos,$arg_Fecha,$arg_Telefono,$arg_Celular,$argCorreo,$arg_Direccion,$arg_Foto,
      $arg_Curso,$arg_Paralelo,$arg_Jornada,$arg_Enfermedad,$arg_Alergias,$arg_Cedula_r,$arg_Nombres_r,$arg_Apellidos_r,$arg_Fecha_r,$arg_Telefono_r,
      $arg_Celular_r,$argCorreo_r,$arg_Direccion_r,$arg_Foto_r);
      return $mAlumnos;
    } catch (PDOException $e) {
      echo "<script>alert('¡Error!".$e->get_Message()."');</script>";
    }
  }
}
 ?>
