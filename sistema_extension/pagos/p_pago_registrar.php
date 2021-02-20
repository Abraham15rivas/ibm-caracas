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
    <td width="250"><input name="nombre" type="text" id="nombre" value="<?php print $nombre_1 and print " " and print $nombre_2 ;?>" size="20" maxlength="20" readonly tabindex="2" /></td>
    <td width="300">&nbsp;</td>
  </tr>
    <tr>
    <td width="150">Apellido:</td>
    <td width="250"><input name="apellido" type="text" id="apellido" value="<?php print $apellido_1 and print" " and print $apellido_2 ;?>" size="20" maxlength="20" readonly tabindex="3" /></td>
    <td width="300">&nbsp;</td>
  </tr>
    <td width="150">Instituto:</td>
    <td width="250"><input name="instituto" type="text" id="instituto" value="<?php print $instituto;?>" size="20" maxlength="20" readonly /></td>
    <td width="300">&nbsp;</td>
  </tr>
    <tr>
    <td width="150">Fecha de Pago:</td>
    <td width="250"><label for="fecha_de_pago"></label>
        <input type="date" name="fecha_de_pago" id="fecha_de_pago" tabindex="3"/></td>
    <td width="300">&nbsp;</td>
  </tr>
    </tr>
  <tr>
    <td width="150">Modo de Pago:</td>
    <td width="250"><select name="modo_de_pago" tabindex="4">
      		<option value=""></option>
           <option value="Efectivo">Efectivo</option>
           <option value="Deposito">Deposito</option>
           <option value="Transferencia">Transferencia</option>
           <option value="Cheque">Cheque</option>
           </select>
       </label></td>
    <td width="300">&nbsp;</td>
  </tr>
    <tr>
    <td width="150">Referencia:</td>
    <td width="250"><input name="referencia" type="text" id="referencia" tabindex="5" size="20" maxlength="20" /></td>
    <td width="300">&nbsp;</td>
  </tr>
    <tr>
    <td width="150">Monto:</td>
    <td width="250"><input name="monto" type="text" id="monto" tabindex="6" size="20" maxlength="20" /></td>
    <td width="300">&nbsp;</td>
  </tr>
    <tr>
    <td width="150">Concepto:</td>
    <td width="250"><select name="concepto" tabindex="7">
      		<option value=""></option>
           <option value="Inscripcion">Inscripción</option>
           <option value="Mensualidad">Mensualidad</option>
           <option value="Bimestre">Bimestre</option>
           <option value="Trimestre">Trimestre</option>
           <option value="Semestre">Semestre</option>
           </select>
       </label></td>
    <td width="300">&nbsp;</td>
  </tr>
    <tr>
    <td width="150" valign="top">Observaciones:</td>
    <td width="250"><label for="observaciones"></label>
        <textarea name="observaciones" id="observaciones" cols="30" rows="3" tabindex="8"></textarea></td>
    <td width="300">&nbsp;</td>
  </tr>
      <tr>
    <td width="150" valign="top"></td>
    <td width="250"><input type="submit" name="Pagar" id="Pagar" value="Pagar" tabindex="9" /> <input type="reset" name="Limpiar" id="Limpiar" value="Limpiar" /></td>
    <td width="300">&nbsp;</td>
  </tr>

</table>	

</form>
 
<?php
include "../conectar.php";
if($_POST['monto']){ 
	$pagos="INSERT into pagos values 
		(	
		'$_POST[id_pagos]',
		'$_POST[cedula]',
		'$_POST[instituto]',
		'$_POST[fecha_de_pago]',
		'$_POST[modo_de_pago]',
		'$_POST[referencia]',
		'$_POST[monto]',
		'$_POST[concepto]',
		'$_POST[observaciones]')";

		$registro=mysql_query($pagos,$conexion);
		if($registro){
				echo "Pago registrado con exito" ;?><br/><script> alert ("Pago Realizado con exito")</script><?php 
		 	if($_POST['monto']){
						include "pagos/p_buscar_recibo_cedula.php";
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