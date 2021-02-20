<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>Buscar</title>
</head>


<body>
<?php include("estudiante/p_estudiante_buscar.php"); ?>
<br />
<br />
<font id="titulo">Recibos De Pagos de Estudiante</font>
<br />

<?php
	if($_POST['cedula']){
		include"../conectar.php";
		$sql="select * from pagos_ibm where cedula='$_POST[cedula]' ORDER BY id_pagos DESC";
		$consulta=mysql_query($sql,$conexion);
?>
<table width="700" border="0" cellspacing="0" cellpadding="5">
  <tr align="center">
    <td width="350" align="right">
    <form id="form2" name="form2" method="post" action="a_pago_ibm_estudiante.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="pagar" id="pagar" value="Pagar" />
     </form>
    </td>
    <td width="350" align="left">
    <form id="form2" name="form2" method="post" action="a_estudiante_buscar_actualizar.php">
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>" />
        <input type="submit" name="actualizar" id="actualizar" value="Actualizar" />
     </form>
    </td>
  </tr>
</table>

  	 
      
    
 
<font id="texto_p">
<br/>
<table width="730" border="0" cellspacing="5" cellpadding="0" >
  <tr align="center" bgcolor="#CCCCCC" >
    <td width="50">Recibo:</td>
   	<td width="80">Fecha:</td>
	<td width="75">Modo:</td>
    <td width="75">Referencia:</td>
    <td width="60">Monto:</td>
    <td width="100">Concepto:</td>
    <td width="80">Curso:</td>
    <td width="50">Nivel:</td>
    <td width="150">Observación:</td>
    <td width="50">Imprimir:</td>
  </tr>
 
<?php while(list($id_pagos,$cedula,$instituto,$extension,$modalidad,$curso,$nivel,$concepto,$modo_de_pago,$referencia,$monto,$fecha_de_pago,$observaciones)=mysql_fetch_array($consulta ))	
{	
?>


  <tr>
    <td align="center">
        <form id="form2" name="form2" method="post" action="a_pago_ibm_buscar_recibo.php">
        <input name="id_pagos" id="id_pagos" type="hidden" value="<?php echo $id_pagos ?>" />
        <input type="submit" value="<?php echo $id_pagos?>" />
	    </form>
    </td>
   	<td align="center"><?php echo date("d-m-Y",strtotime($fecha_de_pago ))?></td>
	<td align="left"><?php echo $modo_de_pago?></td>
    <td align="left"><?php echo $referencia ?></td>
    <td align="right"><?php echo $monto ?></td>
    <td align="left"><?php echo $concepto ?></td>
    <td align="left"><?php echo $curso ?></td>
    <td align="center"><?php echo $nivel ?></td>
    <td align="left"><?php echo $observaciones ?></td>
    <td align="center">
    <form id="form2" name="form2" method="post" action="imprimir/planilla_pago_estudiante.php">
    	<input name="id_pagos" id="id_pagos" type="hidden" value="<?php echo $id_pagos ?>"/>
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>"/>
        <input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/>
    </form>    
    </td>
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