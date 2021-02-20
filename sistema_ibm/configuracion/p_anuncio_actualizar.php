<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include("p_anuncio_buscar.php"); ?>

<br>
<br>


<font id="titulo">Actualizar Anuncio</font>
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
      <label for="titulo"></label><input name="actividad"   type="text" size="20" maxlength="50" placeholder="Actividad" value="<?php echo $actividad?>" /></td>
      </tr> 
   <tr  align="left">
      <td valign="top">Descripción de La Actividad:</td>
      <td colspan="2"><textarea name="descripcion"  id="descripcion" cols="50" rows="5"><?php echo $descripcion?></textarea></td>
      </tr>
      <tr>
    	<td valign="top">Fecha de Inicio:</td>
        
        <td colspan="2">
        <label for="fecha_inicio"></label>
        <input type="datetime-local" name="fecha_inicio" id="fecha_inicio" value="<?php echo $fecha_inicio?>"/>
        
      </tr>
      <tr>
    	<td valign="top">Fecha de Culminacion:</td>
        <td colspan="2"><input type="datetime-local" name="fecha_culminacion" value="<?php echo $fecha_culminacion?>"  /></td>
      </tr>
        <td width="200" align="left">Lugar:</td>
      <td colspan="2"  align="left">
      <label for="titulo"></label><input name="lugar"   type="text" size="20" maxlength="100" placeholder="Lugar" value="<?php echo $lugar?>"  /></td>
      </tr>        
    <tr align="left">
      <td>Persona Contacto:</td>
      <td>
      	<label for="nombre_1"></label><input name="nombre_1" type="text" id="nombre_1" size="20" maxlength="20" placeholder="Nombre 1" value="<?php echo $nombre_1?>" />
      	<label for="apellido_1"></label><input name="apellido_1" type="text" id="apellido_1" size="20" maxlength="20" placeholder="Apellido 1" value="<?php echo $apellido_1?>" /></td>
      </tr>        
   <td  align="left">Teléfono para Contactar:</td>
      <td colspan="2"  align="left"><label for="telefono"></label><input name="telefono" type="text" id="telefono" value="<?php echo $telefono?>" size="12" maxlength="11" /></td>
      </tr>   
   <tr>
        <td  align="left">Correo para Contactar:</td>
      <td colspan="2"  align="left"><label for="correo"></label><input name="correo" type="text" id="correo" placeholder="Correo"  value="<?php echo $correo?>" size="20" maxlength="50" />			   </td>
   </tr>

    <tr>
      <td colspan="3" align="center">
      <input  type="hidden" name="oculto" id="oculto" value="<?php echo $id_anuncio?>" />
      <input name="button" type="submit" id="button" value="Actualizar" /><br />
<?php
	if($_POST["oculto"]){ 
		include "../conectar.php";
		$sql="update anuncios set 
				id_anuncio='$_POST[id_anuncio]',
				actividad='$_POST[actividad]',
				descripcion='$_POST[descripcion]',
				fecha_inicio='$_POST[fecha_inicio]',
				fecha_culminacion='$_POST[fecha_culminacion]',
				lugar='$_POST[lugar]',
				nombre_1='$_POST[nombre_1]',
				apellido_1='$_POST[apellido_1]',
				telefono='$_POST[telefono]',
				correo='$_POST[correo]'
		WHERE id_anuncio='$_POST[oculto]'";
				
		$consulta=mysql_query($sql,$conexion);
		if(!mysql_error()){	echo "Anuncio Actualizado";?> <script> alert ("Anuncio Actualizado");self.location='a_a_menu.php' </script><?php
		

		}else{
			echo "No Actualiza"; ?> <script> alert ("No Actualiza");self.location='#' </script><?php
		}mysql_close($conexion);
	}
	

?></td>
    </tr>
</table>
</form>
</body>
</html>
