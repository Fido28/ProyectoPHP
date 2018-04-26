<?php
 
	session_start();
	if($_SESSION["logueado"] == TRUE) {
		?>
 
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Panel de administracion</title>
		</head>
		<body>
			<h1>Página de administrador</h1>
			<a href="nuevo_articulo.php">Nuevo artículo</a><br>
			<a href="salir.php">Salir</a>
		</body>
		</html>
 
 
		<?php
	} else {
		header("Location: index.php");
	}
 
 ?>