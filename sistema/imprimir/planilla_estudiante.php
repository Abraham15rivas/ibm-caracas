<?php include('encabezado_imprimir.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hoja de Registro</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>


<body>
<center>
<font id="imprimir_titulo">PLANILLA DE INSCRIPCIÓN</font>
<hr width="700"/>
<?php
error_reporting(0); 
if(isset($_POST["cedula"])){
	include "../../conectar.php";
	$sql="select * from estudiante where cedula='$_POST[cedula]'";
	$consulta=mysql_query($sql,$conexion);  
	if(list($id_estudiante,$l_cedula,$cedula,$nombre_1,$nombre_2,$apellido_1,$apellido_2,$telefono,$correo,$instituto,$extension,$modalidad,$curso,$nivel,$estatus,$codigo_diploma,$fecha_nacimiento,$fecha_ingreso,$fecha_egreso,$nivel_graduacion,$observaciones,$carta_del_pastor,$diezmo_ofrenda,$planilla_de_inscripcion,$copia_de_cedula,$fotos_tipo_carnet,$copia_de_titulo,$certificacion_notas,$salud_mental,$sobre_de_manila,$iglesia,$pastor)=mysql_fetch_array($consulta))	
	{
	?>
<table width="700" border="0" cellspacing="2" cellpadding="0">
  <tr>
    <th width="150" colspan="5" valign="top" align="right">Registro: <u><?php echo $id_estudiante ?></u> </th>
    
  </tr>	
  <tr>
    <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">DATOS BASICO:</font></th>
    
  </tr>
  <tr>
    <td width="150" valign="top"> <font id="imprimir_texto">Cedula:</font></td>
    <td width="200"><?php echo $l_cedula ?>-<?php echo $cedula ?></td>
    <td scope="row" width="150"><font id="imprimir_texto">Estatus:</font> </td>
    <td width="200"><?php echo $estatus ?></strong></td>
  </tr>
  <tr>
    <td width="150" valign="top"> <font id="imprimir_texto">Fecha de Nacimiento:</font></td>
    <td width="200"><?php echo date("d-m-Y",  strtotime($fecha_nacimiento ))?></td>
    <td scope="row" width="150"><font id="imprimir_texto">Codigo:</font> </td>
    <td width="200"><strong><?php echo $codigo_diploma ?></strong></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Nombres:</font></td>
    <td colspan="3"><?php echo $nombre_1 ?> <?php echo $nombre_2 ?></td>
  </tr>
    <tr>
  	<td><font id="imprimir_texto">Apellidos:</font></td>
    <td colspan="3"><?php echo $apellido_1 ?> <?php echo $apellido_2 ?> </td>
  </tr>
  <tr>
    <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">DATOS DE UBICACIÓN</font></th>
    
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Telefonos:</font></td>
    <td><?php echo $telefono ?></td>
	<td><font id="imprimir_texto">Correo:</font></td>
    <td><?php echo $correo ?></td>
  </tr>
  <tr>
	<td><font id="imprimir_texto">Instituto:</font></td>
    <td><?php echo $instituto ?></td>
  	<td><font id="imprimir_texto">Sede o Estensión:</font></td>
    <td><?php $sql="SELECT * FROM extension";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_extension,$extension_e,$cod,$letra_rif,$rif,$nombre_legal,$nombre_abreviado,$telefono,$celular,$correo,$pagina_web,$estado,$ciudad,$direccion,$fecha_fundacion,$distrito,$director,$cedula,$celular_director,$estatus,$observaciones)=mysql_fetch_array($result)){
					  if ($cod==$extension){
							 echo  ($nombre_abreviado);
			         }
					 }?>
      </td>
  </tr>
  <tr>
	<td><font id="imprimir_texto">Modalidad:</font></td>
    <td><?php echo $modalidad ?></td>
  	<td><font id="imprimir_texto">Nivel:</font></td>
    <td><?php echo $nivel ?> <?php echo $curso ?></td>
  </tr>
  <tr>
	<td><font id="imprimir_texto">Fecha de Ingreso:</font></td>
    <td><?php echo date("d-m-Y",  strtotime($fecha_ingreso ))?></td>
  	<td><font id="imprimir_texto">Fecha de egreso:</font></td>
    <td><?php echo date("d-m-Y",  strtotime($fecha_egreso ))?></td>
  </tr>
  <tr>
	<td><font id="imprimir_texto">Iglesia:</font></td>
    <td><?php echo $iglesia ?></td>
  	<td><font id="imprimir_texto">Pastor:</font></td>
    <td><?php echo $pastor ?></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Observaciones:</font></td>
    <td colspan="3"><?php echo $observaciones ?></td>
  </tr>
  <tr>
      <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">REQUISITOS:</font></th>
  <tr>
    <td colspan="4" align="center">
    	<table width="400" border="1" cellspacing="0" cellpadding="0">
  				<tr>
    				<td width="180">Carta del Pastor:</td>
    				<td width="220"><?php echo $carta_del_pastor ?></td>
  				</tr>
                <tr>
    				<td > Carta de Solvencia:</td>
    				<td ><?php echo $diezmo_ofrenda ?></td>
  				</tr>
                <tr>
    				<td>Planilla de Inscripcion:</td>
    				<td><?php echo $planilla_de_inscripcion ?></td>
  				</tr>
                <tr>
    				<td>Copia de cedula:</td>
    				<td><?php echo $copia_de_cedula ?></td>
  				</tr>
                  <tr>
    				<td> 2 Foto Tipo Carnet:</td>
    				<td> <?php echo $fotos_tipo_carnet ?></td>
  				</tr>
                  <tr>
    				<td> Copia Del Titulo:</td>
    				<td><?php echo $copia_de_titulo ?></td>
  				</tr>
                  <tr>
    				<td>Copia Cert. De notas:</td>
    				<td><?php echo $certificacion_notas ?></td>
  				</tr>
                  <tr>
    				<td>Carta de Salud Mental:</td>
    				<td><?php echo $salud_mental ?></td>
  				</tr>
                <tr>
    				<td>Sobre de Manila: </td>
    				<td><?php echo $sobre_de_manila ?></td>
  				</tr>
                
		</table>
        
    </td>
  </tr>
    
</table> 

    <font id="imprimir_pequeno">
    <strong>Verificar que todos sus datos este correctos</strong>
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

</center>
</body>
</html>
<?php include('pie_imprimir.php'); ?>
