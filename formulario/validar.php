<?php
require_once('recaptchalib.php');

function enviarCorreo()
{
	$nombre = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$mensaje = $_POST['mensaje'];

	// Definir el correo de destino:
	$dest = "thelostdemonz@gmail.com"; 
	 
	// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
	$headers = "From: $nombre <$email>\r\n";  
	$headers .= "X-Mailer: PHP5\n";
	$headers .= 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 
	// Aqui definimos el asunto y armamos el cuerpo del mensaje
	$asunto = $subject;
	$cuerpo = "Nombre: ".$nombre."<br>";
	$cuerpo .= "Email: ".$email."<br>";
	$cuerpo .= "Mensaje: ".$mensaje;
	 
	// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
	if($nombre != '' && $email != '' && $telefono != '' && $mensaje != ''){
	    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
	}
}

$privkey = "6LdmnPwSAAAAAPhIOZxDV96o2o7-VVuKFeFWShlx"; 
$verify = recaptcha_check_answer($privkey, $_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field']);

if ($verify->is_valid) {  
  echo "Correcto!";
  enviarCorreo();
}
else {  
  echo "Upps parece que el codigo de verificacion no es correcto.";
  echo '<a href="index.php">Clic aqui para regresar</a>';
}

?>