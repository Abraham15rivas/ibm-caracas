<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Ver Niveles de Graduaciones aprobado por la MINEC</font>
<br/>
<br/>
<br/>
<br/>
<?php
error_reporting(0); 

	include"../conectar.php";
	$sql="select * from nivel_graduacion ORDER BY id_nivel_graduacion ASC";
	$consulta=mysql_query($sql,$conexion);
	
	?>
    
    

<font id="texto_p">
<table width="700" border="0" cellspacing="1" cellpadding="0">
  <tr align="center" bgcolor="#CCCCCC"  scope="col" >
    <td width="40">Reg</td>
    <td width="40">Codigo</td>
    <td width="220">Nombre</td>
    <td width="350">Descripción</td>
  </tr>
   <?php
    while(list($id_nivel_graduacion,$codigo,$nombre,$descripcion)=mysql_fetch_array($consulta))	{
	
?>	
<tr height="40">
    <td align="center"><?php echo $id_nivel_graduacion?></td>
    <td align="center" ><?php echo $codigo?></td>
    <td align="left" ><?php echo $nombre?></td>
    <td align="left" ><?php echo $descripcion?></td>
  </tr>
 
	<?php }mysql_close($conexion);?>
</table>
</font>

</body>
</html>
