<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>Pago</title>
</head>


<body  >
<?php include("notas/p_notas_buscar_registro.php");?>


<font id="sub_titulo">Correción de Notas del PENSUM MINISTERIAL:</font>
<br />
<br />

<form id="form1" name="form1" method="post" action="">
<table width="700" border="0" cellspacing="5" cellpadding="0">
    <tr>
    <td width="150">Registro:</td>
    <td width="250">
    	<label for="id_notas"></label> 
       <input name="id_notas" type="hidden" id="id_notas" value="<?php echo $id_notas?>"/> <?php echo $id_notas?>
         </td>
    <td width="300">&nbsp;</td>
  </tr>
  <tr>
    <td width="150">Cedula:</td>
    <td width="250">
    	<label for="cedula"></label>
        <input name="cedula" type="text" required="required" id="cedula" value="<?php print $cedula;?>" size="8" maxlength="8" readonly="readonly"/></td>
    <td width="300">&nbsp;</td>
  </tr>
  <tr>
  <td width="150">Instituto:</td>
    <td width="250">
    	<select name="extension">
        <option value="<?php echo $instituto?>"><?php echo $instituto?></option>
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

    </select>
    
    
    
    </td>
    <td width="300">&nbsp;</td>
  </tr>
  <tr>
    <td width="150">Curso:</td>
    <td width="250">
    	<select name="curso" id="curso">
        <option value="<?php echo $curso?>"><?php echo $curso?></option>
		<option value="Basico">Basico</option>
        <option value="Ministerial">Ministerial</option>
        <option value="Licenciatura">Licenciatura</option>
        <option value="Pensum Viejo">Pensum Viejo</option>
        </select>
            
            
            
       </td>
    <td width="300"></td>
  </tr>
  <tr>
    <td width="150"> Cambiar Materia:</td>
    <td width="250"><select name="codigo_materia" id="codigo_materia"> 
        <option value="<?php echo $codigo?>"><?php 
			$sql="SELECT * FROM materia";
			include"../conectar.php";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso_materia,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo_materia==$codigo){
					 echo $materia;
				}
			}
		?>
        
        </option> 
       <?php 
			include("../conectar.php");
			$sql="SELECT * FROM materia WHERE curso='Ministerial' ORDER BY 'materia' ASC";
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
    <td width="300">
	<?php 
			$sql="SELECT * FROM materia ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $materia;
				}
			}
		?>
    </td>
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
        <input type="date" name="fecha_nota" id="fecha_nota" value="<?php echo $fecha_nota ?>" /></td>
    <td width="300">&nbsp;</td>
  </tr>
    <tr>
    <td width="150" valign="top">Observaciones:</td>
    <td width="250"><label for="observaciones"></label>
        <textarea name="observaciones_notas" id="observaciones_notas" cols="30" rows="3"><?php echo $observaciones_notas?></textarea></td>
    <td width="300">&nbsp;</td>
  </tr>
      <tr>
    <td width="150" valign="top"></td>
    <td width="250">
   <input type="submit" name="button1" id="button1" value="Corregir" />
    <input name="oculto" type="hidden" id="oculto" value="<?php echo $id_notas?>"/>
  	</td>
    <td width="300">&nbsp;</td>
  </tr>

</table>	


<?php
if($_POST["oculto"]){ 
	include "../conectar.php"; 
		$sql="update notas set
		id_notas='$_POST[id_notas]',
		cedula='$_POST[cedula]',
		instituto='$_POST[extension]',
		curso='$_POST[curso]',
		codigo_materia='$_POST[codigo_materia]',
		cedula_codigo='$_POST[cedula]$_POST[codigo_materia]',
		nota='$_POST[nota]',
		fecha_nota='$_POST[fecha_nota]',
		observaciones_notas='$_POST[observaciones_notas]'
		where id_notas='$_POST[id_notas]'"; 
		
		$consulta=mysql_query($sql,$conexion); 
	
	if(!mysql_error()){;?>
        <script> alert ("Registro de Nota Actualizada"); self.location='a_a_menu.php' </script>
        <?php 
		}else{
				echo "Estudiante con Nota creada en esta materia";?><script> alert ("Estudiante con Nota creada en esta materia")</script><?php
				
		
		?>
<?php 
	}
}
?>







</form>

</body>
</html>