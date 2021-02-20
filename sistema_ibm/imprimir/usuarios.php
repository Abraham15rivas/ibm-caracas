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
	$sql="select * from usuario";
	$consulta=mysql_query($sql,$conexion);
	
	?>
<br />
<font id="imprimir_titulo">Pensum de Educación</font>
<table id="table_c" border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td valign="top" align="center">

<font id="imprimir_texto_12">
<table width="800" border="0" cellspacing="2" cellpadding="0" >

  <tr align="center" bgcolor="#CCCCCC" >
    <td width="30">ID</td>
    <td width="60">Cedula</td>
    <td width="170">Nombre:</td>
    <td width="80">Usuario:</td>
    <td width="80">Tipo de Usuario:</td>
    <td width="50">Telefono:</td>
    <td width="70">Usuario:</td>
  </tr>

 <?php
    while(list($id_usuario,$cedula,$nombre,$apellido,$correo,$celular,$instituto,$usuario,$clave,$confimar_clave,$pregunta,$respuesta,$tipo_usuario)=mysql_fetch_array($consulta))	{
	
?>

  <tr>
    <td align="center"><?php echo $id_usuario?></td>
    <td align="right"><?php echo $cedula?></td>
    <td><?php echo $nombre?> <?php echo $apellido?></td>
    <td><?php echo $usuario?></td>
    <td><?php echo $tipo_usuario?></td>
    <td><?php echo $celular?></td>
    <td><?php echo $instituto?></td>
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