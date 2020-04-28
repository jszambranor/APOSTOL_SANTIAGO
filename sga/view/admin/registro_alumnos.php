<?php
session_start();
require_once '../../global/ClassGlobalConexion.php';
require_once '../../model/mAlumnos.php';
require_once '../../controller/cAlumnos.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $cedula = $_POST['cedula'];
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $fecha = $_POST['fecha_nacimiento'];
            $telefono = $_POST['telefono'];
            $celular = $_POST['celular'];
            $correo = $_POST['correo'];
            $direccion = $_POST['direccion'];
            $arg_Foto = "foto";
            $curso = $_POST['curso'];
            $paralelo = $_POST['paralelo'];
            $jornada = $_POST['jornada'];
            $enfermedades = $_POST['enfermedad'];
            $alergias = $_POST['alergias'];
            $cedula_r = $_POST['cedula_r'];
            $nombres_r = $_POST['nombres_r'];
            $apellidos_r = $_POST['apellidos_r'];
            $fecha_r = $_POST['fecha_nacimiento_r'];
            $telefono_r = $_POST['telefono_r'];
            $celular_r = $_POST['celular_r'];
            $correo_r = $_POST['correo_r'];
            $direccion_r = $_POST['direccion_r'];
            $arg_Foto_r = "foto";

    $formatos = array('image/jpg','image/pjpeg','image/bmp','image/jpeg','image/gif','image/png');
      if (in_array($_FILES["foto"]["type"], $formatos)) {
          $arg_Foto = "img_".$cedula.".".str_replace("image/", "", $_FILES['foto']["type"]);
          $x_ruta = "/var/www/html/images/estudiantes/".$arg_Foto;
          $estado  =   move_uploaded_file($_FILES['foto']['tmp_name'], $x_ruta);
        }

        if (in_array($_FILES["foto_r"]["type"], $formatos)) {
            $arg_Foto_r = "img_".$cedula_r.".".str_replace("image/", "", $_FILES['foto_r']["type"]);
            $x_ruta = "../../images/representante/".$arg_Foto_r;
            $estado  =   move_uploaded_file($_FILES['foto_r']['tmp_name'], $x_ruta);
          }

          $objCAlumnos = new CAlumnos();
          $cAlumnos = $objCAlumnos->set_CAlumnos($cedula,$nombres,$apellidos,$fecha,$telefono,$celular,$correo,$direccion,
          $arg_Foto,$curso,$paralelo,$jornada,$enfermedades,$alergias,$cedula_r,$nombres_r,$apellidos_r,$fecha_r,$telefono_r,
          $celular_r,$correo_r,$direccion_r,$arg_Foto_r);
}
 ?>
 <!DOCTYPE html>
 <html lang="es-ES" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>REGISTRO DE ALUMNOS</title>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link type="text/css" rel="stylesheet" href="../../css/administrador_index.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
         <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          /* echo $cAlumnos[0];echo "<br>";
           echo $cAlumnos[1];echo "<br>";
           echo $cAlumnos[2];echo "<br>";
           echo $cAlumnos[3];echo "<br>";
           echo $cAlumnos[4];echo "<br>";*/
           if ($cAlumnos == 1) {
             echo ' <div class="exito">
             SE REGISTRO CON EXITO AL ALUMNO
              </div>';
           }else{
             echo '
              <div class="error">
              SE PRODUJO UN ERROR AL REGISTRAR LOS DATOS, INTENTA NUEVAMENTE PORFAVOR
                    </div>';
           }
         } ?>
       </div>
     </center>
       <center>
         <div class="contenido">
         <div class="row">
           <form class="col s12" action="./registro_alumnos.php" method="POST" enctype="multipart/form-data">
      <div id="secciones" class="row card-panel">
        <div class="row titulo">
          <span class="">DATOS DEL ESTUDIANTE</span>
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
          <input onkeypress="return soloLetras(event);"  id="nombres" type="text" name="nombres" class="validate" required>
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
        <div class="input-field col s4">
          <select name="curso">
            <option value="" disabled selected></option>
            <option value="1N">INICIAL 1</option>
            <option value="2N">INICIAL 2</option>
            <option value="1RO">PRIMERO</option>
            <option value="2DO">SEGUNDO</option>
            <option value="3RO">TERCERO</option>
            <option value="4TO">CUARTO</option>
            <option value="5TO">QUINTO</option>
            <option value="6TO">SEXTO</option>
            <option value="7MO">SÉPTIMO</option>
            <option value="8VO">OCTAVO</option>
            <option value="9NO">NOVENO</option>
            <option value="10MO">DÉCIMO</option>
          </select>
          <label>CURSO</label>
        </div>
        <div class="input-field col s4">
          <select name="paralelo">
            <option value="" disabled selected></option>
            <option value="A">PARALELO A</option>
            <option value="B">PARALELO B</option>
            <option value="C">PARALELO C</option>
            <option value="D">PARALELO D</option>
          </select>
          <label>PARALELO</label>
        </div>
        <div class="input-field col s4">
          <select name="jornada">
            <option value="" disabled selected></option>
            <option value="JM">MATUTINA</option>
            <option value="JV">VESPERTINA</option>
          </select>
          <label>JORNADA</label>
        </div>
        <div class="input-field col s12">
          <textarea onkeypress="return soloMail(event);" id="enfermedad" name="enfermedad" class="materialize-textarea"></textarea>
          <label for="enfermedad">ENFERMEDADES</label>
        </div>
        <div class="input-field col s12">
          <textarea onkeypress="return soloMail(event);" id="alergias" name="alergias" class="materialize-textarea"></textarea>
          <label for="alergias">ALERGIAS </label>
        </div>
      </div>

      <div id="secciones" class="row card-panel">
        <div class="row titulo">
          <span class="">DATOS DEL REPRESENTANTE</span>
        </div>
        <div class="input-field col s6">
          <input onkeypress="return soloNumeros(event);" id="cedula_r" type="text" name="cedula_r" class="validate" required>
          <label for="cedula_r">CEDULA * </label>
        </div>
          <div class="file-field input-field col s6">
            <div class="btn">
              <span>FOTO</span>
              <input type="file" name="foto_r" id="foto_r">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        <div class="input-field col s6">
          <input onkeypress="return soloLetras(event);" id="nombres_r" type="text" name="nombres_r" class="validate" required>
          <label for="nombres_r">NOMBRES * </label>
        </div>
        <div class="input-field col s6">
          <input onkeypress="return soloLetras(event);" id="apellidos_r" name="apellidos_r" type="text" class="validate" required>
          <label for="apellidos_r">APELLIDOS *</label>
        </div>
        <div class="input-field col s12">
          <input id="fecha_nacimiento_r" name="fecha_nacimiento_r" type="text" class="validate datepicker" required>
          <label for="fecha_nacimiento_r">FECHA DE NACIMIENTO *</label>
        </div>
        <div class="input-field col s6">
          <input onkeypress="return soloNumeros(event);" id="telefono_r" name="telefono_r" type="text" class="validate" required>
          <label for="telefono_r">TELEFONO *</label>
        </div>
        <div class="input-field col s6">
          <input onkeypress="return soloNumeros(event);" id="celular_r" name="celular_r" type="text" class="validate" required>
          <label for="celular_r">CELULAR *</label>
        </div>
        <div class="input-field col s12">
          <input onkeypress="return soloMail(event);" id="direccion_r" name="direccion_r" type="text" class="validate" required>
          <label for="direccion_r">DIRECCION *</label>
        </div>
        <div class="input-field col s12">
          <input onkeypress="return soloMail(event);" id="correo_r" name="correo_r" type="text" class="validate" required>
          <label for="correo_r">CORREO *</label>
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
     <style media="screen">

       .row{
         display: inline-block;
       }

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

     </style>
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script type="text/javascript" src="../../js/init.js">

     </script>
   </body>
 </html>
