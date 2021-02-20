<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>Buscar</title>
</head>


<body>
<font id="titulo">Listado Básico</font>
<br />
<br />

<form id="form1" name="form1" method="post" action="">

<table width="700" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="200">Instituto: </td>
    <td width="200"><font id="texto">IBM</font> <input name="instituto" type="hidden" value="IBM" /></td>
    <td width="300"><input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
  </tr>
  <tr>
    <td width="200">Sede o Estension: </td>
    <td width="200">
    <select name="extension">
        <option value="Sede">Sede</option>
         <?php 
			error_reporting(0);
			include("../conectar.php");
			$sql="SELECT * FROM extension";
	 		$result = mysql_query ($sql,$conexion);
			while($row=mysql_fetch_array($result))
			{
					if ($row_edi[nombre_legal]==$row[nombre_legal]){
					 		echo ("<option value=".$row[cod]."select>".$row[nombre_abreviado]."\n");
					}else{
				 			echo ("<option value=".$row[cod].">".$row[nombre_abreviado]."\n");
	
					 		}
			}mysql_close($conexion)			
			?>

    </select>
    
    </td>
    <td width="300"></td>
  </tr>
  <tr>
    <td width="200">Curso:</td>
    <td width="200"> <select name="curso" id="curso">
          		<option value=""></option>
        		<option value="Basico">Básico</option>
                <option value="Ministerial">Ministerial</option>
                <option value="Licenciatura">Licenciatura</option>
   		  </select></td>
    <td width="300"></td>
  </tr>
    <tr>
    <td width="200">Modalidad:</td>
    <td width="200"> <select name="modalidad" id="modalidad">
          		<option value=""></option>
        		<option value="Regular">Regular</option>
                <option value="Nocturno">Nocturno</option>
       			<option value="Sabatino">Sabatino</option>
                <option value="Dominical">Dominical</option>
                <option value="Intensivo">Intensivo</option>
                <option value="Aula">Aula</option>
   		  </select></td>
    <td width="300"></td>
  </tr> 
    <tr>
    <td width="200">Nivel:</td>
    <td width="200"><select name="nivel" id="nivel">
          		<option value=""></option>
        		<option value="1">1</option>
                <option value="2">2</option>
       			<option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
       			<option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
   		  </select></td>
    <td width="300"></td>
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
if($_POST['nivel']){
	include"../conectar.php";
	$sql="select * from estudiante where nivel='$_POST[nivel]' AND modalidad='$_POST[modalidad]' AND curso='$_POST[curso]' AND extension='$_POST[extension]' AND instituto='$_POST[instituto]' AND estatus='$_POST[estatus]' ";
	$consulta=mysql_query($sql,$conexion);
	$n=0;
	?>

<?php
     if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{

?>	

Listado del <?php echo $_POST[instituto] ?> <?php echo $_POST[extension] ?> <?php echo $_POST[modalidad] ?> <?php echo $_POST[curso] ?> <?php echo $_POST[nivel] ?> <?php echo $_POST[estatus] ?>

	<form id="form2" name="form2" method="post" action="imprimir/listado_ibm.php">
    	<input name="instituto" id="instituto" type="hidden" value="<?php echo $instituto ?>"/>
        <input name="extension" id="extension" type="hidden" value="<?php echo $extension ?>"/>
        <input name="modalidad" id="modalidad" type="hidden" value="<?php echo $modalidad ?>"/>
        <input name="curso" id="curso" type="hidden" value="<?php echo $curso ?>"/>
        <input name="nivel" id="nivel" type="hidden" value="<?php echo $nivel ?>"/>
        <input name="estatus" id="estatus" type="hidden" value="<?php echo $estatus ?>"/>
        <input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/>
    </form> 
    
<?php 
	}
}mysql_close($conexion);
?>





<?php
error_reporting(0); 
if($_POST['nivel']){
	include"../conectar.php";
	$sql="select * from estudiante where nivel='$_POST[nivel]' AND modalidad='$_POST[modalidad]' AND curso='$_POST[curso]' AND extension='$_POST[extension]' AND instituto='$_POST[instituto]' AND estatus='$_POST[estatus]' ";
	$consulta=mysql_query($sql,$conexion);
	$n=0;
?>

<font id="texto_p">
<br/>


<table width="730" border="0" cellspacing="5" cellpadding="0" >
  <tr align="center" bgcolor="#CCCCCC" >
    <td width="50">N°</td>
   	<td width="70">cedula:</td>
    <td width="120">Apellido:</td>
	<td width="120">Nombres:</td>
    <td width="300">Observación:</td>
    
  </tr>
<?php
    while(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{

?>
<tr>
    <td align="center"><?php echo $n=($n+1)  ?> </td>
   	<td align="center"><?php echo $cedula?></td>
    <td align="left"><?php echo $apellido_1?> <?php echo $apellido_2?></td>
	<td align="left"><?php echo $nombre_1?> <?php echo $nombre_2?></td>
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