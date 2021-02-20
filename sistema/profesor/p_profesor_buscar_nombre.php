<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Buscar Profesor Por Nombre</font>
<br/>
<br/>

<form id="form1" name="form1" method="post" action="">
 <table width="700" border="0" cellspacing="0" cellpadding="0">
 	<tr>
    <td width="15%" align="left"><font id="sub_titulo">Nombre:</font> </td>
    <td width="15%" align="left" scope="col"><label for="nombre" ></label>
       <input name="nombre" type="text" id="nombre" placeholder="Nombre" size="10" maxlength="10"/></td>
    <td width="70%"  align="left" scope="col">
   		 <input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
 	 </tr>
 </table>
<br/>
<br/>
 
</form>


<?php
error_reporting(0); 
if($_POST['nombre']){
	include"../conectar.php";
	$sql="select * from profesor where nombre_1='$_POST[nombre]'";
	$consulta=mysql_query($sql,$conexion);
	
	?>

	
<?php
	
	
    while(list($id_estudiante,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$fecha_de_nacimiento,$edad,$pais_de_nacimiento,$estado_de_nacimiento,$estado_civil,$pareja,$telefono,$celular,$correo,$estado,$ciudad,$direccion,$instituto,$grado_ministerial,$ministerio,$estatus,$nivel_academico,$zona,$iglesia,$pastor,$notas)=mysql_fetch_array($consulta))	
	{
?>
<form name="form2" method="post" action="imprimir/planilla_profesor.php">	
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr height="20">
    <td width="150"><font id="sub_titulo">Ministro:</font></td>
    <td width="200"></td>
    <td width="150">Ver planilla:</td>
    <td width="200">
    <input type="hidden" name="cedula" id="cedula" value="<?php echo $cedula ?>">
	<input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/></td>
  </tr>
   	<tr height="20">
    <td>Cedula:</td>
    <td><?php echo $cedula ?></td>
    <td></td>
    <td></td>
  </tr>
    <tr height="20">
    <td>Nombres</td>
    <td><?php echo $nombre_1 ?> <?php echo $nombre_2 ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr height="20">
    <td>Apellidos:</td>
    <td><?php echo $apellido_1 ?> <?php echo $apellido_2 ?></td>
    <td></td>
    <td></td>
  </tr>
    <tr height="20">
    <td>Celular:</td>
    <td><?php echo $celular ?></td>
    <td></td>
    <td></td>
  </tr>
</table>
</form>
<br/>
<br/>

<?php 
	}
	}mysql_close($conexion);


?>	