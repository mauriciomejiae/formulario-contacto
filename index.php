<?php 

require 'funciones.php';

$conexion = Conexion();
if (!$conexion) {
	header('Location: error.php');
}

$errores = '';
$success = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	if (empty($nombre) OR empty($apellido) OR empty($asunto) OR empty($mensaje)) {
		$errores .= '<li>Ingrese todos los datos</li>';
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errores .= '<li>El correo electronico, no es valido</li>';
	}

	if (!$errores) {
		EnviarDatos($conexion, $nombre, $apellido, $email, $asunto, $mensaje);
		$success .= 'Mensaje enviado, te responderemos a tu correo electronico';
	}

}

require 'views/index.view.php';

?>