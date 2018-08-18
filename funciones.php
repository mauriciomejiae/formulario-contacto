<?php 

// Conexión
function Conexion(){
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=formulario_contacto;charset=UTF8', 'root', '');
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}

// Enviar datos
function EnviarDatos($conexion, $nombre, $apellido, $email, $asunto, $mensaje){
	$statement = $conexion->prepare('INSERT INTO mensajes (nombre, apellido, correo, asunto, mensaje) VALUES(:nombre, :apellido, :correo, :asunto, :mensaje)');
	$statement->execute( array(
		':nombre' => $nombre,
		':apellido' => $apellido, 
		':correo' => $email,
		':asunto' => $asunto,
		':mensaje' => $mensaje
	));
}

?>