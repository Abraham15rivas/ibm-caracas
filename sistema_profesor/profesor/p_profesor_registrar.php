<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Registro de Profesor</font>
<br/>
<br/>
<form action="z_registrar_a.php" method="post"> 
<table width="100%" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="30%"><font id="sub_titulo">Datos Basicos</font></td>
    <td width="30%"></td>
    <td width="40%"></td>
  </tr>
  <tr>
    <td>Cedula:</td>
    <td><input name="cedula" id="cedula" type="text" value="" size="10" maxlength="10" placeholder="Cedula"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> Nombres:</td>
    <td><input name="nombre_1" id="nombre_1" type="text" size="20" maxlength="40" placeholder="Primer Nombre"></td>
    <td><input name="nombre_2" id="nombre_2" type="text" size="20" maxlength="40" placeholder="Segundo Nombre"></td>
  </tr>
    <tr>
    <td> Apellidos:</td>
    <td><input name="apellido_1" id="apellido_1" type="text" size="20" maxlength="40" placeholder="Primer Apellido"></td>
    <td><input name="apellido_2" id="apellido_2" type="text" size="20" maxlength="40" placeholder="Segundo Apellido"></td>
  </tr>
   <tr>
    <td valign="top">Notas:</td>
    <td colspan="2"><textarea name="notas"  id="notas" cols="52" rows="2"></textarea></td>
  </tr>
  <tr>
    <td></td>
    <td>
    <br>
    <input type="submit" value="Registrar" />
      <input type="reset" value="Borrar" />
      <input type="hidden" name="id" value="3" /></td>
    <td>&nbsp;</td>
  </tr>
  </table>
</form>

</body>
</html>
