<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Novedades Reportadas</font>
<br/>
<br/>
<?php
error_reporting(0); 

	include"../conectar.php";
	$sql="select * from novedades ORDER BY id_novedades DESC";
	$consulta=mysql_query($sql,$conexion);
	
	?>
    
    


<font id="texto_p">
<table width="700" border="0" cellspacing="5" cellpadding="0">
  <tr align="center" bgcolor="#CCCCCC">
    <td width="100">Novedad N°</td>
    <td width="100">Persona contacto:</td>
    <td width="50">Telefono:</td>
    <td width="50">Ubicacion:</td>
    <td width="250">Descricion de la Novedad:</td>
  </tr>
 <?php
    while(list($id_novedades,$cedula,$nombre_1,$apellido_1,$telefono,$correo,$instituto,$sede,$fecha,$titulo,$boton,$sub_boton,$descripcion)=mysql_fetch_array($consulta))	{
	
?>	  
  
  
  <tr valign="top">
    <td align="center"><?php echo $id_novedades?>/<?php echo date("d-m-Y",strtotime($fecha ))?></td>
    <td><?php echo $nombre_1?> <?php echo $apellido_1?></td>
    <td><?php echo $telefono?> <br/> <?php echo $correo?></td>
    <td><?php echo $boton?><br/><?php echo $sub_boton?></td>
    <td><font color="#000066" size="2"><?php echo $titulo?></font><br/><br/> <?php echo $descripcion?></td>
  </tr>
<?php }mysql_close($conexion);?>  
</table>
</font>



</body>
</html>
