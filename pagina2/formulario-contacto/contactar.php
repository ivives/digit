<?php
//Es necesario recuperar todos los datos que enviaste a traves del formulario.
$nombre = trim(strip_tags($_POST['nombre'])); //Recupera el nombre
$apellido = trim(strip_tags($_POST['apellido'])); //Recupera el apellido
$correoe = trim(strip_tags($_POST['correode'])); //Recupera el correo electrónico
$mensaje = nl2br(trim(strip_tags($_POST['mensaje']))); //Recupera el mensaje
//La función "nl2br" sirve para que el texto respete los saltos de línea y los espacios, si lo quitas todo el emnsaje s eenvia en una sola línea.

//Enviar email

$to      = 'ivivesdam@gmail.com'; //Correo donde recibes el mensaje.
$subject = 'Formulario de Contacto'; //El asunto del correo
// Mensaje que se envía a tu correo
$message = '
		<html>
		<body>
		  <p>Una persona te ha querido contactar utilizando el formulario de tu pagina web. Estos son los datos:</p>
		  <p>Nombre: ' .$nombre. '</p>
		  <p>Apellido: ' .$apellido. '</p>
		  <p>Correo Electrónico: ' .$correode. '</p>
		  <p>Mensaje:<br> ' .$mensaje. '</p>
		</body>
		</html>
		';
$headers = "From:" . $from . "\r\n";
$headers .="Reply-To: " .$from . "\r\n";
$headers .='X-Mailer: PHP/' . phpversion() . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($to, $subject, $message, $headers);
?>