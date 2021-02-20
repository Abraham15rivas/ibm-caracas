<?php include('encabezado_imprimir.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Boletin Notas</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />

</head>



<body>
<center>
<font id="imprimir_titulo">BOLETÍN DE NOTAS</font>
<hr width="800" />



<?php
error_reporting(0); 
if(isset($_POST["cedula"])){
	include "../../conectar.php";
	$sql="select * from estudiante where cedula='$_POST[cedula]'";
	$consulta=mysql_query($sql,$conexion);  
	if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$nivel_graduacion,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{
	?>

<table width="800"  border="0" cellspacing="0" cellpadding="0">
    <tr height="30">
      <td colspan="3" align="center"><font id="imprimir_sub_titulo">Datos Del Estudiantes:</font></td>
    </tr>
    <tr>
      <td width="150"><strong>Cédula: </strong><?php echo $cedula ?></td>
      <td width="400" align="left"><strong>Estudiante: </strong><?php echo $nombre_1 ?> <?php echo $nombre_2 ?> <?php echo $apellido_1 ?> <?php echo $apellido_2 ?></td>
      <td width="150"><strong>Instituto:</strong><?php echo $extension ?></td>
    </tr>
    <tr>
      <td><strong>Estatus:</strong><strong> <?php echo $estatus ?></strong></td>
      <td align="left"><strong>Cursando:</strong><?php echo $nivel ?> Nivel  del <?php echo $curso ?> </td>
      <td align="left"><strong>Modalidad:</strong> <?php echo $modalidad ?></td>  
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
     <tr height="30">
      <td colspan="3" align="center"><font id="imprimir_sub_titulo">Calificaciones:</font></td>
    </tr>
</table>
<?php 
	}else{
		print"Dato no encontrado"; ?> <script> alert ("Datos no encontrados")</script>
<?php
			}mysql_close($conexion);
}
?>

<font id="imprimir_texto_12">
<table width="800" border="1" cellspacing="0" cellpadding="0">
  <tr  bgcolor="#CCCCCC" scope="col" align="center">
    <td width="40"><font size="2">Reg.</font></td>
    <td width="50"><font size="2">Nivel</font></td>
    <td width="350"><font size="2">Materia</font></td>
    <td width="40"><font size="2">Notas</font></td>
    <td width="60"><font size="2">Porcentaje</font></td>
    <td width="80"><font size="2">Fecha</font></td>
    <td width="90"><font size="2">Curso</font></td>
    <td width="60"><font size="2">Inst.</font></td>
    <td width="100"><font size="2">Observaciones</font></td>
  </tr>
 
<!--PROGRAMACION NOTAS DEL BASICO -->  
  <?php
error_reporting(0); 
	include"../../conectar.php";
	$sql= "select * from notas where cedula='$_POST[cedula]' AND `curso` = 'Basico'  ";{
	$consulta=mysql_query($sql,$conexion);
$sucb=0;
$aplazado=14;
		 while(list($id_notas,$cedula,$instituto,$curso,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta)){
?>
    <tr>
    <td align="center"><?php echo $id_notas ?></td>
    <td align="center">
		<?php 
			$sql="SELECT * FROM materia  ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $nivel;
			  	}
		 	}
		?>
    </td>
    <td align="left">
    	<?php 
			$sql="SELECT * FROM materia ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $materia;
				}
			}
		?>
    </td>
    <td align="center"><?php echo $nota;?></td>
    <td align="right"><?php echo (($nota*100)/20)?>%</td>
   <td align="right"><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td> 
   <td><?php echo $curso;?></td>    
   <td width="50" align="justify"><?php echo $instituto?></td>
   <td width="50" align="justify">
    <?php $ancho1=($nota*100/20)?>
        <img src="../imagenes/1.jpg" width="<?php print $ancho1;?>" height="10" />
   
   <?php if ($sql){
								         	if($aplazado>$nota) echo Aplazada;
							         	}
										echo $observaciones_notas;
									?>
    </td>
  </tr>
  
  <?php } }?>
  
  
<!--PROGRAMACION NOTAS DEL Ministerial -->  
  <?php
