<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="estilos.css" rel="stylesheet" type="text/css" />
<title>Pago</title>
</head>


<body  >
<?php include("estudiante/p_estudiante_buscar.php"); ?>

<font id="titulo">Registrar Pagos</font>
<br/>
<br/>

<form id="pago" name="pago" method="post" action="">

<table width="700" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="150">Cedula:</td>
    <td width="250"><label for="cedula"></label>
        <input name="cedula" type="text" id="cedula" value="<?php print $cedula;?>" size="8" maxlength="8" tabindex="1"  /></td>
    <td width="300">&nbsp;</td>
  </tr>
  <tr>
    <td width="150">Nombres:</td>
    <td width="250"><input name="nombre" type="text" id="nombre" value="<?php print $nombre_1 and print " " and print $nombre_2 ;?>" size="20" maxlength="20" readonly  /></td>
    <td width="300">&nbsp;</td>
  </tr>
    <tr>
    <td width="150">Apellido:</td>
    <td width="250"><input name="apellido" type="text" id="apellido" value="<?php print $apellido_1 and print" " and print $apellido_2 ;?>" size="20" maxlength="20" readonly  /></td>
    <td width="300">&nbsp;</td>
  </tr>
  	<tr>
    <td width="150">Instituto:</td>
    <td width="250"><input name="instituto" type="text" id="instituto" value="<?php print $instituto;?>" size="20" maxlength="20" readonly /></td>
    <td width="300">&nbsp;</td>
  </tr>
  <tr>
    <td width="150">Extensión:</td>
    <td width="250"><input name="extension" type="text" id="extension" value="<?php print $extension;?>" size="20" maxlength="20" readonly /></td>
    <td width="300">&nbsp;</td>
  </tr>
  <td width="150">Modalidad:</td>
    <td width="250"><input name="modalidad" type="text" id="modalidad" value="<?php print $modalidad;?>" size="20" maxlength="20" readonly /></td>
    <td width="300">&nbsp;</td>
  </tr>	
  <tr>
    <td width="150">Curso:</td>
    <td width="250"><input name="curso" type="text" id="curso" value="<?php print $curso;?>" size="20" maxlength="20" /></td>
    <td width="300"><font id="importante">Verificar el Curso que pagan</font></td>
  </tr>
    <tr>
    <td width="150">Nivel:</td>
    <td width="250"><input name="nivel" type="text" id="nivel" value="<?php print $nivel;?>" size="20" maxlength="20" /> </td>
    <td width="300"><font id="importante">  Verificar el Nivel que pagan</font></td>
  </tr>
      <tr>
    <td width="150">Concepto:</td>
    <td width="250"><select name="concepto">
      		<option value=""></option>
           <option value="Inscripcion">Inscripción</option>
           <option value="Cuota 1">Cuota 1</option>
           <option value="Cuota 2">Cuota 2</option>
           <option value="Cuota 3">Cuota 3</option>
           <option value="Cuota 4">Cuota 4</option>
           <option value="Cuota 5">Cuota 5</option>
           <option value="Cuota 6">Cuota 6</option>
           <option value="Materia">Materia</option>
           <option value="Bimestre">Bimestre</option>
           <option value="Trimestre">Trimestre</option>
           <option value="Cuatrimestres">Cuatrimestres</option>
           <option value="Semestre">Semestre</option>
           
           </select>
       </label></td>
    <td width="300">&nbsp;</td>
  </tr>
        <tr>
    <td width="150">Modo de Pago:</td>
    <td width="250"><select name="modo_de_pago">
      		<option value=""></option>
           <option value="Efectivo">Efectivo</option>
           <option value="Deposito">Deposito</option>
           <option value="Transferencia">Transferencia</option>
           <option value="Cheque">Cheque</option>
           <option value="Debito">Debito</option>
           <option value="Credito">Credito</option>
           <option value="Exonerado">Exonerado</option>
           </select>
       </label></td>
    <td width="300">&nbsp;</td>
  </tr>

    <tr>
    <td width="150">Referencia:</td>
    <td width="250"><input name="referencia" type="text" id="referencia" size="20" maxlength="20" /></td>
    <td width="300">&nbsp;</td>
  </tr>
    <tr>
    <td width="150">Monto:</td>
    <td width="250"><input name="monto" type="text" id="monto"  size="20" maxlength="20" /></td>
    <td width="300">&nbsp;</td>
  </tr>
      <tr>
    <td width="150">Fecha de Pago:</td>
    <td width="250"><label for="fecha_de_pago"></label>
        <input type="date" name="fecha_de_pago" id="fecha_de_pago" /></td>
    <td width="300">&nbsp;</td>
  </tr>
    </tr>
    <tr>
    <td width="150" valign="top">Observaciones:</td>
    <td width="250"><label for="observaciones"></label>
        <textarea name="observaciones" id="observaciones" cols="30" rows="3" ></textarea></td>
    <td width="300">&nbsp;</td>
  </tr>
      <tr>
    <td width="150" valign="top"></td>
    <td width="250"><input type="submit" name="Pagar" id="Pagar" value="Pagar"  /> <input type="reset" name="Limpiar" id="Limpiar" value="Limpiar" /></td>
    <td width="300">&nbsp;</td>
  </tr>

</table>	

</form>
 
<?php
include "../conectar.php";
if($_POST['monto']){ 
	$pagos="INSERT into pagos_ibm values 
		(	
		'$_POST[id_pagos]',
		'$_POST[cedula]',
		'$_POST[instituto]',
		'$_POST[extension]',
		'$_POST[modalidad]',
		'$_POST[curso]',
		'$_POST[nivel]',
		'$_POST[concepto]',
		'$_POST[modo_de_pago]',
		'$_POST[referencia]',
		'$_POST[monto]',
		'$_POST[fecha_de_pago]',		
		'$_POST[observaciones]')";

		$registro=mysql_query($pagos,$conexion);
		if($registro){
			echo "Pago registrado con exito" ;?><br/><script> alert ("Pago Realizado con exito")</script><?php 
		 	if($_POST['cedula']){
				include "pagos_ibm/p_pago_ibm_buscar_cedula.php";
		
		/* ENVIAR CORREO */	
					
				if(
				isset($_POST['cedula'])&&!empty($_POST['cedula'])&&
				isset($_POST['concepto'])&&!empty($_POST['concepto'])
				
				)
						{
						$destino = $correo;
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
	
	Banco de Venezuela Cuenta Corriente						
	Numero de Cuenta: 0102-0556-53-0000-013767
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
				isset($_POST['concepto'])&&!empty($_POST['concepto'])
				
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
	
	Banco de Venezuela Cuenta Corriente						
	Numero de Cuenta: 0102-0556-53-0000-013767
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
				echo "registrar todo los campos";?><script> alert ("registrar todo los campos")</script><?php
				}
					}else{
				{
					echo "Debe registrar todos los datos";
					}
}

?>


</body>
</html>