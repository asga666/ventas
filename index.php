<html>
	<head>
		<title>Happy Coppy</title>
		<script src="alerts/sweetalert.js"></script>
		<link rel="stylesheet" type="text/css" href="./estilo/global.css">
		<link rel="icon" type="image/png" href="./misc/icon.ico">
		<link rel='stylesheet' href='./misc/font/typicons.min.css'/>
		<link rel='stylesheet' href='estilo/xxx.css'>
		<meta charset="UTF-8">
		<meta lang="ES">
	</head>

	<body>

		<div id="contenedor">
			<div class="contenido" style="margin-top: -80px;">

				<div class="header-cajita" style="margin: 0 auto; width: 30%;">
					<center><img style="width: 200px; height: auto;" src="./misc/logo.png"></center>
				</div>

				<form id="sesion_id" action="" enctype="application/x-www-form-urlencoded">
				<div class="cajita" style="border: solid 10px #ddd;">
					<p>Nombre de usuario</p>
					<input type="text" name="usuario" id="usuario" placeholder="Usuario... " required autofocus>
					<p>Contraseña</p>
					<input type="password" name="contraseña" id="contraseña" placeholder="Contraseña..." required>
						<div class="botones">
							<input class="iniciar" id="boton_id" type="submit" value="Iniciar">
						</div>
						<p class="olvide"><a href="correo-veri.php">Olvidé mi contraseña...</a></p>
				</div>
				</form>

			</div>
		</div>
	<script src="JS/jquery-3.3.1.min.js"></script>
	<script src="JS/sesion_jquery.js"></script>
	</body>
</html>
