<?php
session_start();
require_once '../../global/ClassGlobalConexion.php';
require_once '../../model/mDocentes.php';
require_once '../../controller/cDocentes.php';
if (isset($_POST['action'])) {
  $cedula = $_POST['cedula'];
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $fecha = $_POST['fecha_nacimiento'];
  $telefono = $_POST['telefono'];
  $celular = $_POST['celular'];
  $correo = $_POST['correo'];
  $direccion = $_POST['direccion'];
  $arg_Foto = "foto";
  $objCDocentes = new CDocentes();
  $formatos = array('image/jpg','image/pjpeg','image/bmp','image/jpeg','image/gif','image/png');
    if (in_array($_FILES["foto"]["type"], $formatos)) {
        $arg_Foto = "img_".$cedula.".".str_replace("image/", "", $_FILES['foto']["type"]);
        $x_ruta = "/var/www/html/images/estudiantes/".$arg_Foto;
        $estado  =   move_uploaded_file($_FILES['foto']['tmp_name'], $x_ruta);
      }
  $controller_Docentes = $objCDocentes->insert_Docentes_C($cedula,$nombres,$apellidos,$fecha,$telefono,$celular,$correo,$direccion,$arg_Foto);
}
 ?>
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <title>REGISTRO DE ALUMNOS</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
                <link type="text/css" rel="stylesheet" href="../../css/administrador_index.css">
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                <script src="../../js/inputs.js"></script>
              </head>

    <body>
      <header>
        <div class="navbar-fixed">
          <span>UNIDAD EDUCATIVA PARTICULAR APOSTOL SANTIAGO</span>
        </div>
      </header>
      <main>

        <center>
          <div class="mensaje">
            <?php
            if (isset($controller_Docentes)) {
              if ($controller_Docentes == 1) {
               echo ' <div class="exito">
               SE REGISTRO CON EXITO AL DOCENTE
                </div>';
             }else {
               echo '
                <div class="error">
                SE PRODUJO UN ERROR AL REGISTRAR LOS DATOS, PORFAVOR INTENTA NUEVAMENTE
                      </div>';
             }
            }
              ?>
          </div>

        </center>
          <center>
          <div class="contenido">
          <div class="row">
            <form class="col s12" action="./registro_docentes.php" method="POST" enctype="multipart/form-data">
       <div id="secciones" class="row card-panel">
         <div class="row titulo">
           <span class="">DATOS DEL DOCENTE</span>
         </div>
         <div class="input-field col s6">
             <input onkeypress="return soloNumeros(event);"  id="cedula" type="text" name="cedula" class="validate" required>
           <label for="cedula">CEDULA * </label>
         </div>
           <div class="file-field input-field col s6">
             <div class="btn">
               <span>FOTO</span>
               <input type="file" name="foto" id="foto">
             </div>
             <div class="file-path-wrapper">
               <input class="file-path validate" type="text">
             </div>
           </div>
         <div class="input-field col s6">
           <input onkeypress="return soloLetras(event);"   id="nombres" type="text" name="nombres" class="validate" required>
           <label for="nombres">NOMBRES * </label>
         </div>
         <div class="input-field col s6">
           <input onkeypress="return soloLetras(event);" id="apellidos" name="apellidos" type="text" class="validate" required>
           <label for="apellidos">APELLIDOS *</label>
         </div>
         <div class="input-field col s12">
           <input id="fecha_nacimiento" name="fecha_nacimiento" type="text" class="validate datepicker" required>
           <label for="fecha_nacimiento">FECHA DE NACIMIENTO *</label>
         </div>
         <div class="input-field col s6">
           <input onkeypress="return soloNumeros(event);" id="telefono" name="telefono" type="text" class="validate" required>
           <label for="telefono">TELEFONO *</label>
         </div>
         <div class="input-field col s6">
           <input onkeypress="return soloNumeros(event);" id="celular" name="celular" type="text" class="validate" required>
           <label for="celular">CELULAR *</label>
         </div>
         <div class="input-field col s12">
           <input onkeypress="return soloMail(event);" id="direccion" name="direccion" type="text" class="validate" required>
           <label for="direccion">DIRECCION *</label>
         </div>
         <div class="input-field col s12">
             <input onkeypress="return soloMail(event);" id="correo" name="correo" type="text" class="validate" required>
           <label for="correo">CORREO *</label>
         </div>
         <div class="input-field col s12">
         <button id="submit" class="btn waves-effect waves-light" type="submit" name="action">GUARDAR REGISTRO</button>
         </div>
       </div>
     </form>
   </div>
            </div>
          </center>
          <div class="fixed-action-btn">
            <a class="btn-floating btn-large red">
              <i class="large material-icons">apps</i>
            </a>
            <ul>
              <li><a class="btn-floating red" href="./"><i class="material-icons">home</i></a></li>
              <li><a class="btn-floating yellow darken-1" href="./"><i class="material-icons">fast_rewind</i></a></li>
          </div>
      </main>
      <footer>
      </footer>

      <style media="screen">

        .titulo{
          border-radius: 0;
          width: 100%;
          background-color: #FFF;
          height: 40px;
          display: flex;
          justify-content: center;
          align-items: center;
          margin-top: 0%;
        }
        .titulo span{
          font-size: 2rem;
          color: #DF3A01;
        }
        .row{
          width: 100%;
        }
        #secciones{
          display: inline-block;
          width: 46%;
          margin-left: 1%;
        }

        .mensaje{
          width: 40%;
          margin-top: 3%;
        }

        .card-panel{
          width: 100%;
        }

      </style>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script type="text/javascript" src="../../js/init.js"></script>
    </body>
  </html>
