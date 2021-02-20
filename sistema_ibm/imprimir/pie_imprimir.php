<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="estilos.css" rel="stylesheet" type="text/css" />
<title>Documento sin título</title>
</head>

<body>
<center>
<table width="800" height="100" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="800" height="200" align="center">
    <font id="imprimir_pequeno">
    <strong><hr width="150" color="#000000"/></strong>
Rev.    
    
<?php
error_reporting(0); 
if(isset($_POST["cedula"])){
	include "../../conectar.php";
	$sql="select * from estudiante where cedula='$_POST[cedula]'";
	$consulta=mysql_query($sql,$conexion);  
	
	if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$sede,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{
		
			$sql="SELECT * FROM instituto";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_instituto,$cod,$letra_rif,$rif,$nombre_legal,$nombre_abreviado,$telefono,$celular,$correo,$pagina_web,$estado,$ciudad,$direccion,$fecha_fundacion,$distrito,$director,$cedula,$celular_director,$estatus,$observaciones)=mysql_fetch_array($result)){
					  if ($cod==$instituto){
							 echo($director);
			         }
		 	}; 
	}else{
		print"Dato no encontrado"; ?> <script> alert ("Datos no encontrados")</script>

<?php
	}mysql_close($conexion);
}
?>
 <br />          
  Director<br />  
  </font>  
    
    </td>
  <tr>
    <td width="800" align="left">
    <font id="imprimir_pequeno">
    Este documento no es válido sin la firma y el Sello de la Institución<br/>
    http://www.minec.com.ve
    </font>
    </td>
  </tr>
    <tr>
    <td width="800" align="center">
    <hr width="800"/>
    
    <font id="imprimir_pequeno">
    
    <?php
error_reporting(0); 
if(isset($_POST["cedula"])){
	include "../../conectar.php";
	$sql="select * from estudiante where cedula='$_POST[cedula]'";
	$consulta=mysql_query($sql,$conexion);  
	
	if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$sede,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{
		
			$sql="SELECT * FROM instituto";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_instituto,$cod,$letra_rif,$rif,$nombre_legal,$nombre_abreviado,$telefono,$celular,$correo,$pagina_web,$estado,$ciudad,$direccion,$fecha_fundacion,$distrito,$director,$cedula,$celular_director,$estatus,$observaciones)=mysql_fetch_array($result)){
					  if ($cod==$instituto){ ?>
							 
							 
							 
							 
							 
							Dirección: <?php echo($direccion);?>, <?php echo($ciudad);?> <?php echo($estado);?>.<br />
                            Teléfonos: <?php 
							echo($telefono );
							echo " / ";
							echo $celular ;?>
                             
                  <?php           
			         }
		 	}; 
	}else{
		print"Dato no encontrado"; ?> <script> alert ("Datos no encontrados")</script>

<?php
	}mysql_close($conexion);
}
?>
    </font>
    
    </td>
  </tr>
</table>
<br />
<br />



</center>
</body>
</html>