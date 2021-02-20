<?php include('encabezado_imprimir.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Notas Certificadas</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<center>
<font id="imprimir_titulo">CERTIFICACIÓN DE CALIFICACIONES</font>
<hr width="800" />

<?php
error_reporting(0); 
setlocale(LC_TIME, 'spanish');
if(isset($_POST["cedula"])){
	include "../../conectar.php";
	$sql="select * from estudiante where cedula='$_POST[cedula]'";
	$consulta=mysql_query($sql,$conexion);
	setlocale(LC_TIME, 'spanish');  
	if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$nivel_graduacion,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))
	

	{ 
		
		$sql="SELECT * FROM instituto";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_instituto,$cod,$letra_rif,$rif,$nombre_legal,$nombre_abreviado,$telefono,$celular,$correo,$pagina_web,$estado,$ciudad,$direccion,$fecha_fundacion,$distrito,$director,$cedula_d,$celular_director,$estatus,$observaciones)=mysql_fetch_array($result)){
					 if ($cod==$instituto){
	  				    
	?>

<table width="800"  border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td align="justify">
       <p>
      Quien Suscribe, Rev. <strong><?php echo($director)?></strong>, Titular de la cédula de identidad N° <strong><?php echo($cedula_d)?>,</strong> Director(a) del <?php echo($nombre_legal)?> y domicilio principal en la ciudad de <?php echo($ciudad)?>, <?php echo($estado)?>. Certifica:<br />
      
            1° Que en el <?php echo($nombre_legal)?> reposa el expediente de estudios del ciudadano(a) <strong><?php echo ($nombre_1) ?> <?php echo ($nombre_2) ?> <?php echo($apellido_1)?> <?php echo ($apellido_2)?></strong> Titular de la Cédula de Identidad: <strong><?php echo $l_cedula ?>-<?php echo $cedula ?></strong> egresó con fecha: <?php echo strftime("%#d de %B del %Y", strtotime($fecha_egreso ))?> con <strong><em>	<?php 
			$sql="SELECT * FROM nivel_graduacion";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_nivel_graduacion,$codigo,$nombre,$descripcion)=mysql_fetch_array($result)){
				if ($codigo==$nivel_graduacion){
					 echo strtoupper($nombre);
					  	
			  	}
		 	}
		?></em></strong><br />            
            2° Que en su expediente se encuentra un registro académico donde consta que cursó y aprobó todas las asignaturas que se especifica a continuación: 
      
      
            
            
            </td>
      </tr>
</table>
            
<font id="imprimir_texto_12">
<table width="800" border="1" cellspacing="0" cellpadding="0">
  <tr  bgcolor="#CCCCCC" scope="col" align="center">
  	<td width="50"><font size="2">Nivel</font></td>
    <td width="340"><font size="2">Nombres de la Asignaturas:</font></td>
    <td width="40"><font size="2">Notas</font></td>
    <td width="60"><font size="2">Porcentaje</font></td>
    <td width="50"><font size="2">UC.</font></td>
    <td width="80"><font size="2">Fecha</font></td>
    <td width="70"><font size="2">Curso</font></td>
    <td width="100"><font size="2">Inst.</font></td>
    
 </tr>
 
<!--PROGRAMACION NOTAS DEL BASICO -->  
  <?php
error_reporting(0); 
	include"../../conectar.php";
	$sql= "select * from notas where cedula='$_POST[cedula]' AND `curso` = 'Basico'  ";{
	$consulta=mysql_query($sql,$conexion);
$sucb=0;
$aplazado=14;
$nb=0;
$snotasb=0;
		 while(list($id_notas,$cedula,$instituto,$curso,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta)){
?>
    <tr>
    <td align="left">
    <?php $nb=($nb+1)?>
		<?php 
			$sql="SELECT * FROM materia  ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 
			  	}
		 	}
		?>
    <?php echo $codigo;?>    
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
    <td align="center"><?php echo $nota;?>
    					<?php $snotab=($snotab+$nota);?>
    </td>
    <td align="right"><?php echo (($nota*100)/20)?>%</td>
   
   <td width="50" align="center">
   	<?php 
			$sql="SELECT * FROM materia";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso_m,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $uc;
					  	if($result){
								$sucb=($uc+$sucb);
						}
			  	}
		 	}
		?>
   
   </td>
   <td align="center"><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td> 
   <td><?php echo $curso;?></td>    
   <td width="50" align="justify"><?php echo $instituto?></td>
   
  </tr>
  
  <?php }
  
   }?>
   
<!--PROGRAMACION NOTAS DEL MINISTERIAL -->  
  <?php
