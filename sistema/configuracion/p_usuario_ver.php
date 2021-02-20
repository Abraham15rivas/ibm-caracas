<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Ver Listado de Usuarios del Sistema</font>
<br/>
<br/>

<br/>
<br/>
<?php
error_reporting(0); 
	include"../conectar.php";
	$sql="select * from usuario";
	$consulta=mysql_query($sql,$conexion);
	
	?>
 <form name="form2" method="post" action="imprimir/usuarios.php">	
Imprimir Lista de Usuarios  <?php echo $modalidad ?>
<input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/>
</form>    
    
    

<font id="texto_p">
<table width="700" border="0" cellspacing="2" cellpadding="0">
  <tr align="center" bgcolor="#CCCCCC" height="30">
    <td width="30">ID</td>
    <td width="60">Cedula</td>
    <td width="170">Nombre:</td>
    <td width="80">Usuario:</td>
    <td width="80">Tipo de Usuario:</td>
    <td width="50">Telefono:</td>
    <td width="70">Usuario:</td>
    <td width="50">Ver mas:</td>
  </tr>
    
 <?php
    while(list($id_usuario,$cedula,$nombre,$apellido,$correo,$celular,$instituto,$usuario,$clave,$confimar_clave,$pregunta,$respuesta,$tipo_usuario)=mysql_fetch_array($consulta))	{
	
?>	

  <tr>
    <td align="center"><?php echo $id_usuario?></td>
    <td align="right"><?php echo $cedula?></td>
    <td><?php echo $nombre?> <?php echo $apellido?></td>
    <td><?php echo $usuario?></td>
    <td><?php echo $tipo_usuario?></td>
    <td><?php echo $celular?></td>
    <td><?php echo $instituto?></td>
    <td align="center"> 
         <form id="form1" name="form1" method="post" action="a_usuario_buscar.php">
    	<input name="cedula" id="cedula" type="hidden" value="<?php echo $cedula ?>"/>
        <input type="image" src="imagenes/mas.png" width="25" height="25" name="ver_planilla" id="ver_planilla"/>
        </form> 	
    </td>
  </tr>
  
<?php }mysql_close($conexion);?>
</table>
</font>
<br/>



</body>
</html>
