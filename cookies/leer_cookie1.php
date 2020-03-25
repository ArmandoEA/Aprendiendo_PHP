<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if(isset($_COOKIE['prueba'])){
			echo $_COOKIE['prueba'];
		}else{
			echo "No se encontró la cookie";
		}
	?>
</body>
</html>