<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Registro de Extensión</font>
<br/>
<br/>

<form  method="post"> 
<table width="100%" border="0" cellspacing="5" cellpadding="0">
    <tr>
    <td width="30%"><font id="sub_titulo">Datos del Registro:</font></td>
    <td width="70%"></td>
  </tr>
   <tr align="left">
        <td>Instituto</td>
        <td colspan="2"> 		
		<select name="instituto" id="instituto">
        <option value=""></option>
        <?php 
			error_reporting(0);
			include("../conectar.php");
			$sql="SELECT * FROM instituto";
	 		$result = mysql_query ($sql,$conexion);
			while($row=mysql_fetch_array($result))
			{
					if ($row_edi[nombre_legal]==$row[nombre_legal]){
					 		echo ("<option value=".$row[nombre_abreviado]."select>".$row[nombre_legal]."\n");
					}else{
				 			echo ("<option value=".$row[nombre_abreviado].">".$row[nombre_legal]."\n");
	
					 		}
			}mysql_close($conexion)			
			?>
            </select></td>
        </tr>
  <tr>
    <td width="30%">Codigo:</font></td>
    <td width="70%"></select><input name="cod"  id="cod" type="text" value="" size="10" maxlength="12"> <font color="#FF0000" size="-6" >Abreviacion Sede o Extensión en mayuscula</font></td>
  </tr>
  
  <tr>
    <td width="30%">RIF:</td>
    <td width="70%">
    	<select name="letra_rif" id="letra_rif">
    	<option value=""></option>
        <option value="J">J</option>
        <option value="G">G</option>
        <option value="V">V</option>
        </option>
    	
        </select><input name="rif"  id="rif" type="text" value="" size="10" maxlength="10">
    </td>
  </tr>
   <tr>
    <td>Nombre Completo:</td>
    <td><input name="nombre_legal" id="nombre_legal" type="text" size="20" maxlength="100"></td>
  </tr>
     <tr>
    <td>Nombre Abreviado:</td>
    <td><input name="nombre_abreviado" id="nombre_abreviado" type="text" size="20" maxlength="100"></td>
  </tr>
  <tr>
    <td><font id="sub_titulo">Datos De Ubicación:</font></td>
    <td ></td>
  </tr>
  <td>Telefono Local:</td>
    <td><input name="telefono" id="telefono" type="text" size="11" maxlength="11"></td>
  </tr>
  <tr>
    <td>Telefono Celular:</td>
    <td><input name="celular" id="celular" type="text" size="11" maxlength="11"></td>
  </tr>
    <tr>
    <td>Correo:</td>
    <td><input name="correo" id="correo" type="text" size="20" maxlength="40"></td>
  </tr>
      <tr>
    <td>Pagina Web:</td>
    <td><input name="pagina_web" id="pagina_web" type="text" size="20" maxlength="40"></td>
  </tr>
  <tr>
    <td>Estado:</td>
    <td><input name="estado" id="estado" type="text" size="20" maxlength="40"></td>
  </tr>
  <tr>
    <td>Ciudad:</td>
    <td><input name="ciudad" id="ciudad" type="text" size="20" maxlength="40"></td>
  </tr>
  <tr>
    <td valign="top">Dirección:</td>
    
    <td><textarea name="direccion" cols="40" rows="3" id="direccion"></textarea></td>
  </tr>
  </tr>
   <tr>
    <td><font id="sub_titulo">Datos Distritales:</font></td>
    <td ></td>
  </tr>
  <tr>
    <td>Fecha de Fundación:</td>
    <td><input type="date" id="fecha_fundacion" name="fecha_fundacion">
    </td>
  </tr>
  <tr>
    <td>Distrito:</td>
    <td><input name="distrito" id="distrito" type="text" size="20" maxlength="40"></td>
  </tr>
    <tr>
    <td>Coordinador:</td>
    <td><input name="coordinador" id="coordinador" type="text" size="20" maxlength="40"></td>
  </tr>
   <tr>
    <td>Cedula del Coordinador::</td>
    <td><input name="cedula" id="cedula" type="text" size="20" maxlength="40"></td>
  </tr>
  <tr>
    <td>Celular del Coordinador:</td>
    <td><input name="celular_director" id="celular_director" type="text" size="20" maxlength="40"></td>
  </tr>
  <td>Estatus:</td>
  <td><select name="estatus">
    	<option value=""></option>
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
        <option value="Retirado">Retirado</option>
    </select></td>
  </tr>
   <tr>
     <td valign="top">Observaciones:</td>
     <td><textarea name="observaciones"  id="observaciones" cols="40" rows="3"></textarea></td>
   </tr>
    <tr>
    <td height="20"></td>
    <td></td>
  </tr>
   <tr>
    <td></td>
    <td>
    	<input type="submit" value="Registrar" />
        <input type="reset" value="Borrar" />
        
    </td>
  </tr>
</table>
</form> 
 <?php
error_reporting(0);
include("../conectar.php");
if($_POST['cod']){
		$sql="insert into extension values(
					'$_POST[id_extension]',
					'$_POST[instituto]',
					'$_POST[cod]',
					'$_POST[letra_rif]',
					'$_POST[rif]',
					'$_POST[nombre_legal]',
					'$_POST[nombre_abreviado]',
					'$_POST[telefono]',
					'$_POST[celular]',
					'$_POST[correo]',
					'$_POST[pagina_web]',
					'$_POST[estado]',
					'$_POST[ciudad]',
					'$_POST[direccion]',
					'$_POST[fecha_fundacion]',
					'$_POST[distrito]',
					'$_POST[coordinador]',
					'$_POST[cedula]',
					'$_POST[celular_director]',
					'$_POST[estatus]',
					'$_POST[observaciones]')";
		$registro=mysql_query($sql,$conexion);
			if($registro){
					echo "Extensión Registrada con Exito</br>";?> <script> alert("Extensión Registrado Con Exito");</script><?php 
		 					if($_POST['rif']){
											include"p_buscar_instituto.php";
							}
			
			}else{
					echo "Extensión YA EXISTE";?> <script> alert("Extensión YA EXISTE") </script><?php 
					include"a_registro_instituto.php";
			}
		}else{
			  echo "EL CODIGO ES OBLIGATORIO";?><?php include"a_registro_insituto.php";
		
}
?>
</br>
</body>
</html>
