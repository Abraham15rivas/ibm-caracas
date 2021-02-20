<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>Buscar</title>
</head>


<body>
<font id="titulo">Listado MINEC</font>
<br />
<br />

<form id="form1" name="form1" method="post" action="">

<table width="900" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="900" align="left">Listado de estudiantes en General en el sistema de todos los institutos </td>    
  </tr>
  </table>
</form>
<br/>

<?php
error_reporting(0); 

	include"../conectar.php";
	$sql="select * from estudiante ";
	$consulta=mysql_query($sql,$conexion);
	$n=0;
	
	$r=mysql_query($sql);
	$rcount=mysql_num_rows($r);
	
	?>

<?php
     if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{

?>	

Listado del  Cantidad: <?php echo $rcount;?> 

	<form id="form2" name="form2" method="post" action="imprimir/listado_estudiantes.php">
    	<input name="instituto" id="instituto" type="hidden" value="<?php echo $instituto ?>"/>
        <input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/>
    </form> 
    
<?php 
	
}mysql_close($conexion);
?>





<?php
error_reporting(0); 

	include"../conectar.php";
	$sql="select * from estudiante ORDER BY cedula ASC  ";
	$consulta=mysql_query($sql,$conexion);
	$n=0;
	
	?>


<font id="texto_p">
<br/>


<table width="900" border="0" cellspacing="5" cellpadding="0" >
  <tr align="center" bgcolor="#CCCCCC" >
    <td width="50">N°</td>
   	<td width="70">cedula:</td>
    <td width="120">Apellido:</td>
	<td width="120">Nombres:</td>
    <td width="120">Estatus:</td>
    <td width="120">Instituto:</td>
    <td width="400">Observación:</td>
    
  </tr>
<?php
    while(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$nivel_graduacion,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{

?>
<tr>
    <td align="center"><?php echo $n=($n+1)  ?> </td>
   	<td align="center"><?php echo $cedula?></td>
    <td align="left"><?php echo $apellido_1?> <?php echo $apellido_2?></td>
	<td align="left"><?php echo $nombre_1?> <?php echo $nombre_2?></td>
    <td width="120"><?php echo $estatus?></td>
    <td align="left"><?php echo $instituto?></td>
    <td align="left"><?php echo $observaciones?></td>
   	
  </tr>
  
  
  <?php 
  
  }
  
   ?>
  </table> 
</font>


<?php




?>



</div>
</body>
</html>