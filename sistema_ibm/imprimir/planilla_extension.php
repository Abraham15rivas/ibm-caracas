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
<br />
<font id="imprimir_titulo">Planilla de Registro de Extensión</font>
<table id="table_c" border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td valign="top" align="center">

<?php
error_reporting(0); 
	if($_POST['cod']){
		include"../../conectar.php";
		$sql="select * from extension where cod='$_POST[cod]'";
		$consulta=mysql_query($sql,$conexion);
					if(list($id_extension,$extension,$cod,$letra_rif,$rif,$nombre_legal,$nombre_abreviado,$telefono,$celular,$correo,$pagina_web,$estado,$ciudad,$direccion,$fecha_fundacion,$distrito,$director,$cedula,$celular_director,$estatus,$observaciones)=mysql_fetch_array($consulta))	
					{ ?>


<table width="700" border="1" cellspacing="2" cellpadding="0">
  <tr>
    <th width="150" colspan="5" valign="top" align="right">Codigo: <u><?php echo $cod ?></u> </th>
    
  </tr>	
  <tr>
    <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">DATOS BASICO:</font></th>
    
  </tr>
  <tr>
    <td width="150" valign="top"> <font id="imprimir_texto">RIF:</font></td>
    <td width="200"><?php echo $letra_rif ?>-<?php echo $rif ?></td>
    <td scope="row" width="150"><font id="imprimir_texto">Estatus:</font> </td>
    <td width="200"><?php echo $estatus ?></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Nombre Completo:</font></td>
    <td colspan="3"><?php echo $nombre_legal ?> <?php echo $apellido_2 ?></td>
  </tr>
    <tr>
  	<td><font id="imprimir_texto">Nombre Abreviación:</font></td>
    <td colspan="3"><?php echo $nombre_abreviado ?> </td>
  </tr>
  <tr>
    <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">DATOS DE UBICACIÓN</font></th>
    
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Telefonos:</font></td>
    <td><?php echo $telefono ?></td>
	<td><font id="imprimir_texto">Celular:</font></td>
    <td><?php echo $celular ?></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Correo Electronico:</font></td>
    <td><?php echo $correo ?></td>
	<td><font id="imprimir_texto">Pagina Web:</font></td>
    <td><?php echo $pagina_web ?></td>
  </tr>
  <tr>
	<td><font id="imprimir_texto">Estado:</font></td>
    <td><?php echo $estado ?></td>
  	<td><font id="imprimir_texto">Cuidad:</font></td>
    <td><?php echo $ciudad ?></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Dirección:</font></td>
    <td colspan="3"><?php echo $direccion ?></td>
  </tr>
  <tr>
    <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">DATOS DISTRITALES:</font></th>
    
  </tr>
    <tr>
  	<td><font id="imprimir_texto">Fecha de Fundación:</font></td>
    <td><?php echo $fecha_fundacion ?></td>
	<td><font id="imprimir_texto">Distrito:</font></td>
    <td><?php echo $distrito ?></td>
  </tr>
    <tr>
  	<td><font id="imprimir_texto">Pastor Asesor:</font></td>
    <td><?php echo $pastor ?></td>
	<td><font id="imprimir_texto">Celular del Asesor:</font></td>
    <td><?php echo $celular_pastor ?></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Observaciones:</font></td>
    <td colspan="3"><?php echo $observaciones ?></td>
  </tr>
  <tr>
    <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">DIRECTIVA</font></th>
    
  </tr>
    <tr>
	<td><font id="imprimir_texto">Coordinador:</font></td>
    <td></td>
  	<td><font id="imprimir_texto">Teléfono:</font></td>
    <td></td>
  </tr>
  <tr>
	<td><font id="imprimir_texto">Sub-Coordinador:</font></td>
    <td></td>
  	<td><font id="imprimir_texto">Teléfono:</font></td>
    <td></td>
  </tr>
  <tr>
	<td><font id="imprimir_texto">Secretario:</font></td>
    <td></td>
  	<td><font id="imprimir_texto">Teléfono:</font></td>
    <td></td>
  </tr>
  <tr>
	<td><font id="imprimir_texto">Administrador:</font></td>
    <td></td>
  	<td><font id="imprimir_texto">Teléfono:</font></td>
    <td></td>
  </tr>

</table>


<?php }
}?>

 	</td>
  </tr>
</table>
</center>
</body>
</html>

<?php include ('pie_imprimir.php')?>