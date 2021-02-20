<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>Buscar</title>
</head>


<body>
<font id="titulo">Recibo De Pago</font>
<br/>
<br/>
<br/>

<form id="form1" name="form1" method="post" action="">
<table width="700" border="0" cellspacing="0" cellpadding="0">
 	<tr>
    <td width="15%"  align="left" ><font id="sub_titulo">Recibo:</font></td>
    <td width="15%"  align="left" scope="col">
    	<label for="Recibo" ></label>
       <input name="id_pagos" type="text" id="id_pagos" size="8" placeholder="Recibo"/></td>
    <td width="70%"  align="left" scope="col">
   		 <input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
 	</tr>
</table>
</form>
<br/>
<br/>



<?php
error_reporting(0); 
include"../conectar.php";
	if($_POST['id_pagos']){ 
	$sql="select * from pagos_ibm where id_pagos='$_POST[id_pagos]'";
	$consulta=mysql_query($sql,$conexion);
   		{
?>


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
 
<?php if(list($id_pagos,$cedula,$instituto,$extension,$modalidad,$curso,$nivel,$concepto,$modo_de_pago,$referencia,$monto,$fecha_de_pago,$observaciones)=mysql_fetch_array($consulta ))	
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
   
  
  <?php }else{
		print"Dato no encontrado"; ?> <script> alert ("Datos no encontrados")</script>  
  <?php }?> 
  </table> 
  	
 		<form id="form2" name="form2" method="post" action="a_pago_ibm_corregir_recibo.php">
        <input name="id_pagos" id="id_pagos" type="hidden" value="<?php echo $id_pagos ?>" />
        <input type="submit" name="corregir" id="corregir" value="Corregir" />
      </form>
  
  
  </font>

<?php 


		}mysql_close($conexion);
	}
?>



</div>
</body>
</html>