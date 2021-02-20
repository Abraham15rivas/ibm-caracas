<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>Buscar</title>
</head>


<body>
<font id="titulo">Recibos De Pagos Por Fecha </font>
<br/>
<br/>
<br/>

<form id="form1" name="form1" method="post" action="">
  <table width="700" border="0" cellspacing="0" cellpadding="0">
 	<tr>
    <td width="25%" align="left"><font id="sub_titulo">Fecha de Pago:</font></td>
    <td width="25%"  align="left" scope="col">
    	<label for="fecha_de_pago"></label>
        <input type="date" name="fecha_de_pago" id="fecha_de_pago"/></td>
    <td width="50%"  align="left" scope="col">
   		 <input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
 	 </tr>
</table>
</form>
<br/>
<br/>


<?php
error_reporting(0); 
if($_POST['fecha_de_pago']){
	include"../conectar.php";
	$sql="select * from pagos_ibm where fecha_de_pago='$_POST[fecha_de_pago]'";
	$consulta=mysql_query($sql,$conexion);
    
?>
 
<font id="texto_p">
<br/>
<table width="730" border="0" cellspacing="5" cellpadding="0" >
  <tr align="center" bgcolor="#CCCCCC" >
    <td width="50">Recibo:</td>
   	<td width="80">Cedula:</td>
	<td width="75">Modo:</td>
    <td width="75">Referencia:</td>
    <td width="60">Monto:</td>
    <td width="100">Concepto:</td>
    <td width="80">Curso:</td>
    <td width="50">Nivel:</td>
    <td width="150">Observación:</td>
    <td width="50">Imprimir:</td>
  </tr>
 
<?php while(list($id_pagos,$cedula,$instituto,$extension,$modalidad,$curso,$nivel,$concepto,$modo_de_pago,$referencia,$monto,$fecha_de_pago,$observaciones)=mysql_fetch_array($consulta ))	
{	
?>


  <tr>
    <td align="center">
        <form id="form2" name="form2" method="post" action="a_pago_ibm_buscar_recibo.php">
        <input name="id_pagos" id="id_pagos" type="hidden" value="<?php echo $id_pagos ?>" />
        <input type="submit" value="<?php echo $id_pagos?>" />
	    </form>
    </td>
   	<td align="center"><?php echo $cedula?></td>
	<td align="left"><?php echo $modo_de_pago?></td>
    <td align="left"><?php echo $referencia ?></td>
    <td align="right"><?php echo $monto ?></td>
    <td align="left"><?php echo $concepto ?></td>
    <td align="left"><?php echo $curso ?></td>
    <td align="center"><?php echo $nivel ?></td>
    <td align="left"><?php echo $observaciones ?></td>
    <td align="center">
    <form id="form2" name="form2" method="post" action="imprimir/planilla_pago_estudiante.php">
    	<input name="id_pagos" id="id_pagos" type="hidden" value="<?php echo $id_pagos ?>"/>
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>"/>
        <input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/>
    </form>    
    </td>
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

<?php
error_reporting(0); 
if($_POST['fecha_de_pago']){
	include"../conectar.php";
	$sql="select * from pagos_ibm where fecha_de_pago='$_POST[fecha_de_pago]'";
	$consulta=mysql_query($sql,$conexion);
if(list($id_pagos,$cedula,$instituto,$extension,$modalidad,$curso,$nivel,$concepto,$modo_de_pago,$referencia,$monto,$fecha_de_pago,$observaciones)=mysql_fetch_array($consulta ))	
{	
?>    


  

Reporte de la fecha: <?php echo date("d-m-Y",strtotime($fecha_de_pago))?>
	<form id="form2" name="form2" method="post" action="imprimir/pago_ibm_buscar_fecha.php">
    	<input name="fecha_de_pago" id="fecha_de_pago" type="hidden" value="<?php echo $fecha_de_pago ?>"/>
        <input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/>
    </form> 
    
 <?php 
}
			}mysql_close($conexion);
	
?>	   
<br />
<br />




<?php
include"../conectar.php";
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

<font id="texto_p">
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
    <td align="right">Total Recaudado:</td>
    <td align="right"><font size="4"><?php echo $total_neto=($t_ef+$t_dp+$t_tr+$t_ch+$t_db+$t_cr)?>.00</font></td>
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





</body>
</html>