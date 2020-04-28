<?php
/**
 *
 */
class CDocentes
{

  function __construct()
  {

  }

  public function insert_Docentes_C($arg_Cedula,$arg_Nombres,$arg_Apellidos,$arg_Fecha,$arg_Telefono,$arg_Celular,$arg_Correo,$arg_Direccion,$arg_Foto)
  {
    if (empty($arg_Cedula) || empty($arg_Nombres) || empty($arg_Apellidos) || empty($arg_Fecha) || empty($arg_Telefono) || empty($arg_Celular) || empty($arg_Correo) ||
            empty($arg_Direccion) || empty($arg_Foto)) {

              echo "<script>alert('COMPLETE TODOS LOS CAMPOS');
              window.location = './registro_docentes.php'</script>";

    }else {
      $objMDocentes = new MDocentes();
      $arg_Cedula; 
      $arg_Nombres; 
      $arg_Apellidos; 
      $arg_Fecha; 
      $arg_Telefono; 
      $arg_Celular; 
      $arg_Correo; 
      $arg_Direccion; 
      $arg_Foto; 
      $model_Docentes = $objMDocentes->insert_Docentes_M($arg_Cedula,$arg_Nombres,$arg_Apellidos,$arg_Fecha,$arg_Telefono,$arg_Celular,$arg_Correo,$arg_Direccion,$arg_Foto);
      if ($model_Docentes == 1) {
        return 1;
      }else {
        return 0;
      }
    }
  }
}

 ?>
