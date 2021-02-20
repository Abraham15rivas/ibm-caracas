<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include("p_instituto_buscar_cod.php"); ?> <br/>

<font id="titulo"><u>Actualizar Instituto </u></font>
<br/>

<form id="form1" name="form1" method="post" action="">
<table width="100%" border="0" cellspacing="5" cellpadding="0">
    <tr>
    <td width="30%"><font id="sub_titulo">Datos del Registro:</font></td>
    <td width="70%"></td>
  </tr>
  <tr>
    <td width="30%">Codigo:</font></td>
    <td width="70%"></select><input name="cod"  id="cod" type="text" value="<?php echo $cod ?>" size="10" maxlength="10"></td>
  </tr>
  <tr>
    <td width="30%">RIF:</td>
    <td width="70%">
    	<select name="letra_rif" id="letra_rif">
    	<option value="<?php echo $letra_rif ?>"><?php echo $letra_rif ?></option>
        <option value="J">J</option>
        <option value="G">G</option>
        <option value="V">V</option>
        </option>
        </select>
        <input name="rif"  id="rif" type="text" value="<?php echo $rif ?>" size="10" maxlength="10">
    </td>
  </tr>
   <tr>
    <td>Nombre Completo:</td>
    <td><input name="nombre_legal" id="nombre_legal" type="text" size="20" maxlength="100" value="<?php echo $nombre_legal ?>"></td>
  </tr>
     <tr>
    <td>Nombre Abreviado:</td>
    <td><input name="nombre_abreviado" id="nombre_abreviado" type="text" size="20" maxlength="100" value="<?php echo $nombre_abreviado ?>"></td>
  </tr>
  <tr>
    <td><font id="sub_titulo">Datos De Ubicación:</font></td>
    <td ></td>
  </tr>
  <td>Telefono Local:</td>
    <td><input name="telefono" id="telefono" type="text" size="11" maxlength="11" value="<?php echo $telefono ?>"></td>
  </tr>
  <tr>
    <td>Telefono Celular:</td>
    <td><input name="celular" id="celular" type="text" size="11" maxlength="11" value="<?php echo $celular ?>"></td>
  </tr>
    <tr>
    <td>Correo:</td>
    <td><input name="correo" id="correo" type="text" size="20" maxlength="40" value="<?php echo $correo ?>"></td>
  </tr>
      <tr>
    <td>Pagina Web:</td>
    <td><input name="pagina_web" id="pagina_web" type="text" size="20" maxlength="40" value="<?php echo $pagina_web ?>"></td>
  </tr>
  <tr>
    <td>Estado:</td>
    <td><input name="estado" id="estado" type="text" size="20" maxlength="40" value="<?php echo $estado ?>"></td>
  </tr>
  <tr>
    <td>Ciudad:</td>
    <td><input name="ciudad" id="ciudad" type="text" size="20" maxlength="40" value="<?php echo $ciudad ?>"></td>
  </tr>
  <tr>
    <td valign="top">Dirección:</td>
    
    <td><textarea name="direccion" cols="40" rows="3" id="direccion"  ><?php echo $direccion ?></textarea></td>
  </tr>
  </tr>
   <tr>
    <td><font id="sub_titulo">Datos De La Zona</font></td>
    <td ></td>
  </tr>
  <tr>
    <td>Fecha de Fundación:</td>
    <td><input type="date" id="fecha_fundacion" name="fecha_fundacion" value="<?php echo $fecha_fundacion ?>">
    </td>
  </tr>
  <tr>
    <td>Distrito:</td>
    <td><input name="distrito" id="distrito" type="text" size="20" maxlength="40" value="<?php echo $distrito ?>"></td>
  </tr>
    <tr>
    <td>Director:</td>
    <td><input name="director" id="director" type="text" size="20" maxlength="40" value="<?php echo $director ?>"></td>
  </tr>
   <tr>
    <td>Cedula:</td>
    <td><input name="cedula" id="cedula" type="text" size="20" maxlength="40"></td>
  </tr>
   <tr>
    <td>Celular del Director:</td>
    <td><input name="celular_director" id="celular_director" type="text" size="20" value="<?php echo $celular_director ?>" maxlength="40"></td>
  </tr>  
  <tr>
  <td>Estatus:</td>
  <td><select name="estatus">
    	<option value="<?php echo $estatus ?>"><?php echo $estatus ?></option>
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
        <option value="Retirado">Retirado</option>
    </select></td>
  </tr>
   <tr>
     <td valign="top">Observaciones:</td>
     <td><textarea name="observaciones"  id="observaciones" cols="40" rows="3"><?php echo $observaciones ?></textarea></td>
   </tr>
    <tr>
    <td height="20"></td>
    <td></td>
  </tr>
   <tr>
    <td></td>
    <td>
    	<input  type="hidden" name="oculto" id="oculto" value="<?php echo $id_instituto?>" />
    	<input type="submit" value="Actualizar" />
       
      </td>
    </tr>
  </table>


<?php
	if($_POST["oculto"]){ 
		include "../conectar.php";
		$sql="update instituto set
	
					cod='$_POST[cod]',
					letra_rif='$_POST[letra_rif]',
					rif='$_POST[rif]',
					nombre_legal='$_POST[nombre_legal]',
					nombre_abreviado='$_POST[nombre_abreviado]',
					telefono='$_POST[telefono]',
					celular='$_POST[celular]',
					correo='$_POST[correo]',
					pagina_web='$_POST[pagina_web]',
					estado='$_POST[estado]',
					ciudad='$_POST[ciudad]',
					direccion='$_POST[direccion]',
					fecha_fundacion='$_POST[fecha_fundacion]',
					distrito='$_POST[distrito]',
					director='$_POST[director]',
					cedula='$_POST[cedula]',
					celular_director='$_POST[celular_director]',
					estatus='$_POST[estatus]',
					observaciones='$_POST[observaciones]'
		where id_instituto='$_POST[oculto]'";
		$consulta=mysql_query($sql,$conexion);
		
		if(!mysql_error()){;?> 
			<script> alert ("Registro del Instituto Actualizada");self.location='a_a_menu.php' </script>
		<?php  	
			if($_POST['rif']){
		include"p_buscar_inscripcion.php";
		}
		}mysql_close($conexion);
	}
	

?>
</form>
</body>
</html>
