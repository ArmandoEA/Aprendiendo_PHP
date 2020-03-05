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
    	background-color:#FFC;
    }
  </style>
</head>

<body>
<h1>Registro de Artículos</h1>
<form name="form1" method="get" action="pagina_insertar_registro.php">
  <table border="0" align="center">
    <tr>
      <td>Código:</td>
      <td>
        <label for="codigo"></label>
        <input type="text" name="codigo" id="codigo">
      </td>
    </tr>
    <tr>
      <td>Nombre:</td>
      <td>
        <label for="nombre"></label>
        <input type="text" name="nombre" id="nombre">
      </td>
    </tr>
    <tr>
      <td>Carrera:</td>
      <td>
        <label for="carrera"></label>
        <input type="text" name="carrera" id="carrera">
      </td>
    </tr>
    <tr>
      <td>Semestre:</td>
      <td>
        <label for="semestre"></label>
        <input type="text" name="semestre" id="semestre">
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>