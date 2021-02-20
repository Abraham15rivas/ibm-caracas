<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>IBM</title>


</head>
<body>
<?php include ("p_usuario_buscar.php")?>

<font id="titulo">Actualizar  Usuario</font>

<form name="usuarios" method="post">
<table width="700" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="30%"><font id="sub_titulo">Información:</font></td>
    <td width="30%">&nbsp;</td>
    <td width="40%">&nbsp;</td>
  </tr>
    <tr>
    <td>Cedula:</td>
    <td><input name="cedula" id="cedula" type="text" value="<?php echo $cedula ?>" size="10" maxlength="8" placeholder="Cedula"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nombre:</td>
    <td><input name="nombre" type="text" autofocus placeholder="Nombre" required="required" value="<?php echo $nombre ?>" /></td>
    <td></td>
  </tr>
    <tr>
    <td>Apellido:</td>
    <td><input name="apellido" type="text" autofocus placeholder="Apellido" required="required" value="<?php echo $apellido ?>"/></td>
    <td></td>
  </tr>
    <tr>
  <td>Correo:</td>
    <td><input name="correo" type="text" autofocus placeholder="Correo" required="required" value="<?php echo $correo ?>" /></td>
    <td></td>
  </tr>
  <td>Celular:</td>
    <td><input name="celular" type="text" autofocus placeholder="Celular" required="required" value="<?php echo $celular ?>" /></td>
    <td></td>
  </tr>
  <tr>
    <td>Instituto:</td>
    <td>  <select name="instituto" >
      		<option value="<?php echo $instituto ?>"><?php echo $instituto ?></option>
           <?php 
			error_reporting(0);
			include("../conectar.php");
			$sql="SELECT * FROM instituto ";
	 		$result = mysql_query ($sql,$conexion);
			while($row=mysql_fetch_array($result))
			{
					if ($row_edi[nombre_abreviado]==$row[nombre_abreviado]){
					 		echo ("<option value=".$row[nombre_abreviado]."select>".$row[nombre_abreviado]."\n");
					}else{
				 			echo ("<option value=".$row[nombre_abreviado].">".$row[nombre_abreviado]."\n");
	
					 		}
							
							
			}mysql_close($conexion)			
			?>
           </select>
       </td>
    <td></td>
  </tr>  

  <tr>
    <td width="30%"><font id="sub_titulo">Seguridad:</font></td>
    <td width="30%">&nbsp;</td>
    <td width="40%">&nbsp;</td>
  </tr>
  <tr>
    <td>Nombre de Usuario</td>
    <td><input name="usuario" type="text" placeholder="Usuario" required="required" value="<?php echo $usuario ?>"/></td>
    <td>&nbsp;</td>
  </tr>
    <td>Clave Anterios:</td>
    <td><input name="clave_a" type="password" placeholder="Clave" required="required" value="" /></td>
    <td></td>
  </tr>
    <td>Nueva Clave:</td>
    <td><input name="clave" type="password" placeholder="Nueva Clave" required="required" /></td>
    <td></td>
  </tr>
      <td>Confirmar  Nueva Clave:</td>
    <td><input name="confirmar_clave" type="password" placeholder="Confirmar Nueva Clave" required="required" /></td>
    <td></td>
  </tr>
  <tr>
    <td>Pregunta Secreta:</td>
    <td><select name="pregunta" >
      		<option value="<?php echo $pregunta ?>"><?php echo $pregunta ?></option>
           <option value="Color Favorito">Color Favorito</option>
           <option value="Primera Mascota">Primera Mascota</option>
           <option value="Primera Escuela">Primera Escuela</option>
           <option value="Heroe Favorito">Heroe Favorito</option>
           <option value="Pelicula Favorita">Pelicula Favorita</option>
           <option value="Libro Favorito">Libro Favorit0</option>
           </select>
       </label></td>
    <td></td>
  </tr>
  <tr>
    <td>Respuesta:</td>
    <td><input name="respuesta" type="text" placeholder="?" required="required" value="<?php echo $respuesta ?>" /></td>
    <td>&nbsp;</td>
  </tr> 
  <tr>
    <td> Tipo de Usuario:</td>
    <td><select name="tipo_usuario" >
      		<option value="<?php echo $tipo_usuario ?>"><?php echo $tipo_usuario ?></option>
           <option value="Administrador">Administrador</option>
           <option value="Instituto">Instituto</option>
	       <option value="Profesor">Profesor</option>
           <option value="Estudiante">Estudiante</option>
           </select>
       </label></td>
    <td>&nbsp;</td>
  </tr> 
  </tr>
</table>
<br />
<input type="submit" value="Actualizar" />
<input type="reset" value="Borrar" />
<input type="hidden" name="oculto" id="oculto" value="<?php echo $id_usuario ?>" />



<?php
	include "../conectar.php";
	if($_POST['oculto']){
		$sql="update usuario set
		cedula='$_POST[cedula]',
		nombre='$_POST[nombre]',
		apellido='$_POST[apellido]',
		correo='$_POST[correo]',
		celular='$_POST[celular]',
		instituto='$_POST[instituto]',
		usuario='$_POST[usuario]',
		clave='$_POST[clave]',
		confirmar_clave='$_POST[confirmar_clave]',
		pegunta='$_POST[pregunta]',
		respuesta='$_POST[respuesta]',
		tipo_usuario='$_POST[tipo_usuario]'
		where id_usuario='$_POST[oculto]'";
		$consulta=mysql_query($sql,$conexion);
	
	if(!mysql_error()){;?>
        <script> alert ("Usuario Actualizado"); self.location='a_a_menu.php' </script>
        <?php 
		if($_POST['oculto']){
		include"a_a_menu.php";
		}
	}
	mysql_close($conexion);
	
}
?>
</form>
</body>
</html>