error_reporting(0); 
	include"../../conectar.php";
	$sql= "select * from notas where cedula='$_POST[cedula]' AND `curso` = 'Ministerial' ";{
	$consulta=mysql_query($sql,$conexion);
$sucb=0;
$aplazado=14;
		 while(list($id_notas,$cedula,$instituto,$curso,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta)){
?>
    <tr>
    <td align="center"><?php echo $id_notas ?></td>
    <td align="center">
		<?php 
			$sql="SELECT * FROM materia  ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $nivel;
			  	}
		 	}
		?>
    </td>
    <td align="left">
    	<?php 
			$sql="SELECT * FROM materia ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $materia;
				}
			}
		?>
    </td>
    <td align="center"><?php echo $nota;?></td>
    <td align="right"><?php echo (($nota*100)/20)?>%</td>
   <td align="right"><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td> 
   <td><?php echo $curso;?></td>    
   <td width="50" align="justify"><?php echo $instituto?></td>
   <td width="50" align="justify">
    <?php $ancho1=($nota*100/20)?>
        <img src="../imagenes/1.jpg" width="<?php print $ancho1;?>" height="10" />
   
   <?php if ($sql){
								         	if($aplazado>$nota) echo Aplazada;
							         	}
										echo $observaciones_notas;
									?>
    </td>
  </tr>
  
  <?php } }?>  

<!--PROGRAMACION NOTAS DEL LICENCIATURA -->  
  <?php
error_reporting(0); 
	include"../../conectar.php";
	$sql= "select * from notas where cedula='$_POST[cedula]' AND `curso` = 'Licenciatura'  ";{
	$consulta=mysql_query($sql,$conexion);
$sucb=0;
$aplazado=14;
		 while(list($id_notas,$cedula,$instituto,$curso,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta)){
?>
    <tr>
    <td align="center"><?php echo $id_notas ?></td>
    <td align="center">
		<?php 
			$sql="SELECT * FROM materia  ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $nivel;
			  	}
		 	}
		?>
    </td>
    <td align="left">
    	<?php 
			$sql="SELECT * FROM materia ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $materia;
				}
			}
		?>
    </td>
    <td align="center"><?php echo $nota;?></td>
    <td align="right"><?php echo (($nota*100)/20)?>%</td>
   <td align="right"><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td> 
   <td><?php echo $curso;?></td>    
   <td width="50" align="justify"><?php echo $instituto?></td>
   <td width="50" align="justify">
    <?php $ancho1=($nota*100/20)?>
        <img src="../imagenes/1.jpg" width="<?php print $ancho1;?>" height="10" />
   
   <?php if ($sql){
								         	if($aplazado>$nota) echo Aplazada;
							         	}
										echo $observaciones_notas;
									?>
    </td>
  </tr>
  
  <?php } }?>  

<!--PROGRAMACION NOTAS DEL PENSUM VIEJO -->  
  <?php
error_reporting(0); 
	include"../../conectar.php";
	$sql= "select * from notas where cedula='$_POST[cedula]' AND `curso` = 'Pensum Viejo'  ";{
	$consulta=mysql_query($sql,$conexion);
$sucb=0;
$aplazado=14;
		 while(list($id_notas,$cedula,$instituto,$curso,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta)){
?>
    <tr>
    <td align="center"><?php echo $id_notas ?></td>
    <td align="center">
		<?php 
			$sql="SELECT * FROM materia  ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $nivel;
			  	}
		 	}
		?>
    </td>
    <td align="left">
    	<?php 
			$sql="SELECT * FROM materia ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $materia;
				}
			}
		?>
    </td>
    <td align="center"><?php echo $nota;?></td>
    <td align="right"><?php echo (($nota*100)/20)?>%</td>
   <td align="right"><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td> 
   <td><?php echo $curso;?></td>    
   <td width="50" align="justify"><?php echo $instituto?></td>
   <td width="50" align="justify">
    <?php $ancho1=($nota*100/20)?>
        <img src="../imagenes/1.jpg" width="<?php print $ancho1;?>" height="10" />
   
   <?php if ($sql){
								         	if($aplazado>$nota) echo Aplazada;
							         	}
										echo $observaciones_notas;
									?>
    </td>
  </tr>
  
  <?php } }?>  
  
  
  
</table>
</font>






</center>
</body>
</html>
<?php include('pie_imprimir.php'); ?>