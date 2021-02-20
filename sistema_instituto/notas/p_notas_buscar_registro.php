<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>Pago</title>
</head>


<body  >
<font id="titulo">Buscar Registro de Notas</font><br /><br /><br/>

<form id="form1" name="form1" method="post" action="">
 <table width="700" border="0" cellspacing="0" cellpadding="0">
 	<tr>
    <td width="15%" align="left"><font id="sub_titulo">Registro:</font> </td>
    <td width="15%" align="left" scope="col"><label for="registro" ></label>
       <input name="registro" type="text" id="registro" placeholder="Registro" size="10" maxlength="10"/></td>
    <td width="70%"  align="left" scope="col">
   		 <input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
 	 </tr>
 </table>
</form>
<br/>
<br/>


<?php
error_reporting(0); 
if($_POST['registro']){
	include"../conectar.php";
	$sql="select * from notas where id_notas='$_POST[registro]'";
	$consulta=mysql_query($sql,$conexion);
	$aplazado=14;
	?>
<?php
    if(list($id_notas,$cedula,$instituto,$curso,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta))	
	{
?>


<font id="texto_p">
<table width="700" border="0" cellspacing="2" cellpadding="0">
  <tr>
  	<td colspan="2"><font id="sub_titulo">Registro de Materia:</font></td>
    
    </td>
  </tr>
  <tr>
    <td width="50">Codigo:</td>
    <td width="200"><?php echo $id_notas ?></td>
  </tr>
  <tr>
    <td>Cedula:</td>
    <td><?php echo $cedula ?></td>
  </tr>
  <tr>
    <td>Instituto:</td>
    <td><?php echo $instituto ?></td>
  </tr>
  <tr>
    <td>Curso:</td>
    <td><?php echo $curso?></td>
  </tr>
  <tr>
    <td>Codigo:</td>
    <td><?php echo $codigo?></td>
  </tr>
    <tr>
    <td>Materia:</td>
    <td><?php 
			$sql="SELECT * FROM materia ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso_materia,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $materia;
				}
			}
		?></td>
  </tr>
  <tr>
    <td>Codigo unico:</td>
    <td> <?php echo $cedula_codigo ?></td>
  </tr>
  <tr>
    <td>Nota:</td>
    <td><?php echo $nota?> <?php if ($sql){
								         	if($aplazado>$nota) echo Aplazada;
							         	}
									?></td>
  </tr>
  <tr>
    <td>Fecha de  Carga:</td>
    <td><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td>
  </tr>
  <tr>
    <td>Observaciones:</td>
    <td><?php echo $observaciones_notas?></td>
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

<br />
<br />
<br />

</body>
</html>