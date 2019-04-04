<?php
/*
	Pequeño, muy pequeño sistema de ventas en PHP con MySQL

	@author parzibyte

	No olvides visitar parzibyte.me/blog para más cosas como esta
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Happy Coppy</title>
	<link rel="icon" type="image/png" href="./misc/icon.ico">
	<link rel="stylesheet" href="./css/fontawesome-all.min.css">
	<link rel="stylesheet" href="./css/2.css">
	<link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">HAPPY COPPY</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="./listar.php">Artículos</a></li>
					<li><a href="./vender.php">Venta</a></li>
					<li><a href="./ventas.php">Registro de ventas</a></li>
					<li><a href="./index.php">Cerrar Sesión</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">