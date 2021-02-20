<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>IBM</title>


</head>
<body>
<font id="titulo">Buscar  Usuario</font>
<br/>
<br/>
<form id="form1" name="form1" method="post" action="">
 <table width="700" border="0" cellspacing="0" cellpadding="0">
 	<tr>
    <td width="15%" align="left"><font id="sub_titulo">Cedula:</font> </td>
    <td width="15%" align="left" scope="col"><label for="cedula" ></label>
       <input name="cedula" type="text" id="cedula" placeholder="Cedula" size="8" maxlength="8"/></td>
    <td width="70%"  align="left" scope="col">
   		 <input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
 	 </tr>
 </table>
</form>
<br/>
 
<?php
error_reporting(0); 
if($_POST['cedula']){
	include"../conectar.php";
	$sql="select * from usuario where cedula='$_POST[cedula]'";
	$consulta=mysql_query($sql,$conexion);
	
	?>
<?php
    if(list($id_usuario,$cedula,$nombre,$apellido,$correo,$celular,$instituto,$usuario,$clave,$confimar_clave,$pregunta,$respuesta,$tipo_usuario)=mysql_fetch_array($consulta))	
	{
?>

<font id="texto_p">
<table width="700" border="0" cellspacing="2" cellpadding="0">
  <tr>
  	<td width="120"><font id="sub_titulo">Estudiante:</font></td>
    <td width="200"></td>
    <td width="200" align="right" rowspan="9">
    </td>
  </tr>
  <tr>
    <td>Cedula:</td>
    <td><?php echo $cedula ?></td>
  </tr>
  <tr>
    <td>Nombre y Apellido:</td>
    <td><?php echo $nombre ?> <?php echo $apellido?></td>
  </tr>
  <tr>
    <td>Teléfono:</td>
    <td><?php echo $celular ?></td>
  </tr>
  <tr>
    <td>Correo:</td>
    <td><?php echo $correo?></td>
  </tr>
  <tr>
    <td>Instituto:</td>
    <td><?php echo $instituto?></td>
  </tr>
  <tr>
    <td>Usuario:</td>
    <td><?php echo $usuario?></td>
  </tr>
</table>
</font>
<br />
<br />


<?php 
	}else{
		print"Dato no encontrado"; ?> <script> alert ("Datos no encontrados")</script>

<?php }mysql_close($conexion);
}?>


</body>
</html>

