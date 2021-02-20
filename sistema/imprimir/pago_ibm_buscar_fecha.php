<?php include('encabezado_imprimir.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Boletin Notas</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />

</head>



<body>
<center>
<font id="imprimir_titulo">REPORTE DE RECIBO DE PAGOS POR FECHA <?php echo $_POST['fecha_de_pago']?> </font>
<hr width="800" />

<?php
error_reporting(0); 
if($_POST['fecha_de_pago']){
	include "../../conectar.php";
	$sql="select * from pagos_ibm where fecha_de_pago='$_POST[fecha_de_pago]'";
	$consulta=mysql_query($sql,$conexion);
    
?>
 
<font id="imprimir_pequeno">
<br/>
<table width="730" border="0" cellspacing="5" cellpadding="0" >
  <tr align="center" bgcolor="#CCCCCC" >
    <td width="50">Recibo:</td>
   	<td width="80">Fecha:</td>
    <td width="50">Cedula:</td>
	<td width="75">Modo:</td>
    <td width="75">Referencia:</td>
    <td width="60">Monto:</td>
    <td width="100">Concepto:</td>
    <td width="80">Curso:</td>
    <td width="50">Nivel:</td>
    <td width="150">Observación:</td>
  </tr>
 
<?php while(list($id_pagos,$cedula,$instituto,$extension,$modalidad,$curso,$nivel,$concepto,$modo_de_pago,$referencia,$monto,$fecha_de_pago,$observaciones)=mysql_fetch_array($consulta ))	
{	
?>


  <tr>
    <td align="center"><?php echo $id_pagos?></td>
   	<td align="center"><?php echo date("d-m-Y",strtotime($fecha_de_pago ))?></td>
    <td align="center"><?php echo $cedula ?></td>
	<td align="left"><?php echo $modo_de_pago?></td>
    <td align="left"><?php echo $referencia ?></td>
    <td align="right"><?php echo $monto ?></td>
    <td align="left"><?php echo $concepto ?></td>
    <td align="left"><?php echo $curso ?></td>
    <td align="center"><?php echo $nivel ?></td>
    <td align="left"><?php echo $observaciones ?></td>
    
  </tr>
<?php 
  }
   ?>

  </table> 
  </font>
<br />
<br />  
<?php 
	
			}mysql_close($conexion);
	
?>	


<br />
<br />




<?php
include "../../conectar.php";
if($_POST['fecha_de_pago']){
	$fecha="select *, SUM(monto) AS total from pagos_ibm  WHERE  fecha_de_pago='$_POST[fecha_de_pago]' AND `instituto`= 'IBM' AND  `modo_de_pago`= 'Efectivo' ORDER BY  fecha_de_pago ASC";
	$consulta1=mysql_query($fecha,$conexion);
	while(list($id_pagos,$cedula,$instituto,$extension,$modalidad,$curso,$nivel,$concepto,$modo_de_pago,$referencia,$monto,$fecha_de_pago,$observaciones,$t_ef)=mysql_fetch_array($consulta1))	
	{
	?>   
    
<?php
include"../conectar.php";
if($_POST['fecha_de_pago']){
	$fecha="select *, SUM(monto) AS total from pagos_ibm  WHERE fecha_de_pago='$_POST[fecha_de_pago]' AND `instituto`= 'IBM' AND `modo_de_pago`= 'Deposito' ORDER BY  fecha_de_pago ASC";
	$consulta1=mysql_query($fecha,$conexion);
	while(list($id_pagos,$cedula,$instituto,$extension,$modalidad,$curso,$nivel,$concepto,$modo_de_pago,$referencia,$monto,$fecha_de_pago,$observaciones,$t_dp)=mysql_fetch_array($consulta1))	
	{
	?> 
    
<?php
include"../conectar.php";
if($_POST['fecha_de_pago']){
	$fecha="select *, SUM(monto) AS total from pagos_ibm  WHERE  fecha_de_pago='$_POST[fecha_de_pago]' AND `instituto`= 'IBM' AND `modo_de_pago`= 'Transferencia' ORDER BY  fecha_de_pago ASC";
	$consulta1=mysql_query($fecha,$conexion);
	while(list($id_pagos,$cedula,$instituto,$extension,$modalidad,$curso,$nivel,$concepto,$modo_de_pago,$referencia,$monto,$fecha_de_pago,$observaciones,$t_tr)=mysql_fetch_array($consulta1))	
	{
	?> 
    
<?php
include"../conectar.php";
if($_POST['fecha_de_pago']){
	$fecha="select *, SUM(monto) AS total from pagos_ibm  WHERE  fecha_de_pago='$_POST[fecha_de_pago]' AND `instituto`= 'IBM' AND `modo_de_pago`= 'Cheque' ORDER BY  fecha_de_pago ASC";
	$consulta1=mysql_query($fecha,$conexion);
	while(list($id_pagos,$cedula,$instituto,$extension,$modalidad,$curso,$nivel,$concepto,$modo_de_pago,$referencia,$monto,$fecha_de_pago,$observaciones,$t_ch)=mysql_fetch_array($consulta1))	
	{
	?>  
<?php
include"../conectar.php";
if($_POST['fecha_de_pago']){
	$fecha="select *, SUM(monto) AS total from pagos_ibm  WHERE  fecha_de_pago='$_POST[fecha_de_pago]' AND `instituto`= 'IBM' AND `modo_de_pago`= 'Debito' ORDER BY  fecha_de_pago ASC";
	$consulta1=mysql_query($fecha,$conexion);
	while(list($id_pagos,$cedula,$instituto,$extension,$modalidad,$curso,$nivel,$concepto,$modo_de_pago,$referencia,$monto,$fecha_de_pago,$observaciones,$t_db)=mysql_fetch_array($consulta1))	
	{
	?> 
<?php
include"../conectar.php";
if($_POST['fecha_de_pago']){
	$fecha="select *, SUM(monto) AS total from pagos_ibm  WHERE  fecha_de_pago='$_POST[fecha_de_pago]' AND `instituto`= 'IBM' AND `modo_de_pago`= 'Credito' ORDER BY  fecha_de_pago ASC";
	$consulta1=mysql_query($fecha,$conexion);
	while(list($id_pagos,$cedula,$instituto,$extension,$modalidad,$curso,$nivel,$concepto,$modo_de_pago,$referencia,$monto,$fecha_de_pago,$observaciones,$t_cr)=mysql_fetch_array($consulta1))	
	{
	?>                   

<font id="#imprimir_texto">
<table width="280" border="1" cellspacing="1" cellpadding="5">
  <tr align="center" bgcolor="#CCCCCC" >
    <td width="100">Modo de Pago</td>
    <td width="100">Monto</td>
    
  </tr>
  <tr>
    <td align="left">Efectivo:</td>
    <td align="right"><?php echo $t_ef?></td>
  </tr>
      <tr>
    <td align="left">Deposito:</td>
    <td align="right"><?php echo $t_dp?></td>
  </tr>
 <tr>
    <td align="left">Transferencia:</td>
    <td align="right"><?php echo $t_tr?></td>
  </tr>
      <tr>
    <td align="left">Cheque:</td>
    <td align="right"><?php echo $t_ch?></td>
  </tr>
     <tr>
    <td align="left">Debito:</td>
    <td align="right"><?php echo $t_db?></td>
  </tr>
    <tr>
    <td align="left">Credito:</td>
    <td align="right"><?php echo $t_cr?></td>
  </tr>
  <tr>
    <td align="right"><strong>Total Recaudado:</strong></td>
    <td align="right"><strong><font size="4"><?php echo $total_neto=($t_ef+$t_dp+$t_tr+$t_ch+$t_db+$t_cr)?>.00</font></strong></td>
  </tr>
</table>
</font>    
    
 
     
   
 
<?php
	}
}
	}	
}
	}
}
	}
}
	}
}
	}
}mysql_close($conexion);	
?>	    






</center>
</body>
</html>
<?php include('pie_imprimir.php'); ?>