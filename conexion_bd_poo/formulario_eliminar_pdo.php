<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Documento sin título</title>
  <style>
    h1{
    	text-align:center;
    	color:#00F;
    	border-bottom:dotted #0000FF;
    	width:50%;
    	margin:auto;
    }

    table{
    	border:1px solid #F00;
    	padding:20px 50px;
    	margin-top:50px;
    }

    body{
    	background-color:#1CF187;
    }
  </style>
</head>

<body>
<h1>Eliminar Alumnos</h1>
<form name="form1" method="post" action="pagina_eliminar_pdo.php">
  <table border="0" align="center">
    <tr>
      <td>Código:</td>
      <td>
        <label for="codigo"></label>
        <input type="text" name="codigo" id="codigo">
      </td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="eliminar" id="eliminar" value="Eliminar"></td>
    </tr>
  </table>
</form>
</body>
</html>