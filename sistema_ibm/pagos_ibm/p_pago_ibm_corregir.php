<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="estilos.css" rel="stylesheet" type="text/css" />
<title>Pago</title>
</head>


<body  >
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
<form id="form2" name="form2" method="post" action="imprimir/planilla_pago_estudiante.php">

  <tr>
    <td align="center"><a href="a_pago_buscar_recibo.php"><?php echo $id_pagos ?></a></td>
   	<td align="center"><?php echo date("d-m-Y",strtotime($fecha_de_pago ))?></td>
	<td align="left"><?php echo $modo_de_pago?></td>
    <td align="left"><?php echo $referencia ?></td>
    <td align="right"><?php echo $monto ?></td>
    <td align="left"><?php echo $concepto ?></td>
    <td align="left"><?php echo $curso ?></td>
    <td align="center"><?php echo $nivel ?></td>
    <td align="left"><?php echo $observaciones ?></td>
    <td align="center">
    	<input name="id_pagos" id="id_pagos" type="hidden" value="<?php echo $id_pagos ?>"/>
        <input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>"/>
        <input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/>
    </td>
  </tr>
 </form>   
  
  <?php }else{
		print"Dato no encontrado"; ?> <script> alert ("Datos no encontrados")</script>  
  <?php }?> 
  </table> 
  
 	<form id="form2" name="form2" method="post" action="a_pago_corregir_recibo.php">
        <input name="id_pagos" id="id_pagos" type="hidden" value="<?php echo $id_pagos ?>" />
        <input type="submit" name="corregir" id="corregir" value="Corregir" />
      </form>
  
  
  </font>

<?php 


		}mysql_close($conexion);
	}
?>

<br/>
<br/>
<font id="titulo">Corregir Pagos</font>
<br/>
<br/>

<form id="pago" name="pago" method="post" action="">

