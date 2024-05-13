 <?php

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Instanciar PHPMailer
$mail = new PHPMailer(true);

try {
    // Habilitar la depuración SMTP
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hipatia.confirmacion@gmail.com'; // Correo electrónico de Gmail
    $mail->Password = 'qsbgfeumfkfzrxyt'; // Contraseña de Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // O ENCRYPTION_SMTPS si prefieres SSL
    $mail->Port = 587; // Puerto TCP para STARTTLS, 465 para SSL

    // Remitente y destinatario
    $mail->setFrom('hipatia.confirmacion@gmail.com', 'No responder');
    $mail->addAddress('albarracinfabri@gmail.com', 'bienvenido');

    // Contenido del mensaje
    $contenido = "<h3>¡Hola mundo!</h3>";
    $mail->isHTML(true);
    $mail->Subject = 'Registro en Hipatya';
    $mail->Body = $contenido;
    $mail->AltBody = 'Texto alternativo si el cliente de correo no admite HTML';

    // Envío del mensaje
    $mail->send();
    echo 'Mensaje enviado a albarracinfabri@gmail.com';
} catch (Exception $e) {
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
}

?>

<!-- // require 'vendor/autoload.php';
// use PHPmailer\PHPmailer\PHPmailer;
// use PHPmailer\PHPmailer\SMTP;
// use PHPmailer\PHPmailer\Exception;
 


// $mail= new PHPmailer(true);
// try{

// $mail -> SMTPDbug= SMTP::DEBUG_SERVER;
// $mail -> isSMTP();
// $mail ->Host= 'smtp.gmail.com';
// $mail -> SMTPAuth=true;

// $mail -> username = 'hipatia.confirmacion@gmail.com';
// $mail->password= 
// $mail->SMTPSecure='ssl';
// $mail->SMTPSecure= PHPMailer :: ENCRYPTION_SMTPS;
// $mail->Port=465;
// $mail ->setFrom('hipatia.confirmacion@gmail.com',"No responder");
// $mail->addAddress('salazarwalter@gmail.com',"bienvenido");
// $contenido="<h3>hola mundo</h3>";
// $mail -> isHTML(true);
// $mail ->Subject='registro en hipatya';
// $mail->Body=$contenido;
// $mail->AltBody="texto alternativo";
// $mail->send();
// echo 'mensaje enviado a salazarwalter@gmail.com';
// }
// catch(Exception $e){
//     echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
// } -->
