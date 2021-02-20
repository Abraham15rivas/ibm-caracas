<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>IBM</title>


</head>
<body>
<font id="titulo">Registro Legal de la Iglesia</font>
<br/>
<br/>
<br/>

<?php
error_reporting(0); 
	include"../conectar.php";
	$sql="select * from registro_legal";
	$consulta=mysql_query($sql,$conexion);
	$row = mysql_fetch_array($sql,$conexion);
	?>
	
	
<?php
    if(list($id_registro,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$celular,$letra_rif,$rif,$nombre_legal,$nombre_abreviado,$logo,$telefono,$correo,$pagina_web,$estado,$ciudad,$direccion)=mysql_fetch_array($consulta))	
	{
?>
<table width="700" border="0" cellspacing="5" cellpadding="0">
<tr>
    <td colspan="2"><font id="sub_titulo">Registrado a nombre de:</font></td>

  <tr>
    <td width="350"><?php echo $apellido_1 ?> <?php echo $nombre_1 ?></td>
    <td width="350"></td>
  </tr>
   	<tr>
    <td><?php echo $cedula ?></td>
    <td></td>
  </tr>
    <tr>
    <td><?php echo $celular ?></td>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
  <td colspan="2"><font id="sub_titulo">Organización</font></td>
  </tr>
    <tr>
    <td><?php echo $nombre_legal ?></td>
    <td></td>
  </tr>
  <tr>
    <td><?php echo $nombre_abreviado ?></td>
    <td></td>
  </tr>
  <tr>
    <td><?php echo $letra_rif ?>-<?php echo $rif ?></td>
    <td></td>
  </tr> 
  <tr>
    <td></td>
    <td></td>
  </tr>
  <td colspan="2"><font id="sub_titulo">Datos de Ubicación:</font></td>
  </tr>
    <tr>
    <td>Telefonos: </td>
    <td><?php echo $telefono ?></td>
  </tr>
  <tr>
    <td>Correo: </td>
    <td><?php echo $correo ?></td>
  </tr>
  <tr>
    <td>Pagina Web: </td>
    <td><?php echo $pagina_web ?></td>
  </tr> 
    <tr>
    <td>Dirección: </td>
    <td><?php echo $direccion ?></td>
  </tr> 
      <tr>
    <td></td>
    <td><?php echo $estado ?> <?php echo $ciudad ?>, Venezuela</td>
  </tr> 
    <tr>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
  <td colspan="2">
  	<form id="form4" name="form4" method="post" action="a_registro_legal_actualizar.php">
    	<input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
		<input type="submit" name="actualizar" id="actualizar" value="Actualizar" />
    </form> 
  </td>
  </tr>

</table>


Logo: <?php echo '<img src="'.$row["logo"].'" width="100" height="100" >'?>
<?php
	}mysql_close($conexion);
?>	



</body>
</html>

