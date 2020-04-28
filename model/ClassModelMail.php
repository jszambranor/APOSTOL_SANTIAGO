<?php
/**
 *
 */
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 require '../vendor/autoload.php';
class Mail
{
    public function __construct()
    {
    }

    public function send_Mail($arg_Apellidos, $arg_Nombres, $arg_Asunto, $arg_Mail)
    {

      $mail = new PHPMailer(true);

        try {
            //Server settings
        $mail->SMTPDebug = 0 ;                                       // Enable verbose debug output
        $mail->isSMTP();

            $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );                                          // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'cuentagglpp@gmail.com';                     // SMTP username
        $mail->Password   = '@593JSRO';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
            $mail->setFrom('cuentagglpp@gmail.com', 'Mailer');
            $mail->addAddress('josuezambranoreyes3h@gmail.com');     // Add a recipient


            // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'FORMULARIO DE CONTACTO';
            $mail->Body    = 'APELLIDO: '.$arg_Apellidos."<br>".'NOMBRES: '.$arg_Nombres."<br>"."ASUSNTO: ".$arg_Asunto."<br>".
        "MENSAJE: ".$arg_Mail;

            $mail->send();
            return 'Message has been sent';
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
