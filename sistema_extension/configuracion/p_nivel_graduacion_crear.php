<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Crear Nivel De Graduación</font>
<br/>
<br/>
<form id="form1" name="form1" method="post" action="">
<table width="100%"  border="0" align="left" cellpadding="3" cellspacing="0">
	<tr>
    	<td colspan="3"><font id="sub_titulo">Nivel:</font></td>
    </tr>
   <tr align="left">   
   <td width="200" align="left">Codigo:</td>
      <td colspan="2"  align="left">
      <label for="titulo"></label><input name="codigo" id="codigo"  type="text" size="20" maxlength="50" placeholder="Codigo" /></td>
      </tr>  
   <tr align="left">   
   <td width="200" align="left">Grado de Graduación:</td>
      <td colspan="2"  align="left">
      <label for="titulo"></label><input name="nombre"  id="nombre" type="text" size="20" maxlength="50" placeholder="Grado de Graduación" /></td>
      </tr> 
   <tr  align="left">
      <td valign="top">Descripción Del Grado alcanzado:</td>
      <td colspan="2"><textarea name="descripcion"  id="descripcion" cols="50" rows="5"></textarea></td>
      </tr>
   
    <tr>
      <td colspan="3" align="center"><input name="button" type="submit" id="button" value="Crear" /><br />
      <?php
error_reporting(0);
	if($_POST['codigo']){
		include "../conectar.php"; 
		$sql="insert into nivel_graduacion values(
					'$_POST[id_nivel_graduacion]',
					'$_POST[codigo]',
					'$_POST[nombre]',
					'$_POST[descripcion]'
				)";
				
	$registro=mysql_query($sql,$conexion);
	if($registro){
		echo "Formato Creado Con Exito";?> <script> alert ("Formato Creado Con Exito"); self.location='a_nivel_graduacion_ver.php' </script> <?php 
		 	if($_POST['nombre'])
				{include"a_nivel_graduacion_ver.php";
			}
	}else{
		echo "Codigo ya existe";?> <script> alert("CODIGO YA EXISTE") </script><?php 
	}
}else{
		echo "DEBE REGISTRAR TODA  LA INFORMACIÓN"; 
}
		?> </td>
    </tr>
</table>
</form>
</body>
</html>