error_reporting(0); 
	include"../../conectar.php";
	$sql= "select * from notas where cedula='$_POST[cedula]' AND `curso` = 'Ministerial'  ";{
	$consulta=mysql_query($sql,$conexion);
$sucm=0;
$aplazado=14;
$nm=0;
$snotasm=0;
		 while(list($id_notas,$cedula,$instituto,$curso,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta)){
?>
    <tr>
    <td align="left">
    	<?php $nm=($nm+1)?>
		<?php 
			$sql="SELECT * FROM materia  ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					
			  	}
		 	}
		?>
        <?php echo $codigo;?> 
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
    <td align="center"><?php echo $nota;?>
    					<?php  $snotam=($snotam+$nota);?>
    
    </td>
    <td align="right"><?php echo (($nota*100)/20)?>%</td>
   <td width="50" align="center">
   	<?php 
			$sql="SELECT * FROM materia";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso_m,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $uc;
					  	if($result){
								$sucm=($uc+$sucm);
						}
			  	}
		 	}
		?>
   
   </td>
   <td align="center"><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td> 
   <td><?php echo $curso;?></td>    
   <td width="50" align="justify"><?php echo $instituto?></td>
   
  </tr>
  
  <?php }
  
   }?>   
  
  
<!--PROGRAMACION NOTAS DEL LICENCIATURA -->  
  <?php
error_reporting(0); 
	include"../../conectar.php";
	$sql= "select * from notas where cedula='$_POST[cedula]' AND `curso` = 'Licenciatura'  ";{
	$consulta=mysql_query($sql,$conexion);
$sucl=0;
$aplazado=14;
$nl=0;
$snotasl=0;
		 while(list($id_notas,$cedula,$instituto,$curso,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta)){
?>
    <tr>
    <td align="left">
    	<?php $nl=($nl+1)?>
		<?php 
			$sql="SELECT * FROM materia  ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 
			  	}
		 	}
		?>
        <?php echo $codigo;?> 
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
    <td align="center"><?php echo $nota;?>
    					<?php $snotal=($snotal+$nota);?>
    </td>
    <td align="right"><?php echo (($nota*100)/20)?>%</td>
   <td width="50" align="center">
   	<?php 
			$sql="SELECT * FROM materia";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso_m,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $uc;
					  	if($result){
								$sucl=($uc+$sucl);
						}
			  	}
		 	}
		?>
   
   </td>
   <td align="center"><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td> 
   <td><?php echo $curso;?></td>    
   <td width="50" align="justify"><?php echo $instituto?></td>
   
  </tr>
  
  <?php }
  
   }?>   
  
 <!--PROGRAMACION NOTAS DEL PENSUM VIEJO -->  
  <?php
error_reporting(0); 
	include"../../conectar.php";
	$sql= "select * from notas where cedula='$_POST[cedula]' AND `curso` = 'Pensum Viejo'  ";{
	$consulta=mysql_query($sql,$conexion);
$sucpv=0;
$aplazado=14;
$npv=0;
$snotaspv=0;
		 while(list($id_notas,$cedula,$instituto,$curso,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta)){
?>
    <tr>
    <td align="left">
    		<?php $npv=($npv+1)?>
			<?php 
			$sql="SELECT * FROM materia  ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 
			  	}
		 	}
		?>
        <?php echo $codigo;?> 
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
    <td align="center"><?php echo $nota;?>
    					<?php $snotapv=($snotapv+$nota);?>
    </td>
    <td align="right"><?php echo (($nota*100)/20)?>%</td>
   <td width="50" align="center">
   	<?php 
			$sql="SELECT * FROM materia";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso_m,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $uc;
					  	if($result){
								$sucpv=($uc+$sucpv);
						}
			  	}
		 	}
		?>
   
   </td>
   <td align="center"><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td> 
   <td><?php echo $curso;?></td>    
   <td width="50" align="justify"><?php echo $instituto?></td>
   
  </tr>
  
  <?php }
  
   }?>  

  
  
</table>
</font>
   
 <?php 
	$suct=0;
	$suct=($sucb+$sucm+$sucl+$sucpv);
	$snotat=0;
	$snotat=($snotab+$snotam+$snotal+$snotapv)/($nb+$nm+$nl+$npv);
	$psnotat=(($snotat*100)/20);
?>  

<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="justify">

	  				    
	
    3° Que la escala de calificación es del 1 al 20, y su mínima aprobatoria es de 14 Puntos y en porcentaje del 1 al 100 y la aprobación de 70 Porciento<br />
    4° Total de Unidad de créditos aprobadas <?php echo $suct;?><br />
    5° La media ponderada de sus calificaciones fue: <?php echo round($snotat,2) ?> y en porcentaje es 
	<?php echo  round($psnotat,2) ?>%<br />

    Esta Certificación de notas se expide  a solicitud de la parte interesada en la ciudad de  <?php echo($ciudad)?>,  a los <?php include("../Funciones/fecha.php")?> 
    </td>
  </tr>
  <tr>
    <td align="justify">
    <br /><br />
    <font id="imprimir_pequeno">Estudiante: <strong> <?php echo $apellido_1?> <?php echo $nombre_1 ?></strong> </font><br />
    </td>
  </tr>
</table>


<?php    }
		 	};?>

<?php
				
	}else{
		print"Dato no encontrado"; ?> <script> alert ("Datos no encontrados")</script>
<?php
			}mysql_close($conexion);
}
?>

</p>

</center>
</body>
</html>

<?php include('pie_imprimir.php'); ?>