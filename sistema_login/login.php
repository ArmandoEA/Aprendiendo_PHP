<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
	<style>
		h1{
			text-align: center;
		}
		table{
			width: 25%;
			background-color: #FFAE00; 
			border: 2px dotted #F00;
			margin: auto;
		}
		.izq{
			text-align: right;
		}
		.der{
			text-align: left;
		}
		td{
			text-align: center;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1>INTRODUCE TUS DATOS</h1>

	<form action="comprueba_login.php" method="post">
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
				<td colspan="2">
					<input type="submit" name="enviar" value="Iniciar sesión">
				</td>
			</tr>
		</table>
</body>
</html>