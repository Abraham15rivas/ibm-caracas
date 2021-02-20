<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Buscar Estudiante Por Apellido</font>
<br/>
<br/>

<form id="form1" name="form1" method="post" action="">
 <table width="700" border="0" cellspacing="0" cellpadding="0">
 	<tr>
    <td width="15%" align="left"><font id="sub_titulo">Apellido:</font> </td>
    <td width="15%" align="left" scope="col"><label for="apellido" ></label>
       <input name="apellido" type="text" id="apellido" placeholder="Apellido" size="10" maxlength="10"/></td>
    <td width="70%"  align="left" scope="col">
   		 <input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
 	 </tr>
 </table>
<br/>
<br/>
 
</form>


<?php
error_reporting(0); 
if($_POST['apellido']){
	include"../conectar.php";
	$sql="select * from estudiante where apellido_1='$_POST[apellido]'";
	$consulta=mysql_query($sql,$conexion);
	
	?>
	
	
<?php
    while(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$nivel_graduacion,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{
?>

<font id="texto_p">
<table width="700" border="0" cellspacing="2" cellpadding="0">
  <tr>
  	<td width="120"><font id="sub_titulo">Estudiante:</font></td>
    <td width="200"></td>
    <td width="200" align="right" rowspan="9">
 
      <form id="form6" name="form6" method="post" action="imprimir/imprimir_inscripcion.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="ver_planilla" id="ver_planilla" value="Planilla De Inscripción"/>
      </form>
      
      <form id="form4" name="form4" method="post" action="imprimir/constancia_de_estudio_s.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="constancia_de_estudio_s" id="constancia_de_estudio_s" value="Constancia S" />
      </form>  
      
      <form id="form5" name="form5" method="post" action="imprimir/constancia_de_estudio_n.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="constancia_de_estudio_s" id="constancia_de_estudio_s" value="Constancia N" />
      </form> 
      
      <form id="form2" name="form2" method="post" action="imprimir/boletin_de_notas.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="boleta" id="boleta" value="Boleta" />
      </form> 
      
      <form id="form3" name="form3" method="post" action="imprimir/notas_certificadas.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="imprimir" id="imprimir" value="Certificación" />
      </form>
      
      <form id="form7" name="form7" method="post" action="imprimir/culminacion_de_estudios.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="culminacion_de_estudios" id="culminacion_de_estudios" value="Culminación" />
      </form> 
      
    </td>
  </tr>
  <tr>
    <td>Cedula:</td>
    <td><?php echo $cedula ?></td>
  </tr>
  <tr>
    <td>Nombres:</td>
    <td><?php echo $nombre_1 ?> <?php echo $nombre_2 ?></td>
  </tr>
  <tr>
    <td>Apellidos:</td>
    <td><?php echo $apellido_1 ?> <?php echo $apellido_2 ?></td>
  </tr>
  <tr>
    <td>Teléfono:</td>
    <td><?php echo $telefono ?></td>
  </tr>
  <tr>
    <td>Correo:</td>
    <td><?php echo $correo

 ?></td>
  </tr>
  <tr>
    <td>Modalidad:</td>
    <td><?php echo $modalidad

 ?></td>
  </tr>
  <tr>
    <td>Curso:</td>
    <td><?php echo $curso

 ?></td>
  </tr>
  <tr>
    <td>Nivel:</td>
    <td><?php echo $nivel


 ?></td>
  </tr>
</table>
</font>

<?php 
	}
	}mysql_close($conexion);

?>	