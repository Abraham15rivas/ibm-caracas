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
<font id="imprimir_titulo">Planilla de Registro del Profesor</font>
<table id="table_c" border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td valign="top" align="center">

<?php
error_reporting(0); 
if($_POST['cedula']){
	include"../../conectar.php";
	$sql="select * from profesor where cedula='$_POST[cedula]'";
	$consulta=mysql_query($sql,$conexion);
	if(list($id_ministros,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$notas,$fecha_de_nacimiento,$edad,$pais_de_nacimiento,$estado_de_nacimiento,$estado_civil,$pareja,$telefono,$celular,$correo,$estado,$ciudad,$direccion,$instituto,$grado_ministerial,$ministerio,$estatus,$nivel_academico,$zona,$iglesia,$pastor,$notas)=mysql_fetch_array($consulta))	
	{
?>


<table width="700" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">DATOS BASICO:</font></th>
    
  </tr>
  <tr>
    <td width="150" valign="top"> <font id="imprimir_texto">C I:</font></td>
    <td width="200"><?php echo $cedula ?></td>
    <td scope="row" width="150"><font id="imprimir_texto">Estatus:</font></td>
    <td width="200"><?php echo $estatus ?></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Apellidos:</font></td>
    <td><?php echo $apellido_1 ?> <?php echo $apellido_2 ?></td>
    <td></td>
    <td></td>
  </tr>
    <tr>
  	<td><font id="imprimir_texto">Nombres:</font></td>
    <td><?php echo $nombre_1 ?> <?php echo $nombre_2 ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Fecha de Ingreso:</font></td>
    <td></td>
	<td><font id="imprimir_texto">Fecha de Egreso:</font></td>
    <td></td>
  </tr>
  <tr>
    <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">DATOS DE UBICACIÓN</font></th>
    
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Telefono Celular:</font></td>
    <td></td>
	<td><font id="imprimir_texto">Telefono Local</font></td>
    <td></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Correo Electronico:</font></td>
    <td></td>
	<td><font id="imprimir_texto"></font></td>
    <td></td>
  </tr>
  <tr>
	<td><font id="imprimir_texto">Estado:</font></td>
    <td></td>
  	<td><font id="imprimir_texto">Cuidad:</font></td>
    <td></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Dirección:</font></td>
    <td colspan="3"></td>
  </tr>

  <tr>
    <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">DATOS ECLESIASTICO</font></th>
    
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Distrito:</font></td>
    <td></td>
	<td><font id="imprimir_texto">Zona:</font></td>
    <td></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Iglesia:</font></td>
    <td></td>
	<td><font id="imprimir_texto"></font></td>
    <td></td>
  </tr>
  <tr>
	<td><font id="imprimir_texto">Pastor:</font></td>
    <td></td>
  	<td><font id="imprimir_texto">Telefono:</font></td>
    <td></td>
  </tr>
  <tr>
    <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">DATOS DEL INSTITUTO</font></th>
    
  </tr>
	<tr>
  	<td><font id="imprimir_texto">Instituto:</font></td>
    <td colspan="3"></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Director:</font></td>
    <td></td>
	<td><font id="imprimir_texto"></font></td>
    <td></td>
  </tr>
  <tr>
	<td><font id="imprimir_texto">Curso:</font></td>
    <td></td>
  	<td><font id="imprimir_texto">Nivel:</font></td>
    <td></td>
  </tr>
    <tr>
	<td><font id="imprimir_texto">Ministerio:</font></td>
    <td></td>
  	<td><font id="imprimir_texto">Profesion:</font></td>
    <td></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Observaciones:</font></td>
    <td colspan="3"><?php echo $notas ?></td>
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