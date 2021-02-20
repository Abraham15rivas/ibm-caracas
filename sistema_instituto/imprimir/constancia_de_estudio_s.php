<?php include('encabezado_imprimir.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IBM</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>


<body>
<center>
<br />
<br />
<font id="imprimir_titulo">CONSTANCIA DE ESTUDIO</font>
<br />
<br />
<br />
<br />

<?php
error_reporting(0); 
if(isset($_POST["cedula"])){
	include "../../conectar.php";
	$sql="select * from estudiante where cedula='$_POST[cedula]'";
	$consulta=mysql_query($sql,$conexion);  
	if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$sede,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{
	?>

<table width="600"  height="500" border="0" cellspacing="5" cellpadding="0">

  <tr>
  	<td width="600" height="100" align="justify" valign="top">
    <p>
    Quien Suscribe, Director de esta Institución:  Rev. <strong>EDIS FLORES</strong>, C. I. <strong>5.266.685</strong> hace constar por medio de la presente que el ciudadano(a): <strong><?php echo strtoupper($nombre_1) ?> <?php echo strtoupper($nombre_2) ?> <?php echo strtoupper($apellido_1)?> <?php echo strtoupper($apellido_2)?></strong> Titular de la Cédula de Identidad: <strong><?php echo $cedula ?>, </strong> es alumno del <strong><?php echo $nivel ?> Nivel De Estudios <?php echo $curso?>, </strong> en un horario de 08:00AM a 05:00PM modalidas <?php echo $modalidad ?>.  </p>
      <br />
      <br />
      <br />
      <p>Constancia que se expide de la parte interesada en Caracas  a los  <?php include ("../Funciones/fecha.php")?></p>
      	<br />
      	<br />
        <br />
     <center>Atentamente,</center>	
    
    </td>
  </tr>  
</table>

<?php 
	}else{
		print"Dato no encontrado"; ?> <script> alert ("Datos no encontrados")</script>
<?php
			}mysql_close($conexion);
}
?>

</center>
</body>
</html>

<?php include('pie_imprimir.php'); ?>