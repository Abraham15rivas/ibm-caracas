<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Texto Biblico Del Día</font>
<br/>
<br/>
<br/>


<br/>
<br/>
 
<?php
error_reporting(0); 

	include"../conectar.php";
	$sql="select * from texto ";
	$consulta=mysql_query($sql,$conexion);
	
	?>
    
    
 <?php
    if(list($id_texto,$versiculo,$texto)=mysql_fetch_array($consulta))	
	{
?>   
<form id="form1" name="form1" method="post" action="">	


<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="200"><font id="sub_titulo"> Verciculo:</font></td>
    <td width="280"><label for="versiculo"></label>
        <input name="versiculo" type="text" id="versiculo" size="20" maxlength="20" value="<?php echo $versiculo ?>"/></td>
  </tr>
  <tr>
    <td valign="top"><font id="sub_titulo">Texto:</font></td>
    <td><label for="texto"></label>
	<textarea name="texto" cols="50" rows="5"><?php echo $texto ?></textarea>
	
	</td>
  </tr>
  <tr>
    <td valign="top"></td>
    <td>
    	<input name="oculto" type="hidden" id="oculto" value="<?php echo $id_texto?>"/>
		<input type="submit" name="button1" id="button1" value="Actualizar" />
	
	</td>
  </tr>
</table>
</form>


<?php if($_POST['oculto']){

		$sql="update texto set
		versiculo='$_POST[versiculo]',
		texto='$_POST[texto]'
		where id_texto='$_POST[oculto]'";
		$consulta=mysql_query($sql,$conexion);
	
	if(!mysql_error());?>
	<script> alert ("Texto Actualizado"); self.location='a_a_menu.php' </script>
	<?php
		}mysql_close($conexion);
	}
?>	

<br/>
<br/>
</body>
</html>
