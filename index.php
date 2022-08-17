<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrar persona</title>
</head>
<body>
	<h1>Pruebas de GitHub</h1>
	<form method="post" action="nuevaPersona.php">
		<label for="nombre">Escriba Su Nombre:</label>
		<br>
		<input name="nombre" required type="text" id="nombre" placeholder="Escribe tu nombre...">
		<br><br>
		<label for="apellidos">Escrbia su apellido:</label>
		<br>
		<input name="apellidos" required type="text" id="apellidos" placeholder="Escribe tus apellidos...">
		<br><br>
		<label for="sexo">Género</label>
		<select name="sexo" required name="sexo" id="sexo">
			<option value="">--Selecciona--</option>
			<option value="M">Masculino MS</option>
			<option value="F">Femenino FM</option>
		</select>
		<br><br><input type="submit" value="Registrar">
	</form>
</body>
</html>