<?php include ('encabezado_imprimir.php')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="estilos.css" rel="stylesheet" type="text/css" />
<title>Documento sin título</title>
</head>

<body>
<center>
<font id="imprimir_titulo">Pago del Estudiante</font>

<table id="table_c_pagos" border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td valign="top" align="center">
 <?php
//error_reporting(0); 
include"../../conectar.php";	
		if($_POST['cedula']){
		$sql="select * from estudiante where cedula='$_POST[cedula]'";
		$consulta=mysql_query($sql,$conexion);
			if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta)){ 
				
		if($_POST['id_pagos']){
		$sql="select * from pagos_ibm where id_pagos='$_POST[id_pagos]'";
		$consulta=mysql_query($sql,$conexion);
    				if(list($id_pagos,$cedula,$instituto,$extension,$modalidad,$curso,$nivel,$concepto,$modo_de_pago,$referencia,$monto,$fecha_de_pago,$observaciones)=mysql_fetch_array($consulta)){ 
?>  
   
<table width="700" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="150" align="left">Fecha: <strong><?php echo date("d-m-Y",strtotime($fecha_de_pago ))?></strong></td>
    <td width="200"></td>
    <td width="150"></td>
    <td width="200" align="right">Recibo N°:<strong> <?php echo $id_pagos?></strong></td>
  </tr>
  <tr>
    <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">DATOS:</font></th>
  </tr>
  <tr>
    <td><font id="imprimir_texto">Cedula:</font></td>
    <td><?php echo $cedula?></td>
    <td></td>
    <td></td>
  </tr>
    <tr>
    <td><font id="imprimir_texto">Estudiante:</font></td>
    <td><?php echo $nombre_1?> <?php echo $apellido_1?></td>
    <td><font id="imprimir_texto">Teléfono:</font></td>
    <td><?php echo $telefono?> </td>
  </tr>
  <tr>
    <td><font id="imprimir_texto">Dirección:</font></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">DATOS DE PAGO:</font></th>
  </tr>
  <tr>
   <td><font id="imprimir_texto">Concepto:</font></td>
    <td> <?php echo $concepto?></td>
    <td align="left"><font id="imprimir_pequeno">Forma de pago:</font><?php echo $modo_de_pago?></td>
    <td align="right"><font id="imprimir_pequeno">referencia:</font><?php echo $referencia?></td>
  </tr>
  <tr>
    <td><font id="imprimir_texto">Nivel:</font></td>
    <td> <?php echo $nivel?> - <?php echo $curso?></td>
    <td></td>
    <td></td>
  </tr>
    <tr>
    <td colspan="2"><font id="imprimir_texto">Observaciones:</font> <?php echo $observaciones?></td>
    <td align="right"><font id="imprimir_texto">Monto:</font></td>
    <td align="right"><?php echo $monto?>Bs.</td>
  </tr>
</table>
		
		<?php
					}
				}
			}
	}mysql_close($conexion);
	
?>	

	</td>
  </tr>
</table>  
</center>
</body>
</html>
<?php include ('pie_imprimir_media_carta.php')?>