<table width="700" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="150">Cedula:</td>
    <td width="250"><label for="cedula"></label>
        <input name="cedula" type="text" id="cedula" value="<?php print $cedula;?>" size="8" maxlength="8" tabindex="1"  /></td>
    <td width="300">&nbsp;</td>
  </tr>
  	<tr>
    <td width="150">Instituto:</td>
    <td width="250"><input name="instituto" type="text" id="instituto" value="<?php print $instituto;?>" size="20" maxlength="20" readonly /></td>
    <td width="300">&nbsp;</td>
  </tr>
  <tr>
    <td width="150">Extensión:</td>
    <td width="250"><input name="extension" type="text" id="extension" value="<?php print $extension;?>" size="20" maxlength="20" readonly /></td>
    <td width="300">&nbsp;</td>
  </tr>
  <td width="150">Modalidad:</td>
    <td width="250"><select name="modalidad">
        <option value="<?php echo $modalidad?>"><?php echo $modalidad?></option>
        <option value="Regular">Regular</option>
        <option value="Nocturno">Nocturno</option>
       	<option value="Sabatino">Sabatino</option>
        <option value="Intensivo">Intensivo</option>
        <option value="Aula">Aula</option>
      </select></td>
    <td width="300">&nbsp;</td>
  </tr>	
  <tr>
    <td width="150">Curso:</td>
    <td width="250"><input name="curso" type="text" id="curso" value="<?php print $curso;?>" size="20" maxlength="20" /></td>
    <td width="300"><font id="importante">Verificar el Curso que pagan</font></td>
  </tr>
    <tr>
    <td width="150">Nivel:</td>
    <td width="250"><input name="nivel" type="text" id="nivel" value="<?php print $nivel;?>" size="20" maxlength="20" /> </td>
    <td width="300"><font id="importante">  Verificar el Nivel que pagan</font></td>
  </tr>
      <tr>
    <td width="150">Concepto:</td>
    <td width="250"><select name="concepto">
      		<option value="<?php print $concepto;?>"><?php print $concepto;?></option>
           <option value="Inscripcion">Inscripción</option>
           <option value="Cuota 1">Cuota 1</option>
           <option value="Cuota 2">Cuota 2</option>
           <option value="Cuota 3">Cuota 3</option>
           <option value="Cuota 4">Cuota 4</option>
           <option value="Cuota 5">Cuota 5</option>
           <option value="Cuota 6">Cuota 6</option>
           <option value="Materia">Materia</option>
           <option value="Bimestre">Bimestre</option>
           <option value="Trimestre">Trimestre</option>
           <option value="Semestre">Semestre</option>
           
           </select>
       </label></td>
    <td width="300">&nbsp;</td>
  </tr>
        <tr>
    <td width="150">Modo de Pago:</td>
    <td width="250"><select name="modo_de_pago">
      		<option value="<?php print $modo_de_pago;?>"><?php print $modo_de_pago;?></option>
           <option value="Efectivo">Efectivo</option>
           <option value="Deposito">Deposito</option>
           <option value="Transferencia">Transferencia</option>
           <option value="Cheque">Cheque</option>
           <option value="Debito">Debito</option>
           <option value="Credito">Credito</option>
           <option value="Exonerado">Exonerado</option>
           </select>
       </label></td>
    <td width="300">&nbsp;</td>
  </tr>

    <tr>
    <td width="150">Referencia:</td>
    <td width="250"><input name="referencia" type="text" id="referencia" size="20" maxlength="20" value="<?php print $referencia;?>" /></td>
    <td width="300">&nbsp;</td>
  </tr>
    <tr>
    <td width="150">Monto:</td>
    <td width="250"><input name="monto" type="text" id="monto"  size="20" maxlength="20" value="<?php print $monto;?>" /></td>
    <td width="300">&nbsp;</td>
  </tr>
      <tr>
    <td width="150">Fecha de Pago:</td>
    <td width="250"><label for="fecha_de_pago"></label>
        <input type="date" name="fecha_de_pago" id="fecha_de_pago" value="<?php print $fecha_de_pago;?>" /></td>
    <td width="300">&nbsp;</td>
  </tr>
    </tr>
    <tr>
    <td width="150" valign="top">Observaciones:</td>
    <td width="250"><label for="observaciones"></label>
        <textarea name="observaciones" id="observaciones" cols="30" rows="3" ><?php print $observaciones;?></textarea></td>
    <td width="300">&nbsp;</td>
  </tr>
      <tr>
    <td width="150" valign="top"></td>
    <td width="250">
    <input type="hidden" name="id_pagos" id="id_pagos" value="<?php echo $id_pagos;?>"/>
    <input type="submit" name="Corregir" id="Corregir" value="Corregir"  /> 
    <input type="reset" name="Limpiar" id="Limpiar" value="Limpiar" /></td>
    <td width="300">&nbsp;</td>
  </tr>

</table>
<br />	

</form>
 
<?php
include "../conectar.php";
	if($_POST["cedula"]){ 
		include "../conectar.php"; 
			$pago="update pagos_ibm set
			id_pagos='$_POST[id_pagos]',
			cedula='$_POST[cedula]',
			instituto='$_POST[instituto]',
			extension='$_POST[extension]',
			modalidad='$_POST[modalidad]',
			curso='$_POST[curso]',
			nivel='$_POST[nivel]',
			concepto='$_POST[concepto]',
			modo_de_pago='$_POST[modo_de_pago]',
			referencia='$_POST[referencia]',
			monto='$_POST[monto]',
			fecha_de_pago='$_POST[fecha_de_pago]',
			observaciones='$_POST[observaciones]'
			where id_pagos='$_POST[id_pagos]'"; 
			$registro=mysql_query($pago,$conexion);
				if($registro){
					echo "Registro de Pago Actualizado con exito" ;?><br/><br/><br/>
			
			<script> alert ("Registro de Pago Actualizado con exito")</script><?php 
		 	if($_POST['cedula']){
				include "pagos_ibm/p_pago_ibm_buscar_cedula.php";
							
								
			}else{
				echo "registrar todo los campos";?><script> alert ("registrar todo los campos")</script><?php
				}
					}else{
				{
					echo "Debe registrar todos los datos";
					}
}
}
?>


</body>
</html>