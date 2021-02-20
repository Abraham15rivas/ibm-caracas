<?php include('encabezado_imprimir.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Boletin Notas</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />

</head>



<body>
<?php
error_reporting(0); 
if(isset($_POST["cedula"])){
	include "../../conectar.php";
	$sql="select * from estudiante where cedula='$_POST[cedula]'";
	$consulta=mysql_query($sql,$conexion);  
	if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$nivel_graduacion,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{
		$sql="SELECT * FROM instituto";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_instituto,$cod,$letra_rif,$rif,$nombre_legal,$nombre_abreviado,$telefono,$celular,$correo,$pagina_web,$estado,$ciudad,$direccion,$fecha_fundacion,$distrito,$director,$cedula_d,$celular_director,$estatus,$observaciones)=mysql_fetch_array($result)){
					 if ($cod==$instituto){
	?>


<center>
<font id="imprimir_titulo">CULMINACIÓN DE <?php  $sql="SELECT * FROM nivel_graduacion";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_nivel_graduacion,$codigo,$nombre,$descripcion)=mysql_fetch_array($result)){
				if ($codigo==$nivel_graduacion){
				 echo strtoupper($nombre); 					  	
			  	}
		 	}?>
		</font>
<br />
<br />
<br />

<table width="600"  height="500" border="0" cellspacing="5" cellpadding="0">

  <tr>
  	<td width="600" height="100" align="justify" valign="top">
    <p>
    Quien Suscribe, Director del  <?php echo ($nombre_legal);?>: Rev. <strong><?php echo($director)?></strong>, C. I. <strong><?php echo($cedula_d)?></strong> hace constar por medio de la presente que el ciudadano(a): <strong><?php echo strtoupper($nombre_1) ?> <?php echo strtoupper($nombre_2) ?> <?php echo strtoupper($apellido_1)?> <?php echo strtoupper($apellido_2)?></strong> Titular de la Cédula de Identidad: <strong><?php echo $l_cedula ?>-<?php echo $cedula ?>, </strong> realizó estudios Básicos en Teología en esta casa de Estudio, cumpliendo con los requisitos exigidos. Siendo su Acto de Grado <?php echo date("d-m-Y",  strtotime($fecha_egreso ))?>. </p>
      <br />
      <br />
      <br />
      <p>Constancia que se expide de la parte interesada en <?php echo($ciudad);?>  a los  <?php include ("../Funciones/fecha.php")?></p>
      	<br />
      	<br />
        <br />
     <center>Atentamente,</center>
    
    </td>
  </tr>  
</table>




<?php 
		}
	}
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