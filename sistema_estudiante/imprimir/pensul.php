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
<font id="imprimir_titulo">Pensum de Educación</font>
<table id="table_c" border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td valign="top" align="center">
<?php
error_reporting(0); 
if($_POST['modalidad']){
	include"../../conectar.php";
	$sql="select * from materia where modalidad='$_POST[modalidad]'";
	$consulta=mysql_query($sql,$conexion);
	
	?>
<font id="imprimir_texto">
<table width="800" border="0" cellspacing="5" cellpadding="0" >
  <tr align="center" bgcolor="#CCCCCC" >
    <td width="50">Codigo:</td>
   	<td width="250">Materia:</td>
	<td width="100">Modalidad:</td>
    <td width="50">Nivel:</td>
    <td width="50">UC:</td>
    <td width="250">Observación:</td>
  </tr>
 </table>
</font>	
<?php
    while(list($id_materia,$codigo,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($consulta))	
	{
?>
<table width="800" border="0" cellspacing="5" cellpadding="0" >

  <tr>
    <td width="50" align="center"><?php echo $codigo ?></td>
	<td width="250" align="left"><?php echo $materia ?></td>
	<td width="100" align="left"><?php echo $modalidad ?></td>
    <td width="50" align="center"><?php echo $nivel ?></td>
    <td width="50" align="center"><?php echo $uc ?></td>
    <td width="250" align="left"><?php echo $observaciones ?></td>
    	
  </tr>
</table> 


<?php
	}
	}mysql_close($conexion);
	
?>	
<br/>
<br/>


 	</td>
  </tr>
</table>
</center>
</body>
</html>

<?php include ('pie_imprimir.php')?>