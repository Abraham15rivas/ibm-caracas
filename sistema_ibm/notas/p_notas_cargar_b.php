<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>Pago</title>
</head>


<body  >
<?php include("estudiante/p_estudiante_buscar.php"); ?>

<font id="titulo">Cargar Notas Modalidad Básico</font>
<br/>
<br/>

<form id="notas" name="notas" method="post" action="">

<table width="700" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="150">Cedula:</td>
    <td width="250"><label for="cedula"></label>
        <input name="cedula" type="text" id="cedula" value="<?php print $cedula;?>" size="8" maxlength="8" required="required"  /></td>
    <td width="300">&nbsp;</td>
  </tr>
  <tr>
    <td width="150">Nombres:</td>
    <td width="250"><input name="nombre" type="text" id="nombre" value="<?php print $nombre_1 and print " " and print $nombre_2 ;?>" size="20" maxlength="20" readonly  /></td>
    <td width="300">&nbsp;</td>
  </tr>
    <tr>
    <td width="150">Apellido:</td>
    <td width="250"><input name="apellido" type="text" id="apellido" value="<?php print $apellido_1 and print" " and print $apellido_2 ;?>" size="20" maxlength="20" readonly /></td>
    <td width="300">&nbsp;</td>
  </tr>
  <td width="150">Instituto:</td>
    <td width="250">
    	<select name="extension">
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

    </select>
    
    
    </td>
    <td width="300">&nbsp;</td>
  </tr>
  <tr>
    <td width="150">Curso:</td>
    <td width="250">
    	<select name="curso" id="curso">
        <option value="Basico">Basico</option>
        </select>
            
            
            
       </td>
    <td width="300"></td>
  </tr>
  <tr>
    <td width="150">Materia:</td>
    <td width="250"><select name="codigo" id="codigo">
        <option value=""></option>
        <?php 
			include("../conectar.php");
			$sql="SELECT * FROM materia WHERE curso='Basico' ORDER BY 'materia' ASC";
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
        <option value="0"></option>
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


 
<?php
include "../conectar.php";
if($_POST['fecha_nota']){ 
	$pagos="INSERT into notas values 
		(	
		'$_POST[id_nota]',
		'$_POST[cedula]',
		'$_POST[extension]',
		'$_POST[curso]',
		'$_POST[codigo]',
		'$_POST[cedula]$_POST[codigo]',
		'$_POST[nota]',
		'$_POST[fecha_nota]',
		'$_POST[observaciones_notas]')";

		$registro=mysql_query($pagos,$conexion);
		if($registro){
				echo "Nota Cargada con exito" ;?><br/><script> alert ("Nota Cargada con exito")</script><?php 
		 	if($_POST['nota']){
						include "a_buscar_estudiante_para_notas.php";
							
							
/* ENVIAR CORREO */	
					
				if(
				isset($_POST['cedula'])&&!empty($_POST['cedula'])&&
				isset($_POST['codigo'])&&!empty($_POST['codigo'])
				
				)
						{
						$destino = $correo;
						$titulo ="REGISTRO DE NOTAS DEL IBM";
						$texto = "
Estimado Estudiante:  $_POST[nombre] $_POST[apellido]
	Su Nota se ha sido Registrada en el sistema con  Exito.			
			
DESCRIPCION DEL PAGO:
			Fecha de Registro: $_POST[fecha_nota]		
			Materia:
			REFERENCIA: $_POST[codigo]
			Observaciones: $_POST[observaciones]

CONCEPTO: 	
			$_POST[concepto]
			CURSO: $_POST[curso] - $_POST[nivel]
			MODALIDAD: $_POST[modalidad]
			INSTITUTO: $_POST[instituto] - $_POST[extension]
	
			
RECUERDE HACER SU TRANSFERENCIA O DEPOSITOS:
	
	BANESCO Cuenta Corriente						
	Numero de Cuenta: 0134-00-7252-0721-031523
	A nombre de:  Argenis Flores
	CI: 6.266.685
						
							
CONTACTOS:						
				
Portal del instituto: http://www.ibmsoy.com.ve
Facebook: https://www.facebook.com/InstitutoBiblicoMetropolitano/?fref=ts
Correo Electrónico: administracion@ibmsoy.com.ve
Departamento de Administración


Si Ud. desconoce esta operación, comuníquese inmediatamente al 0424-268-8338.

Emergencias:
Celular: 0424-268-8338							
							
							";
						$desde = "administracion@ibmsoy.com.ve";
						
						mail($destino,$titulo,$texto,$desde);
				if(
				isset($_POST['cedula'])&&!empty($_POST['cedula'])&&
				isset($_POST['codigo'])&&!empty($_POST['codigo'])
				
				)
						{
						$destino = "sistempro.ca@gmail.com";
						$titulo ="RECIBO DE PAGO DEL IBM";
						$texto = "
Estimado Estudiante:  $_POST[nombre] $_POST[apellido]
	Su Pago ha sido Cargado satisfactoriamente.			
			
DESCRIPCION DEL PAGO:
			Fecha de pago: $_POST[fecha_de_pago]		
			MONTO: $_POST[monto],00
			REFERENCIA: $_POST[referencia]
			Observaciones: $_POST[observaciones]

CONCEPTO: 	
			$_POST[concepto]
			CURSO: $_POST[curso] - $_POST[nivel]
			MODALIDAD: $_POST[modalidad]
			INSTITUTO: $_POST[instituto] - $_POST[extension]
	
			
RECUERDE HACER SU TRANSFERENCIA O DEPOSITOS:
	
	BANESCO Cuenta Corriente						
	Numero de Cuenta: 0134-00-7252-0721-031523
	A nombre de:  Argenis Flores
	CI: 6.266.685
						
							
CONTACTOS:						
				
Portal del instituto: http://www.ibmsoy.com.ve
Facebook: https://www.facebook.com/InstitutoBiblicoMetropolitano/?fref=ts
Correo Electrónico: administracion@ibmsoy.com.ve
Departamento de Administración


Si Ud. desconoce esta operación, comuníquese inmediatamente al 0424-268-8338.

Emergencias:
Celular: 0424-268-8338							
							
							";
						$desde = "administracion@ibmsoy.com.ve";
						
						mail($destino,$titulo,$texto,$desde);
						
							echo "Correo Enviado..."?> <a href="index.php">inicio</a>;<?php
						}
							}else{
					echo "Problema al Enviar";
					}
			}
						
						
						
								
			}else{
				echo "Estudiante con Nota creada en esta materia";?><script> alert ("Estudiante con Nota creada en esta materia")</script><?php
				}
					}else{
				{
					echo "Debe registrar todos los datos";
					}
}

?>

</form>
</body>
</html>