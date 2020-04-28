<?php
require_once '../model/ClassModelMail.php';

$apellidos = $_POST['apellidos'];
$nombres = $_POST['nombres'];
$asunto = $_POST['asunto'];
$mesaje = $_POST['mail'];
$correo = new Mail();
$send = $correo->send_Mail($apellidos,$nombres,$asunto,$mesaje);
echo $send;
