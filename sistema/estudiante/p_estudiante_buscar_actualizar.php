<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="estilos.css" rel="stylesheet" type="text/css" />
<title> Actualizar</title>
</head>


<body>
<center>

<?php include ("p_estudiante_buscar.php")?>
<font id="titulo">Actualizar Estudiante</font>
<br/>
<br/>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" height="376" border="0" align="left" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="3"><font id="sub_titulo">Datos Básicos:</font></td>
    </tr>
    <tr align="left">
      <td width="200">Cédula:</td>
      <td width="500" colspan="2">
      	<select name="l_cedula">
      	<option value="<?php echo $l_cedula?>"><?php echo $l_cedula?></option>
        <option value="V"> V</option>
        <option value="E"> E</option>
    </select>
        <label for="cedula"></label>
        <input name="cedula" type="text" id="cedula" value="<?php echo $cedula?>" size="20" maxlength="8" readonly/></td>
    </tr>
    <tr align="left">
      <td>Nombres:</td>
      <td colspan="2"><label for="nombre_1"></label>
        <input name="nombre_1" type="text" id="nombre_1" size="20" maxlength="20" value="<?php echo $nombre_1?>"/>
        <label for="nombre_2"></label>
        <input name="nombre_2" type="text" id="nombre_2" size="20" maxlength="20" value="<?php echo $nombre_2?>"/></td>
    </tr>
    <tr align="left">
      <td>Apellidos:</td>
      <td colspan="2"><label for="apellido_1"></label>
        <input name="apellido_1" type="text" id="apellido_1" size="20" maxlength="20" value="<?php echo $apellido_1?>"/>
        <label for="apellido_2"></label>
        <input name="apellido_2" type="text" id="apellido_2" size="20" maxlength="20" value="<?php echo $apellido_2?>"/></td>
    </tr>
    <tr>
      <td  align="left">Teléfono:</td>
      <td colspan="2"  align="left"><label for="telefono"></label>
        <input name="telefono" type="text" id="telefono" value="<?php echo $telefono?>" size="12" maxlength="11"  /></td>
    </tr>
    <tr>
      <td  align="left">Correo:</td>
      <td colspan="2"  align="left"><label for="correo"></label>
        <label for="correo"></label>
        <input name="correo" type="text" id="correo" value="<?php echo $correo?>"  size="20" maxlength="50" /></td>
    </tr>
      <tr align="left">
        <td>Instituto</td>
        <td colspan="2"> <select name="instituto">
        <option value="<?php echo $instituto?>"><?php echo $instituto?></option>
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
      <tr align="left">
        <td>Sede o Extensión</td>
        <td colspan="2"> <select name="extension">
        <option value="<?php echo $extension?>"><?php echo $extension?></option>
         <?php 
			error_reporting(0);
			include("../conectar.php");
			$sql="SELECT * FROM extension";
	 		$result = mysql_query ($sql,$conexion);
			while($row=mysql_fetch_array($result))
			{
					if ($row_edi[nombre_legal]==$row[nombre_legal]){
					 		echo ("<option value=".$row[cod]."select>".$row[nombre_abreviado]."\n");
					}else{
				 			echo ("<option value=".$row[cod].">".$row[nombre_abreviado]."\n");
	
					 		}
			}mysql_close($conexion)			
			?>

    </select></td>
        </tr>
    <tr align="left">
      <td>Modalidad:</td>
      <td colspan="2"><select name="modalidad">
        <option value="<?php echo $modalidad?>"><?php echo $modalidad?></option>
        <option value="Regular">Regular</option>
        <option value="Nocturno">Nocturno</option>
       	<option value="Sabatino">Sabatino</option>
        <option value="Intensivo">Intensivo</option>
        <option value="Aula">Aula</option>
      </select></td>
    </tr>
    <tr align="left">
      <td>Curso:</td>
      <td colspan="2"><select name="curso">
        <option value="<?php echo $curso?>"><?php echo $curso?></option>
        <option value="Basico">Basico</option>
        <option value="Ministerial">Ministerial</option>
        <option value="Superior">Superior</option>
      </select>
    </tr>
    <tr align="left">
      <td>Nivel:</td>
      <td colspan="2"><select name="nivel">
        <option value="<?php echo $nivel?>"><?php echo $nivel?></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select></td>
    </tr>
    <tr  align="left">
      <td>Estatus:</td>
      <td colspan="2"><select name="estatus">
       <option value="<?php echo $estatus?>"> <?php echo $estatus?></option>
       <option value="Activo"> Activo</option>
       <option value="Retirado"> Retirado</option>
       <option value="Flotante"> Flotante</option>
       <option value="Suspendido"> Suspendido</option>
       <option value="A Graduar"> A Graduar</option>
       <option value="Graduado"> Graduado</option>
      </select></td>
    </tr>
   	<tr>
     	<td>Codigo De Diploma:</td>
        <td  colspan="2"><label for="codigo_diploma"></label><input name="codigo_diploma" type="text" id="codigo_diploma" size="5" maxlength="5" placeholder="Codigo" value="<?php echo $codigo_diploma?>"  /></td>
     </tr> 
     <tr>
        <td valign="top">Fecha de Nacimiento:</td>
        <td colspan="2"><label for="fecha_nacimiento"></label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $fecha_nacimiento?>"/></td>
      </tr>
      <tr>
      <td valign="top">Fecha Ingreso:</td>
      <td colspan="2"><label for="fecha_ingreso"></label>
        <input type="date" name="fecha_ingreso" id="fecha_ingreso" value="<?php echo $fecha_ingreso?>"/></td>
      </tr>
      <tr>
      <td valign="top">Fecha Egreso:</td>
      <td colspan="2"><label for="fecha_egreso"></label>
        <input type="date" name="fecha_egreso" id="fecha_egreso" value="<?php echo $fecha_egreso?>"/></td>
      </tr>
   <tr  align="left">
      <td>Graduado en:</td>
      <td colspan="2"><select name="nivel_graduacion" id="nivel_graduacion">
       <option value="<?php echo $nivel_graduacion?>"><?php echo $nivel_graduacion?></option>
         <?php 
			error_reporting(0);
			include("../conectar.php");
			$sql="SELECT * FROM nivel_graduacion";
	 		$result = mysql_query ($sql,$conexion);
			while($row=mysql_fetch_array($result))
			{
					if ($row_edi[nombre]==$row[nombre]){
					 		echo ("<option value=".$row[codigo]."select>".$row[nombre]."\n");
					}else{
				 			echo ("<option value=".$row[codigo].">".$row[nombre]."\n");
	
					 		}
			}mysql_close($conexion)			
			?>

    </select></td>
      </tr>        
    </tr><tr  align="left">
      <td valign="top">Observaciones:</td>
      <td colspan="2"><label for="observaciones"></label>
        <textarea name="observaciones" id="observaciones" cols="45" rows="5"   ><?php echo $observaciones?></textarea></td>
    </tr>
    <tr  align="left">
      <td colspan="3"><font id="sub_titulo">Requisitos:</font></td>
    </tr>
    <tr>
      <td>Carta de Pastor:</td>
      <td><?php  if ($carta_del_pastor=='Si'){ ?>
        Si
        <input type="radio" name="carta_del_pastor" id="carta_del_pastor1" value="Si" checked="checked"  />
        No
        <input type="radio" name="carta_del_pastor" id="carta_del_pastor2" value="No" />
        <?php }else{?>
        Si
        <input type="radio" name="carta_del_pastor" id="carta_del_pastor3" value="Si" />
        No
        <input type="radio" name="carta_del_pastor" id="carta_del_pastor4" value="No" checked="checked"  />
        <?php }  ?></td>
    </tr>
   	<tr>
      <td>Carta  Solvencia de D/O:</td>
      <td><?php  if ($diezmo_ofrenda=='Si'){ ?>
        Si
        <input type="radio" name="diezmo_ofrenda" id="diezmo_ofrenda" value="Si" checked="checked"  />
        No
        <input type="radio" name="diezmo_ofrenda" id="diezmo_ofrenda" value="No" />
        <?php }else{?>
        Si
        <input type="radio" name="diezmo_ofrenda" id="diezmo_ofrenda" value="Si" />
        No
        <input type="radio" name="diezmo_ofrenda" id="diezmo_ofrenda" value="No" checked="checked"  />
        <?php }  ?></td>
    </tr>
    <tr>
      <td>Planilla de Inscripción:</td>
      <td><?php  if ($planilla_de_inscripcion=='Si'){ ?>
        Si
        <input type="radio" name="planilla_de_inscripcion" id="planilla_de_inscripcion1" value="Si" checked="checked" />
        No
        <input type="radio" name="planilla_de_inscripcion" id="planilla_de_inscripcion2" value="No" />
        <?php }else{?>
        Si
        <input type="radio" name="planilla_de_inscripcion" id="planilla_de_inscripcion3" value="Si" />
        No
        <input type="radio" name="planilla_de_inscripcion" id="planilla_de_inscripcion4" value="No"checked="checked" />
        <?php }  ?></td>
    </tr>
    <tr>
      <td>Copia de Cédula:</td>
      <td><?php  if ($copia_de_cedula=='Si'){ ?>
        Si
        <input type="radio" name="copia_de_cedula" id="copia_de_cedula1" value="Si" checked="checked" />
        No
        <input type="radio" name="copia_de_cedula" id="copia_de_cedula2" value="No" />
        <?php }else{?>
        Si
        <input type="radio" name="copia_de_cedula" id="copia_de_cedula3" value="Si" />
        No
        <input type="radio" name="copia_de_cedula" id="copia_de_cedul4" value="No" checked="checked" />
        <?php }  ?></td>
    </tr>
    <tr>
      <td>2 Fotos carnet:</td>
      <td><?php  if ($fotos_tipo_carnet=='Si'){ ?>
        Si
        <input type="radio" name="fotos_tipo_carnet" id="fotos_tipo_carnet1" value="Si" checked="checked" />
        No
        <input type="radio" name="fotos_tipo_carnet" id="fotos_tipo_carnet2" value="No" />
        <?php }else{?>
        Si
        <input type="radio" name="fotos_tipo_carnet" id="fotos_tipo_carnet3" value="Si" />
        No
        <input type="radio" name="fotos_tipo_carnet" id="fotos_tipo_carnet4" value="No" checked="checked"  />
        <?php }  ?></td>
    </tr>
    <tr>
      <td>Copia de Título:</td>
      <td><?php  if ($copia_de_titulo=='Si'){ ?>
        Si
        <input type="radio" name="copia_de_titulo" id="copia_de_titulo1" value="Si" checked="checked" />
        No
        <input type="radio" name="copia_de_titulo" id="copia_de_titulo2" value="No" />
        <?php }else{?>
        Si
        <input type="radio" name="copia_de_titulo" id="copia_de_titulo3" value="Si" />
        No
        <input type="radio" name="copia_de_titulo" id="copia_de_titulo4" value="No" checked="checked" />
        <?php }  ?></td>
    </tr>
        <tr>
      <td>Copia de Cert. de Notas:</td>
      <td><?php  if ($certificacion_notas=='Si'){ ?>
        Si
        <input type="radio" name="certificacion_notas" id="certificacion_notas" value="Si" checked="checked" />
        No
        <input type="radio" name="certificacion_notas" id="certificacion_notas" value="No" />
        <?php }else{?>
        Si
        <input type="radio" name="certificacion_notas" id="certificacion_notas" value="Si" />
        No
        <input type="radio" name="certificacion_notas" id="certificacion_notas" value="No" checked="checked" />
        <?php }  ?></td>
    </tr>
        <tr>
      <td>Cert. de Salud Mental:</td>
      <td><?php  if ($salud_mental=='Si'){ ?>
        Si
        <input type="radio" name="salud_mental" id="salud_mental" value="Si" checked="checked" />
        No
        <input type="radio" name="salud_mental" id="salud_mental" value="No" />
        <?php }else{?>
        Si
        <input type="radio" name="salud_mental" id="salud_mental" value="Si" />
        No
        <input type="radio" name="salud_mental" id="salud_mental" value="No" checked="checked" />
        <?php }  ?></td>
    </tr>
    <tr>
      <td>Sobre de Maníla:</td>
      <td><?php  if ($sobre_de_manila=='Si'){ ?>
        Si
        <input type="radio" name="sobre_de_manila" id="sobre_de_manila1" value="Si" checked="checked" />
        No
        <input type="radio" name="sobre_de_manila" id="sobre_de_manila2" value="No" />
        <?php }else{?>
        Si
        <input type="radio" name="sobre_de_manila" id="sobre_de_manila3" value="Si" />
        No
        <input type="radio" name="sobre_de_manila" id="sobre_de_manila4" value="No" checked="checked" />
        <?php }  ?></td>
    </tr>
    <tr>
      <td  align="left">Iglesia:</td>
      <td colspan="2"  align="left"><label for="Iglesia"></label>
        <input name="iglesia" value="<?php echo $iglesia?>" type="text" id="iglesia" size="30" maxlength="50"  /></td>
    </tr>
    <tr>
      <td  align="left">Pastor:</td>
      <td colspan="2"  align="left"><label for="Pastor"></label>
        <input name="pastor" value="<?php echo $pastor?>" type="text" id="pastor" size="30" maxlength="30" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button1" id="button1" value="Actualizar" />
        <input name="oculto" type="hidden" id="oculto" value="<?php echo $id_estudiante?>"/>
        
