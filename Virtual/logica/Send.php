<?php
// Librería PHPMailer
require '../PHPMailer/PHPMailerAutoload.php';

$enviado = false;

// Crear instancia de PHPMailer
$mail = new PHPMailer();
$mail->isSMTP();                          // Usar SMTP
$mail->SMTPAuth = true;                   // Habilitar autenticación
$mail->SMTPSecure = 'tls';                // STARTTLS
$mail->Host = 'mail.gadipmc.gob.ec';      // Servidor SMTP
$mail->Port = 587;                        // Puerto TLS
$mail->Username = 'sisdoc@gadipmc.gob.ec';// Usuario SMTP
$mail->Password = 'PIas19112019.';        // Contraseña SMTP

// Remitente
$mail->From = 'sisdoc@gadipmc.gob.ec';
$mail->FromName = 'GADIP Municipio de Cayambe';

// Contenido del mensaje
$mail->isHTML(true);
$mail->CharSet = 'UTF-8';

// Cargar plantilla HTML y reemplazar mensaje
$shtml = file_get_contents('plantilla.html');
$cuerpo = str_replace('<p id="mensaje"></p>', $_REQUEST["message"], $shtml);

// Destinatario
$mail->addAddress($_REQUEST["email"]);

// Imágenes embebidas (si existen)
$mail->AddEmbeddedImage("../imagenes/logoretina-01.png",'logo');
$mail->AddEmbeddedImage("../imagenes/bg-01.jpg",'fondo');
$mail->AddEmbeddedImage("../imagenes/seguimiento.jpg",'segimiento');
$mail->AddEmbeddedImage("../imagenes/seguro.jpg",'seguro');
$mail->AddEmbeddedImage("../imagenes/comodo.jpg",'comodo');

// Asunto y cuerpo
$mail->Subject = $_REQUEST["subject"];
$mail->Body = $cuerpo;

// Opcional: para depuración si hay error
$mail->SMTPDebug = 0;  // Cambia a 2 para ver detalle de error en pantalla
$mail->Debugoutput = 'html';

// Envío
if ($mail->send()) {
    $enviado = true;
} else {
    error_log("Error al enviar correo: " . $mail->ErrorInfo);
    $enviado = false;
}

// Respuesta JSON
$json_data["ind"] = $enviado;
echo json_encode($json_data);
?>
