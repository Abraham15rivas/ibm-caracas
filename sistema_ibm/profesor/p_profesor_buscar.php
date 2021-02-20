<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Buscar Profesor</font>
<br/>
<br/>
<br/>

<form id="form1" name="form1" method="post" action="">
 <table width="700" border="0" cellspacing="0" cellpadding="0">
 	<tr>
    <td width="15%" align="left"><font id="sub_titulo">Cedula:</font> </td>
    <td width="15%" align="left" scope="col"><label for="cedula" ></label>
       <input name="cedula" type="text" id="cedula" placeholder="Cedula" size="8" maxlength="8"/></td>
    <td width="70%"  align="left" scope="col">
   		 <input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
 	 </tr>
 </table>
<br/>
<br/>
 
</form>


<?php
error_reporting(0); 
if($_POST['cedula']){
	include"../conectar.php";
	$sql="select * from profesor where cedula='$_POST[cedula]'";
	$consulta=mysql_query($sql,$conexion);
	
	?>
<form name="form2" method="post" action="imprimir/planilla_profesor.php">	
	
<?php
    if(list($id_ministros,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$notas,$fecha_de_nacimiento,$edad,$pais_de_nacimiento,$estado_de_nacimiento,$estado_civil,$pareja,$telefono,$celular,$correo,$estado,$ciudad,$direccion,$instituto,$grado_ministerial,$ministerio,$estatus,$nivel_academico,$zona,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{
?>

<font id="texto_p">
<table width="700" border="0" cellspacing="2" cellpadding="0">
  <tr>
  	<td width="120"><font id="sub_titulo">Profesor:</font></td>
    <td width="200"></td>
    <td width="200" align="right" rowspan="9">
 
      <form id="form6" name="form6" method="post" action="imprimir/planilla_profesor.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="ver_planilla" id="ver_planilla" value="Planilla De Registro"/>
      </form>
      
      <form id="form4" name="form4" method="post" action="imprimir/constancia_de_trabajo.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="constancia_de_trabajo" id="constancia_de_trabajo" value="Constancia de Trabajo" />
      </form> <font color="#FF0000" size="-2">ojo con la constacia de trabajo</font>       
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
    <td><?php echo $correo?></td>
  </tr>
  <tr>
    <td>Instituto:</td>
    <td> <?php echo $instituto ?></td>
  </tr>
  <tr>
    <td>Modalidad:</td>
    <td><?php echo $modalidad?></td>
  </tr>
  <tr>
    <td>Curso:</td>
    <td><?php echo $curso?></td>
  </tr>
  <tr>
    <td>Nivel:</td>
    <td><?php echo $nivel


 ?></td>
  </tr>
</table>
</font>

<?php 
	}else{
		print"Dato no encontrado"; ?> <script> alert ("Datos no encontrados")</script>
<?php
	}mysql_close($conexion);
	}
?>	

<br/>
<br/>
</body>
</html>