<?php
	if($_POST["oculto"]){
	include "../conectar.php";
		$sql="update estudiante set
		l_cedula='$_POST[l_cedula]',
		cedula='$_POST[cedula]',
		nombre_1='$_POST[nombre_1]',
		nombre_2='$_POST[nombre_2]',
		apellido_1='$_POST[apellido_1]',
		apellido_2='$_POST[apellido_2]',
		telefono='$_POST[telefono]',
		correo='$_POST[correo]',
		instituto='$_POST[instituto]',
		extension='$_POST[extension]',
		modalidad='$_POST[modalidad]',
		curso='$_POST[curso]',
		nivel='$_POST[nivel]',
		estatus='$_POST[estatus]',
		codigo_diploma='$_POST[codigo_diploma]',
		fecha_nacimiento='$_POST[fecha_nacimiento]',
		fecha_ingreso='$_POST[fecha_ingreso]',
		fecha_egreso='$_POST[fecha_egreso]',
		nivel_graduacion='$_POST[nivel_graduacion]',
		observaciones='$_POST[observaciones]',
		carta_del_pastor='$_POST[carta_del_pastor]',
		diezmo_ofrenda='$_POST[diezmo_ofrenda]',
		planilla_de_inscripcion='$_POST[planilla_de_inscripcion]',
		copia_de_cedula='$_POST[copia_de_cedula]',
		fotos_tipo_carnet='$_POST[fotos_tipo_carnet]',
		copia_de_titulo='$_POST[copia_de_titulo]',
		certificacion_notas='$_POST[certificacion_notas]',
		salud_mental='$_POST[salud_mental]',
		sobre_de_manila='$_POST[sobre_de_manila]',
		iglesia='$_POST[iglesia]',
		pastor='$_POST[pastor]'
		where id_estudiante='$_POST[oculto]'";
		$consulta=mysql_query($sql,$conexion);
	
	if(!mysql_error()){;?>
        <script> alert ("Registro Actualizado"); self.location='a_a_menu.php' </script>
        <?php 
		if($_POST['cedula']){
		include"p_buscar_inscripcion.php";
		}
	}
	mysql_close($conexion);
	
}
?></td>
    </tr>
  </table>
</form>

</center>
</body>
</html>
