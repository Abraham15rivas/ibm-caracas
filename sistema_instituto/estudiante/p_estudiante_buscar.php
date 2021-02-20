<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Buscar Estudiante</font>
<br/>
<br/>

<form id="form1" name="form1" method="post" action="">
 <table width="700" border="0" cellspacing="0" cellpadding="0">
 	<tr>
    <td width="15%" align="left"><font id="sub_titulo">Cedula:</font> </td>
    <td width="15%" align="left" scope="col"><label for="cedula" ></label>
       <input name="cedula" type="text" id="cedula" placeholder="Cedula" size="8" maxlength="8" tabindex="1"/></td>
    <td width="70%"  align="left" scope="col">
   		 <input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
 	 </tr>	
 </table>
</form>
<br/>
 
<?php
error_reporting(0); 
if($_POST['cedula']){
	include"../conectar.php";
	$sql="select * from estudiante where cedula='$_POST[cedula]'";
	$consulta=mysql_query($sql,$conexion);
	
	?>
<?php
    if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$nivel_graduacion,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{
?>

<font id="texto_p">
<table width="700" border="0" cellspacing="2" cellpadding="0">
  <tr>
  	<td width="120"><font id="sub_titulo">Estudiante:</font></td>
    <td width="200"></td>
    <td width="200" align="right" rowspan="9">
 		
      <form id="form6" name="form6" method="post" action="imprimir/planilla_estudiante.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="ver_planilla" id="ver_planilla" value="Planilla De Inscripción"/>
      </form>
      
      
      <form id="form2" name="form2" method="post" action="imprimir/boletin_de_notas.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="boleta" id="boleta" value="Boletin De Notas" />
      </form> 
      
      
      <form id="form3" name="form3" method="post" action="imprimir/certificacion_si_t.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="imprimir" id="imprimir" value="Certificación de Notas Culminadas" />
      </form>
      
      
      <form id="form3" name="form3" method="post" action="imprimir/certificacion_no_t.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="imprimir" id="imprimir" value="*Certificación de Notas No Culminadas" />
      </form>
      
      
      <form id="form4" name="form4" method="post" action="imprimir/constancia_de_estudio.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="constancia_de_estudio" id="constancia_de_estudio" value="Constancia de Estudios" />
      </form>  
      

      <form id="form7" name="form7" method="post" action="imprimir/culminacion_de_estudios.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="culminacion_de_estudios" id="culminacion_de_estudios" value="Culminación" />
      </form> 
      
            <form id="form8" name="form8" method="post" action="imprimir/solvencia_de_pago.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="solvencia_de_pago" id="solvencia_de_pago" value="Solvencia de Pago" />
      </form> 
      
      <form id="form9" name="form9" method="post" action="a_estudiante_buscar_actualizar.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="actualizar" id="actualizar" value="Actualizar" />
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
    <td><?php echo $correo?></td>
  </tr>
  <tr>
    <td>Instituto:</td>
    <td><?php echo $extension ?></td>
  </tr>
  <tr>
    <td>Modalidad:</td>
    <td><?php echo $modalidad?></td>
  </tr>
  <tr>
    <td>Curso:</td>
    <td><?php echo $curso?></td>
  </tr>
  <tr valign="top">
    <td>Nivel:</td>
    <td><?php echo $nivel


 ?></td>
 <td align="right">   
    <div><img src="../foto/<?php echo $cedula ?>.jpg" width="110" height="132"  style="border-radius: 20px; "/></div>
   
 </td>
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
</body>
</html>
