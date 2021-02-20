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

<table width="700" border="1" cellspacing="2" cellpadding="0">
  <tr>
    <th width="150" colspan="5" valign="top" align="right">Registro: <u><?php echo $id_estudiante ?></u> </th>
    
  </tr>	
  <tr>
    <th width="150" colspan="5" valign="top" align="left" bgcolor="#CCCCCC"><font id="imprimir_sub_titulo">DATOS BASICO:</font></th>
    
  </tr>
  <tr>
    <td width="150" valign="top"> <font id="imprimir_texto">Cedula:</font></td>
    <td width="200"></td>
    <td scope="row" width="150"><font id="imprimir_texto">Estatus:</font> </td>
    <td width="200"><?php echo $estatus ?></strong></td>
  </tr>
  <tr>
    <td width="150" valign="top"> <font id="imprimir_texto">Fecha de Nacimiento:</font></td>
    <td width="200"></td>
    <td scope="row" width="150"><font id="imprimir_texto">Codigo:</font> </td>
    <td width="200"><strong><?php echo $codigo_diploma ?></strong></td>
  </tr>
  <tr>
  	<td><font id="imprimir_texto">Nombres:</font></td>
    <td colspan="3"><?php echo $nombre_1 ?> <?php echo $nombre_1 ?></td>
  </tr>
    <tr>
  	<td><font id="imprimir_texto">Apellidos:</font></td>
    <td colspan="3"><?php echo $apellido_1 ?> <?php echo $apellido_1 ?> </td>
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
    <td><?php echo $sede ?></td>
  </tr>
  <tr>
	<td><font id="imprimir_texto">Modalidad:</font></td>
    <td><?php echo $modalidad ?></td>
  	<td><font id="imprimir_texto">Nivel:</font></td>
    <td><?php echo $nivel ?> <?php echo $curso ?></td>
  </tr>
  <tr>
	<td><font id="imprimir_texto">Fecha de Ingreso:</font></td>
    <td></td>
  	<td><font id="imprimir_texto">Fecha de egreso:</font></td>
    <td></td>
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


 <br />	
 <br />

</center>
</body>
</html>
<?php include('pie_imprimir.php'); ?>
