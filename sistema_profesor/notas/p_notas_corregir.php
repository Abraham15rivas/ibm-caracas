<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>Pago</title>
</head>


<body  >
<font id="titulo"> Corregir Notas </font><br /><br /><br/>

<form id="form1" name="form1" method="post" action="">
 <table width="700" border="0" cellspacing="0" cellpadding="0">
 	<tr>
    <td width="15%" align="left"><font id="sub_titulo">Codigo:</font> </td>
    <td width="15%" align="left" scope="col"><label for="cedula" ></label>
       <input name="codigo" type="text" id="codigo" placeholder="Codigo" size="10" maxlength="10"/></td>
    <td width="70%"  align="left" scope="col">
   		 <input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
 	 </tr>
 </table>
</form>
<br/>
<br/>


<?php
error_reporting(0); 
if($_POST['codigo']){
	include"../conectar.php";
	$sql="select * from notas where id_notas='$_POST[codigo]'";
	$consulta=mysql_query($sql,$conexion);
	
	?>
<?php
    if(list($id_notas,$cedula,$instituto,$curso,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta))	
	{
?>


<font id="texto_p">
<table width="700" border="0" cellspacing="2" cellpadding="0">
  <tr>
  	<td colspan="2"><font id="sub_titulo">Registro de Materia:</font></td>
    
    </td>
  </tr>
  <tr>
    <td width="50">Codigo:</td>
    <td width="200"><?php echo $id_notas ?></td>
  </tr>
  <tr>
    <td>Cedula:</td>
    <td><?php echo $cedula ?></td>
  </tr>
  <tr>
    <td>Instituto:</td>
    <td><?php echo $instituto ?></td>
  </tr>
  <tr>
    <td>Curso:</td>
    <td><?php echo $curso ?></td>
  </tr>
  <tr>
    <td>Codigo:</td>
    <td><?php echo $codigo?></td>
  </tr>
    <tr>
    <td>Materia:</td>
    <td><?php 
			$sql="SELECT * FROM materia ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $materia;
				}
			}
		?></td>
  </tr>
  <tr>
    <td>Codigo unico:</td>
    <td> <?php echo $cedula_codigo ?></td>
  </tr>
  <tr>
    <td>Nota:</td>
    <td><?php echo $nota?></td>
  </tr>
  <tr>
    <td>Fecha de  Carga:</td>
    <td><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td>
  </tr>
  <tr>
    <td>Observaciones:</td>
    <td><?php echo $observaciones_notas?></td>
  </tr>
</table>
</font>
<br />
<br />
<br />

<font id="sub_titulo">Correción de Notas:</font>
<br />
<br />
<table width="700" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="150">Cedula:</td>
    <td width="250"><label for="cedula"></label>
        <input name="cedula" type="text" id="cedula" value="<?php print $cedula;?>" size="8" maxlength="8" required="required"  /></td>
    <td width="300">&nbsp;</td>
  </tr>
  <tr>
  <td width="150">Instituto:</td>
    <td width="250">
    	<select name="instituto">
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

    </select>
    
    
    </td>
    <td width="300">&nbsp;</td>
  </tr>
  <tr>
    <td width="150">Curso:</td>
    <td width="250">
    	<select name="curso" id="curso">
        <option value="Basico">Basico</option>
		<option value="Basico">Basico</option>
        <option value="Ministerial">Ministerial</option>
        <option value="Licenciatura">Licenciatura</option>
        <option value="Pensum Viejo">Pensum Viejo</option>
        
        </select>
            
            
            
       </td>
    <td width="300"></td>
  </tr>
  <tr>
    <td width="150">Materia:</td>
    <td width="250"><select name="codigo" id="codigo">
        <option value="<?php echo $codigo?>"><?php echo $codigo?> <?php 
			$sql="SELECT * FROM materia ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $materia;
				}
			}
		?></option>
        <?php 
			include("../conectar.php");
			$sql="SELECT * FROM materia  ORDER BY 'materia' ASC";
	 		$result = mysql_query ($sql,$conexion);
			while($row=mysql_fetch_array($result))
			{
					if ($row_edi[materia]==$row[materia]){
					 		echo ("<option value=".$row[codigo]."select>".$row[materia]."\n");
					}else{
				 			echo ("<option value=".$row[codigo].">".$row[materia]."\n");
	
					 		}
							
							
			}mysql_close($conexion)			
			?>
            </select>
            
            
            
            
       </td>
    <td width="300"></td>
  </tr>
 
  <tr>
    <td width="150">Nota:</td>
    <td width="250">
    <select name="nota">
    	<option value="<?php echo $nota?>"><?php echo $nota?></option>
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
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
    </select>
    
    </td>
    <td width="300"></td>
  </tr>
  <tr>
    <td width="150">Fecha de la Nota:</td>
    <td width="250"><label for="fecha_nota"></label>
        <input type="date" name="fecha_nota" id="fecha_nota" /></td>
    <td width="300">&nbsp;</td>
  </tr>
    <tr>
    <td width="150" valign="top">Observaciones:</td>
    <td width="250"><label for="observaciones"></label>
        <textarea name="observaciones" id="observaciones" cols="30" rows="3"></textarea></td>
    <td width="300">&nbsp;</td>
  </tr>
      <tr>
    <td width="150" valign="top"></td>
    <td width="250">
    <input type="submit" name="Cargar" id="Cargas" value="Cargar"  /> 
    <input type="reset" name="Limpiar" id="Limpiar" value="Limpiar" /></td>
    <td width="300">&nbsp;</td>
  </tr>

</table>	

</form>
 
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
		sede='$_POST[sede]',
		modalidad='$_POST[modalidad]',
		curso='$_POST[curso]',
		nivel='$_POST[nivel]',
		estatus='$_POST[estatus]',
		codigo_diploma='$_POST[codigo_diploma]',
		fecha_nacimiento='$_POST[fecha_nacimiento]',
		fecha_ingreso='$_POST[fecha_ingreso]',
		fecha_egreso='$_POST[fecha_egreso]',
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
	

?>





<?php 
	}else{
		print"Dato no encontrado"; ?> <script> alert ("Datos no encontrados")</script>
<?php
	}mysql_close($conexion);
}}}
?>	




</body>
</html>