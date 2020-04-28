<?php
/**
 *
 */
class NavBar
{

  function __construct()
  {
    // code...
  }

  public function get_NavBarPublic(){
    $navbar='
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="../pages/mision.php">Mision</a></li>
      <li><a href="../pages/vision.php">Vision</a></li>
      <li><a href="../pages/ideario.php">Ideario</a></li>
      <li><a href="../pages/autoridades.php">Autoridades</a></li>
      <li><a href="../pages/nuestro_patrono.php">Nuestro Patrono</a></li>
    </ul>

    <ul id="dropdown2" class="dropdown-content">
      <li><a href="#!">Rendicion de Cuentas</a></li>
    </ul>

    <ul id="dropdown3" class="dropdown-content">
      <li><a href="../pages/dosificaciontareas.php">Horarios Dosificacion de Tareas</a></li>
      <li><a href="../pages/rubricas.php">Rubricas</a></li>
    </ul>

    <ul id="dropdown4" class="dropdown-content">
      <li><a href="../pages/distributivodocente.php">Distributivo Docente</a></li>
      <li><a href="#!">Atencion a Padres</a></li>
      <li><a href="../pages/cronogramaanual.php">Cronograma Anual</a></li>
      <li><a href="#!">Cronograma Mensual</a></li>
    </ul>

    <ul id="dropdown5" class="dropdown-content">
      <li><a href="../pages/contactenos.php">Contactenos</a></li>
      <li><a href="../pages/correoinstitucional.php">Correo Institucional</a></li>
    </ul>
    <div class="navbar-fixed">
      <nav>

        <div class="nav-wrapper">
          <a href="#!" class="brand-logo"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="/index.php"><i class="material-icons left">home</i>Inicio</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons left">people</i>Nosotros<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown2"><i class="material-icons left">account_balance</i>Transparencia<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown3"><i class="material-icons left">date_range</i>Horarios<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown4"><i class="material-icons left">school</i>Informacion Institucional<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown5"><i class="material-icons left">contacts</i>Contactenos<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="/sga/"><i class="material-icons left">home</i>Iniciar Sesión</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <ul id="dropdown1a" class="dropdown-content">
      <li><a href="../pages/mision.php">Mision</a></li>
      <li><a href="../pages/vision.php">Vision</a></li>
      <li><a href="../pages/ideario.php">Ideario</a></li>
      <li><a href="../pages/autoridades.php">Autoridades</a></li>
      <li><a href="../pages/nuestro_patrono.php">Nuestro Patrono</a></li>
    </ul>

    <ul id="dropdown2a" class="dropdown-content">
      <li><a href="#!">Rendicion de Cuentas</a></li>
    </ul>

    <ul id="dropdown3a" class="dropdown-content">
      <li><a href="./dosificaciontareas.php">Horarios Dosificacion de Tareas</a></li>
      <li><a href="./rubricas.php">Rubricas</a></li>
    </ul>

    <ul id="dropdown4a" class="dropdown-content">
      <li><a href="../pages/distributivodocente.php">Distributivo Docente</a></li>
      <li><a href="#!">Atencion a Padres</a></li>
      <li><a href="../cronogramaanual.php">Cronograma Anual</a></li>
      <li><a href="#!">Cronograma Mensual</a></li>
    </ul>

    <ul id="dropdown5a" class="dropdown-content">
      <li><a href="../pages/contactenos.php">Contactenos</a></li>
      <li><a href="#!">Correo Institucional</a></li>
    </ul>

    <ul class="sidenav" id="mobile-demo">
      <li><a href="/index.php"><i class="material-icons left">home</i>Inicio</a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1a"><i class="material-icons left">people</i>Nosotros<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown2a"><i class="material-icons left">account_balance</i>Transparencia<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown3a"><i class="material-icons left">date_range</i>Horarios<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown4a"><i class="material-icons left">school</i>Info. Institucional<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown5a"><i class="material-icons left">contacts</i>Contactenos<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="/sga/"><i class="material-icons left">home</i>Iniciar Sesión</a></li>
    </ul>

    ';
    return $navbar;
  }

