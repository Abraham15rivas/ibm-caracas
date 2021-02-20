<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>Buscar</title>
</head>


<body>
<font id="titulo">Recibos De Pagos Por Fecha</font>
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


<font id="texto_p">
<table width="700" border="0" cellspacing="5" cellpadding="0" >
  <tr align="center" bgcolor="#CCCCCC" >
    <td width="50">Recibo:</td>
   	<td width="100">Fecha:</td>
	<td width="100">Modo:</td>
    <td width="75">Referencia:</td>
    <td width="75">Monto:</td>
    <td width="100">Concepto:</td>
    <td width="150">Observación:</td>
    <td width="50">Imprimir:</td>
  </tr>
 </table>
 
<?php
error_reporting(0); 
if($_POST['fecha_de_pago']){
	include"../conectar.php";
	$sql="select * from pagos where fecha_de_pago='$_POST[fecha_de_pago]'";
	$consulta=mysql_query($sql,$conexion);
    while(list($id_pagos,$cedula,$fecha_de_pago,$modo_de_pago,$referencia,$monto,$concepto,$observaciones)=mysql_fetch_array($consulta))	
	{
?>
 
<form id="form2" name="form2" method="post" action="imprimir/planilla_pago_estudiante.php">
<table width="700" border="0" cellspacing="5" cellpadding="0" >

  <tr>
    <td width="50" align="center"><?php echo $id_pagos ?></td>
   	<td width="100" align="center"><?php echo date("d-m-Y",strtotime($fecha_de_pago ))?></td>
	<td width="100" align="left"><?php echo $modo_de_pago?></td>
    <td width="75" align="left"><?php echo $referencia ?></td>
    <td width="75" align="right"><?php echo $monto ?></td>
    <td width="100" align="right"><?php echo $concepto ?></td>
    <td width="150" align="left"><?php echo $observaciones ?></td>
    <td width="50" align="center">
    	<input name="id_pagos" id="id_pagos" type="hidden" value="<?php echo $id_pagos ?>"/>
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>"/>
        <input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/>
    </td>
  </tr>
</table>  
</form>  


<?php 
	}
			}mysql_close($conexion);
	
?>	
</font>
</div>
</body>
</html>