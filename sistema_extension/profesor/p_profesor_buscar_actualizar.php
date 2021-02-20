<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include("p_profesor_buscar.php"); ?> <br/>

<font id="titulo">Actualizar Profesor</font>
<br/>

<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="30%"><font id="sub_titulo">Datos Basicos</font></td>
    <td width="30%"></td>
    <td width="40%"></td>
  </tr>
  <tr>
    <td>Cedula:</td>
    <td><input name="cedula" id="cedula" type="text" value="<?php echo $cedula ?>" size="10" maxlength="10"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> Nombres:</td>
    <td><input name="nombre_1" id="nombre_1" type="text" size="20" maxlength="40" placeholder="Primer Nombre" value="<?php echo $nombre_1 ?>"></td>
    <td><input name="nombre_2" id="nombre_2" type="text" size="20" maxlength="40" placeholder="Segundo Nombre" value="<?php echo $nombre_2 ?>"></td>
  </tr>
  <tr>
    <td>Apellidos:</td>
    <td><input name="apellido_1" id="apellido_1" type="text" size="20" maxlength="40"  placeholder="Primer Apellido" value="<?php echo $apellido_1 ?>"></td>
    <td><input name="apellido_2" id="apellido_2" type="text" size="20" maxlength="40"  placeholder="Segundo Apellido" value="<?php echo $apellido_2 ?>"></td>
  </tr>
  
  <tr>
    <td valign="top">Notas:</td>
    <td colspan="2"><textarea name="notas"  id="notas" cols="50" rows="2"><?php echo $notas ?></textarea></td>
  </tr>
  <tr>
    <td></td>
    <td>
   		<input  type="hidden" name="oculto" id="oculto" value="<?php echo $cedula?>" />
   		<input type="submit" value="Actualizar" />
       	
    </td>
    <td>&nbsp;</td>
  </tr>
  </table>
</form>

<?php
	if($_POST["oculto"]){ 
		include "../conectar.php";
		$sql="update profesor set 
				cedula='$_POST[cedula]',
				nombre_1='$_POST[nombre_1]',
				nombre_2='$_POST[nombre_2]',
				apellido_1='$_POST[apellido_1]',
				apellido_2='$_POST[apellido_2]',
				notas='$_POST[notas]'
		WHERE cedula='$_POST[oculto]'"; 
		$consulta=mysql_query($sql,$conexion);
		if(!mysql_error()){	echo "Registro De Profesor Actualizado";?> 
		<script> alert ("Registro De Profesor Actualizado");self.location='a_buscar_profesor.php' </script>
		
		<?php
					
		}else{
			echo "No Actualiza"; ?> <script> alert ("No Actualiza");self.location='#' </script><?php
		}mysql_close($conexion);
	}
	

?>

</body>
</html>