  public function get_NavBarIndex(){
    $navbar='
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="./pages/mision.php">Mision</a></li>
      <li><a href="./pages/vision.php">Vision</a></li>
      <li><a href="./pages/ideario.php">Ideario</a></li>
      <li><a href="./pages/autoridades.php">Autoridades</a></li>
      <li><a href="./pages/nuestro_patrono.php">Nuestro Patrono</a></li>
    </ul>

    <ul id="dropdown2" class="dropdown-content">
      <li><a href="#!">Rendicion de Cuentas</a></li>
    </ul>

    <ul id="dropdown3" class="dropdown-content">
      <li><a href="./pages/dosificaciontareas.php">Horarios Dosificacion de Tareas</a></li>
      <li><a href="./pages/rubricas.php">Rubricas</a></li>
    </ul>

    <ul id="dropdown4" class="dropdown-content">
      <li><a href="./pages/distributivodocente.php">Distributivo Docente</a></li>
      <li><a href="#!">Atencion a Padres</a></li>
      <li><a href=".pages/cronogramaanual.php">Cronograma Anual</a></li>
      <li><a href="#!">Cronograma Mensual</a></li>
    </ul>

    <ul id="dropdown5" class="dropdown-content">
      <li><a href="#!">Contactenos</a></li>
      <li><a href="#!">Correo Institucional</a></li>
    </ul>
    <div class="navbar-fixed">
      <nav>

        <div class="nav-wrapper">
          <a href="#!" class="brand-logo"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="/index.php"><i class="material-icons left">home</i>Inicio</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons left">people</i>Nosotros<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown2"><i class="material-icons left">account_balance</i>Transparencia<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown3"><i class="material-icons left">date_range</i>Horarios<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown4"><i class="material-icons left">school</i>Informacion Institucional<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown5"><i class="material-icons left">contacts</i>Contactenos<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="/sga/"><i class="material-icons left">home</i>Iniciar Sesión</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <ul id="dropdown1a" class="dropdown-content">
      <li><a href="./pages/mision.php">Mision</a></li>
      <li><a href="./pages/vision.php">Vision</a></li>
      <li><a href="./pages/ideario.php">Ideario</a></li>
      <li><a href="./pages/autoridades.php">Autoridades</a></li>
      <li><a href="./pages/nuestro_patrono.php">Nuestro Patrono</a></li>
    </ul>

    <ul id="dropdown2a" class="dropdown-content">
      <li><a href="#!">Rendicion de Cuentas</a></li>
    </ul>

    <ul id="dropdown3a" class="dropdown-content">
      <li><a href="#!">Horarios Dosificacion de Tareas</a></li>
      <li><a href="#!">Rubricas</a></li>
    </ul>

    <ul id="dropdown4a" class="dropdown-content">
      <li><a href="#!">Distributivo Docente</a></li>
      <li><a href="#!">Atencion a Padres</a></li>
      <li><a href="#!">Cronograma Anual</a></li>
      <li><a href="#!">Cronograma Mensual</a></li>
    </ul>

    <ul id="dropdown5a" class="dropdown-content">
      <li><a href="#!">Contactenos</a></li>
      <li><a href="#!">Correo Institucional</a></li>
    </ul>

    <ul class="sidenav" id="mobile-demo">
      <li><a href="/index.php"><i class="material-icons left">home</i>Inicio</a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1a"><i class="material-icons left">people</i>Nosotros<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown2a"><i class="material-icons left">account_balance</i>Transparencia<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown3a"><i class="material-icons left">date_range</i>Horarios<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown4a"><i class="material-icons left">school</i>Info. Institucional<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown5a"><i class="material-icons left">contacts</i>Contactenos<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="/sga/"><i class="material-icons left">home</i>Iniciar Sesión</a></li>
    </ul>

    ';
    return $navbar;
  }

  public function get_HeaderPage(){
    $header = '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>UE Apostol Santiago</title>
    <link rel="icon" type="image/png" href="./images/icon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../css/footer.css" type="text/css" rel="stylesheet" media="screen,projection" />
    ';
    return $header;
  }

  public function get_Footer(){
    $footer = '
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Direccion</h5>
            <a href="#" class="grey-text text-lighten-4"> <i class="material-icons">directions</i> &nbsp;La chala callejon primero y la 11ava, Guayaquil, Guayas, 5934</a>
            </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unidad Educativa Particular Apostol Santiago &reg; 2019
        </div>
      </div>
    </footer>
';
return $footer;
  }
}

 ?>
