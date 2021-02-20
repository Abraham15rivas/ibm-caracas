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
<?php
//error_reporting(0); 
if($_POST['area']){
	include"../../conectar.php";
	$sql="select * from materia where area='$_POST[area]'";
	$consulta=mysql_query($sql,$conexion);
	?>
<br />
<font id="imprimir_titulo">Pensum de Educación</font>
<table id="table_c" border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td valign="top" align="center">


<table width="800" border="0" cellspacing="5" cellpadding="0" >

  <tr align="center" bgcolor="#CCCCCC" >
  
    <td width="60"><font id="imprimir_texto">Codigo:</font></td>
   	<td width="300"><font id="imprimir_texto">Materia:</font></td>
	<td width="100"><font id="imprimir_texto">Curso:</font></td>
    <td width="50"><font id="imprimir_texto">Nivel:</font></td>
    <td width="50"><font id="imprimir_texto">UC:</font></td>
    <td width="250"><font id="imprimir_texto">Observación:</font></td>
  </tr>

<?php
    while(list($id_materia,$codigo,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($consulta))	
	{
?>

  <tr>
    <td align="left"><font id="imprimir_texto_12"><?php echo $codigo ?></font></td>
	<td align="left"><font id="imprimir_texto_12"><?php echo $materia ?></font></td>
	<td align="left"><font id="imprimir_texto_12"><?php echo $curso ?></font></td>
    <td align="center"><font id="imprimir_texto_12"><?php echo $nivel ?></font></td>
    <td align="center"><font id="imprimir_texto_12"><?php echo $uc ?></font></td>
    <td align="left"><font id="imprimir_texto_12"><?php echo $observaciones ?></font></td>
  </tr>
 <?php }?> 
</table> 


<?php
	}mysql_close($conexion);
	
?>	

 	</td>
  </tr>
</table>
<br/>

</center>
</body>
</html>

<?php include ('pie_imprimir.php')?>