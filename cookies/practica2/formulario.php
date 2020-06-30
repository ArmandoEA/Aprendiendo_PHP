<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>INTRODUCE TUS DATOS</h1>

	<form action="login.php" method="post">
		<table>	<!--Abro una tabla-->
			<tr>	<!--Abro una fila-->
				<td class="izq">	<!--Abro una columna-->
					Login: 
				</td>
				<td class="der">	<!--Abro otra columna-->
					<input type="text" name="login">	<!--Creo un cuadro de texto-->
				</td>
			</tr>
			<tr>
				<td class="izq">
					Password:
				</td>
				<td class="der">
					<input type="password" name="password">	<!--Creo un cuadro de texto tipo contraseña-->
				</td>
			</tr>
			<tr>
				<td class="izq">
					Recordarme
				</td>
				<td class="der">
					<input type="checkbox" name="recordar" id="recordar">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="enviar" value="Iniciar sesión">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>