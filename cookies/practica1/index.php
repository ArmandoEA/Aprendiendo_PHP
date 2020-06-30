<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<?php 
		if(isset($_COOKIE["idioma_seleccionado"])){
			if($_COOKIE["idioma_seleccionado"] == "es"){
				header("Location:spanish.php");
			}else if($_COOKIE["idioma_seleccionado"] == "in"){
				header("Location:english.php");
			}
		}
	?>
    <table width="25%" border="0" align="center">
        <tr>
            <td colspan="2" align="center"><h1>Elegir idioma</h1></td>
        </tr>
        <tr>
        	<td align="center"><a href="creaCookie.php?idioma=es">Español</a></td>
        	<td align="center"><a href="creaCookie.php?idioma=in">Inglés</a></td>
        </tr>
    </table>
</body>
</html>