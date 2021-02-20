<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="../imagenes/logo.png"/>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<title>MINEC</title>
</head>

<body>
<center>
<table width="800" height="100" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="20%" align="center" valign="top">
    	<img src="../imagenes/ad.png" width="68" height="68" /><br />
        <font id="imprimir_pequeno">RIF.: J-00171452-9</font></td>
    <td width="60%" align="center" valign="top">
    	REPÚBLICA BOLIVARIANA DE VENEZUELA<br />
  		F.C.G. ASAMBLEAS DE DIOS DE VENEZUELA<br />
        MINISTERIO NACIONAL DE EDUCACION CRISTIANA<br />
<?php
error_reporting(0); 
if(isset($_POST["cedula"])){
	include "../../conectar.php";
	$sql="select * from estudiante where cedula='$_POST[cedula]'";
	$consulta=mysql_query($sql,$conexion);  
	
	if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{
		
			$sql="SELECT * FROM instituto";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_instituto,$cod,$letra_rif,$rif,$nombre_legal,$nombre_abreviado,$telefono,$celular,$correo,$pagina_web,$estado,$ciudad,$direccion,$fecha_fundacion,$distrito,$director,$cedula,$celular_director,$estatus,$observaciones)=mysql_fetch_array($result)){
					  if ($cod==$instituto){
							 echo strtoupper ($nombre_legal);
			         }
		 	}; 
	}else{
		print"Dato no encontrado"; ?> <script> alert ("Datos no encontrados")</script>

<?php
	}mysql_close($conexion);
}
?>
 <br />       
        
        
    <font id="imprimir_pequeno">
    	Dirección General de Justicia y Culto. N°90.133DG/520DF1-120<br />
    	REGISTRADO 1er CIRCUITO DEL MUNICIPIO<br />
        LIBERTADOR DEL DISTRITO CAPITAL<br />
        N° 58 FOLIO 122 PROTOCOLO 1	ero TOMO 8<Br />
    </font>
        
    </td>
    <td width="20%" align="center" valign="top"><img src="../imagenes/logo.png" width="74" height="68" /></td>
  </tr>
</table>
 <br />
 <br />
</center>
</body>
</html>