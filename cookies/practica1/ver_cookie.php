<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if(!$_COOKIE["idioma_seleccionado"]){
			header("Location:index.php");
		}
		else if($_COOKIE["idioma_seleccionado"] == "es"){
			header("Location:spanish.php");
		}else if($_COOKIE["idioma_seleccionado"] == "in"){
			header("Location:english.php");
		}
	?>
</body>
</html>