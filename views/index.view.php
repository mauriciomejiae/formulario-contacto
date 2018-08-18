<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Formulario de contacto</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700,800" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<div class="container">
		<div class="contacto-container">
			<div class="titulo-contacto">
				<h2>Formulario de contacto</h2>
				<p>En PHP y MySQL</p>
			</div>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				
				<input type="text" name="nombre" placeholder="Nombre" class="form-control">
				<input type="text" name="apellido" placeholder="Apellido" class="form-control">
				<input type="text" name="email" placeholder="Correo electronico" class="form-control">
				<input type="text" name="asunto" placeholder="Asunto" class="form-control">
				<label for="mensaje">Su mensaje</label>
				<textarea name="mensaje" id="mensaje" class="form-control"></textarea>
				<!-- Aqui van los errores -->
				<?php if(!empty($errores)): ?>
					<div class="alert error">
						<?php echo $errores; ?>
					</div>
				<?php endif; ?>
				<?php if (!$errores AND !empty($success)): ?>
					<div class="alert success">
						<?php echo $success; ?>
					</div>
				<?php endif ?>
				<button type="submit" class="button-send">Contactar</button>
			</form>
		</div>
	</div>

</body>
</html>