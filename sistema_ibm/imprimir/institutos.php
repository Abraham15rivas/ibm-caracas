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
error_reporting(0); 
include"../../conectar.php";
$sql="select * from instituto ";
$consulta=mysql_query($sql,$conexion);
?>
<br />
<font id="imprimir_titulo">Lista de Instituto</font>
<table id="table_c" border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td valign="top" align="center">

<font id="imprimir_texto_12">
<table width="800" border="0" cellspacing="2" cellpadding="0" >

  <tr align="center" bgcolor="#CCCCCC" >
    <td width="80">Cod</td>
    <td width="250">Instituto</td>
    <td width="100">Distrito</td>
    <td width="80">Teléfono</td>
    <td width="80">Celular</td>
    <td width="120">Director:</td>
  </tr>

<?php 
  	while(list($id_instituto,$cod,$letra_rif,$rif,$nombre_legal,$nombre_abreviado,$telefono,$celular,$correo,$pagina_web,$estado,$ciudad,$direccion,$fecha_fundacion,$distrito,$director,$cedula,$celular_director,$estatus,$observaciones)=mysql_fetch_array($consulta)){
		?>

  <tr>
    <td><?php echo $id_instituto?>-<?php echo $cod?></td>
    <td><?php echo $nombre_legal?></td>
    <td align="center"><?php echo $distrito?></td>
    <td align="center"><?php echo $telefono?></td>
    <td align="center"><?php echo $celular?></td>
    <td align="left"><?php echo $director?></td>
  </tr>
 <?php }?> 
</table> 
</font>

 	</td>
  </tr>
</table>
<br/>

</center>
</body>
</html>

<?php include ('pie_imprimir.php')?>