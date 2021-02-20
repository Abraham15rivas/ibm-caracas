<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Crear Anuncio</font>
<br/>
<br/>
<form id="form1" name="form1" method="post" action="">
<table width="100%"  border="0" align="left" cellpadding="3" cellspacing="0">
	<tr>
    	<td colspan="3"><font id="sub_titulo">Anuncio:</font></td>
    </tr>
   <tr align="left">   
   <td width="200" align="left">Actividad:</td>
      <td colspan="2"  align="left">
      <label for="titulo"></label><input name="actividad"   type="text" size="20" maxlength="50" placeholder="Actividad" /></td>
      </tr> 
   <tr  align="left">
      <td valign="top">Descripción de La Actividad:</td>
      <td colspan="2"><textarea name="descripcion"  id="descripcion" cols="50" rows="5"></textarea></td>
      </tr>
      <tr>
    	<td valign="top">Fecha de Inicio:</td>
        <td colspan="2"><input type="datetime-local" name="fecha_inicio"/></td>
      </tr>
      <tr>
    	<td valign="top">Fecha de Culminacion:</td>
        <td colspan="2"><input type="datetime-local" name="fecha_culminacion" /></td>
      </tr>
        <td width="200" align="left">Lugar:</td>
      <td colspan="2"  align="left">
      <label for="titulo"></label><input name="lugar"   type="text" size="20" maxlength="100" placeholder="Lugar" /></td>
      </tr>        
    <tr align="left">
      <td>Persona Contacto:</td>
      <td>
      	<label for="nombre_1"></label><input name="nombre_1" type="text" id="nombre_1" size="20" maxlength="20" placeholder="Nombre 1" />
      	<label for="apellido_1"></label><input name="apellido_1" type="text" id="apellido_1" size="20" maxlength="20" placeholder="Apellido 1" /></td>
      </tr>        
   <td  align="left">Teléfono para Contactar:</td>
      <td colspan="2"  align="left"><label for="telefono"></label><input name="telefono" type="text" id="telefono" value="04" size="12" maxlength="11" placeholder="Celular" /></td>
      </tr>   
   <tr>
        <td  align="left">Correo para Contactar:</td>
      <td colspan="2"  align="left"><label for="correo"></label><input name="correo" type="text" id="correo" placeholder="Correo"  size="20" maxlength="50" />			   </td>
   </tr>

    <tr>
      <td colspan="3" align="center"><input name="button" type="submit" id="button" value="Cargar" /><br />
      <?php
error_reporting(0);
if($_POST['actividad']){
		include "../conectar.php";
		$sql="insert into anuncios values(
					'$_POST[id_anuncio]',
					'$_POST[actividad]',
					'$_POST[descripcion]',
					'$_POST[fecha_inicio]',
					'$_POST[fecha_culminacion]',
					'$_POST[lugar]',
					'$_POST[nombre_1]',
					'$_POST[apellido_1]',
					'$_POST[telefono]',
					'$_POST[correo]'
				)";
				
	$registro=mysql_query($sql,$conexion);
	if($registro){
		echo "Anuncio Cargado Con Exito";?> <script> alert ("Anuncio Cargado Con Exito"); self.location='a_ver_anuncio.php' </script> <?php 
		 	if($_POST['actividad'])
				{include"a_a_menu.php";
			}
	}else{
		echo "Estudiantes ya existe";?> <script> alert("ESTUDIANTES YA EXISTE") </script><?php 
	}
}else{
		echo "DEBE REGISTRAR TODA  LA INFORMACIÓN"; 
}
		?> </td>
    </tr>
</table>
</form>
</body>
</html>
