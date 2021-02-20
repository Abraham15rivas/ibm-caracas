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
    <td width="100" align="left">Instituto: </td>
    <td width="300" align="left"><select name="instituto">
        <option value=""></option>
         <?php 
			error_reporting(0);
			include("../conectar.php");
			$sql="SELECT * FROM instituto";
	 		$result = mysql_query ($sql,$conexion);
			while($row=mysql_fetch_array($result))
			{
					if ($row_edi[nombre_legal]==$row[nombre_legal]){
					 		echo ("<option value=".$row[cod]."select>".$row[nombre_abreviado]."\n");
					}else{
				 			echo ("<option value=".$row[cod].">".$row[nombre_legal]."\n");
	
					 		}
			}mysql_close($conexion)			
			?>

    </select></td>
    <td width="500"><input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
  </tr>
   <tr>
    <td width="200">Estatus:</td>
    <td width="200"><select name="estatus">
       <option value=""></option>
       <option value="Activo"> Activo</option>
       <option value="Retirado"> Retirado</option>
       <option value="Flotante"> Flotante</option>
       <option value="Suspendido"> Suspendido</option>
       <option value="A Graduar"> A Graduar</option>
       <option value="Graduado"> Graduado</option>
    </select></td>
    <td width="300"></td>
  </tr>

  </table>
</form>
<br/>

<?php
error_reporting(0); 
if($_POST['instituto']){
	include"../conectar.php";
	$sql="select * from estudiante where instituto='$_POST[instituto]' AND estatus='$_POST[estatus]'  ";
	$consulta=mysql_query($sql,$conexion);
	$n=0;
	
	$r=mysql_query($sql);
	$rcount=mysql_num_rows($r);
	
	?>

<?php
     if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{

?>	

Listado del <?php
				$sql="SELECT * FROM instituto";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_instituto,$cod,$letra_rif,$rif,$nombre_legal,$nombre_abreviado,$telefono,$celular,$correo,$pagina_web,$estado,$ciudad,$direccion,$fecha_fundacion,$distrito,$director,$cedula,$celular_director,$estatus,$observaciones)=mysql_fetch_array($result)){
					  if ($cod==$instituto){
							 echo strtoupper ($nombre_legal);
			         }
		 	}; 
			
			 
?>, Cantidad: <?php echo $rcount;?> 

	<form id="form2" name="form2" method="post" action="imprimir/listado_estudiantes.php">
    	<input name="instituto" id="instituto" type="hidden" value="<?php echo $instituto ?>"/>
        <input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/>
    </form> 
    
<?php 
	}
}mysql_close($conexion);
?>





<?php
error_reporting(0); 
if($_POST['instituto']){
	include"../conectar.php";
	$sql="select * from estudiante where instituto='$_POST[instituto]' AND estatus='$_POST[estatus]' ";
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
    <td width="500">Observación:</td>
    
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
    <td align="left"><?php echo $observaciones?></td>
   	
  </tr>
  
  
  <?php 
  
  }
  
   ?>
  </table> 
</font>


<?php


}mysql_close($conexion);

?>



</div>
</body>
</html>