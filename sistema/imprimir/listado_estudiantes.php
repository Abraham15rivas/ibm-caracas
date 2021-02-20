<?php include ("encabezado_imprimir.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="estilos.css" rel="stylesheet" type="text/css" />
<title>Documento sin título</title>
</head>

<body>
<center>


<?php
error_reporting(0); 
if($_POST['nivel']){
	include"../../conectar.php";
	$sql="select * from estudiante where instituto='$_POST[instituto]'  ";
	$consulta=mysql_query($sql,$conexion);
	$n=0;
	?>

<?php
	
     if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{

?>	

Listado del <?php echo $_POST[instituto] ?> <?php echo $_POST[extension] ?> <?php echo $_POST[modalidad] ?> <?php echo $_POST[curso] ?> <?php echo $_POST[nivel] ?> <?php echo $_POST[estatus] ?>


    
<?php 
	}
}mysql_close($conexion);
?>


<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
Instituto: <?php echo $_POST[instituto] ?> <br /> 
Sede: <?php echo $_POST[extension] ?><br />
Modalidad: <?php echo $_POST[modalidad] ?> <br />
Curso: <?php echo $_POST[curso] ?> <br />
Nivel: <?php echo $_POST[nivel] ?> <br />
Estatus: <?php echo $_POST[estatus] ?> <br />
Materia:____________________<br />
Profesor:___________________</td>
  </tr>
</table>




<?php
error_reporting(0); 
if($_POST['nivel']){
	include"../../conectar.php";
	$sql="select * from estudiante where nivel='$_POST[nivel]' AND modalidad='$_POST[modalidad]' AND curso='$_POST[curso]' AND extension='$_POST[extension]' AND instituto='$_POST[instituto]' AND estatus='$_POST[estatus]' ";
	$consulta=mysql_query($sql,$conexion);
	$n=0;
?>
  

<table width="800" border="1" align="center" cellspacing="0" cellpadding="0">
  <tr bgcolor="#CCCCCC">
    <td width="20" align="center">Cant.</td>
    <td width="60" height="65" align="center"><font size="4">Cedula</font></td>
    <td width="140" align="center"><font size="4">Apellido</font></td>
    <td width="140" align="center"><font size="4">Nombre</font></td>
    <td width="80" align="center"><font size="4">Telefono</font></td>
    <td width="20" align="center">&nbsp;</td>
    <td width="20" align="center">&nbsp;</td>
    <td width="20" align="center">&nbsp;</td>
    <td width="20" align="center">&nbsp;</td>
    <td width="20" align="center">&nbsp;</td>
    <td width="20" align="center">&nbsp;</td>
    <td width="20" align="center">&nbsp;</td>
    <td width="20" align="center">&nbsp;</td>
    <td width="20" align="center">&nbsp;</td>
    <td width="20" align="center">&nbsp;</td>
    <td width="20" align="center">&nbsp;</td>
    <td width="20" align="center">&nbsp;</td>
  </tr>
<?php
    while(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{

?>
			
       <tr>
       	 <td align="center"><?php echo $n=($n+1)  ?>   </td>
         <td align="right"><?php echo $cedula ?></td>
         <td><?php echo $apellido_1 ?></td>
         <td><?php echo $nombre_1 ?></td>
         <td><?php echo $telefono ?></td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
       </tr>
  <?php 
  
  }
  
   ?>
</table>




<?php


}mysql_close($conexion);

?>

<p>Observaciones:__________________________________________________________________________________<br />
        ______________________________________________________________________________________________<br />
        ______________________________________________________________________________________________<br />
        ______________________________________________________________________________________________<br />
        ______________________________________________________________________________________________
</p>
<p>
  <input type="submit" name="imprimir" id="imprimir" value="imprimir" onclick="print()"/>
</p>
</center>
</body>
</html>