<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Listado de Institutos</font>
<br/>
<br/>

<br/>
<br/>
<?php
error_reporting(0); 
include"../../conectar.php";
$sql="select * from instituto ";
$consulta=mysql_query($sql,$conexion);
?>
<form name="form2" method="post" action="imprimir/institutos.php">	
Imprimir Lista de Institutos  <?php echo $modalidad ?>
<input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/>
</form>    
             
<font id="texto_p">

<table width="700" border="0" cellspacing="2" cellpadding="0">
  <tr align="center" bgcolor="#CCCCCC" height="30" >
    <td width="80">Cod</td>
    <td width="380">Instituto</td>
    <td width="100">Distrito</td>
    <td width="80">Teléfono</td>
    <td width="80">Celular</td>
    <td width="50">Ver mas:</td>
  </tr>
  
  <?php 
  	while(list($id_instituto,$cod,$letra_rif,$rif,$nombre_legal,$nombre_abreviado,$telefono,$celular,$correo,$pagina_web,$estado,$ciudad,$direccion,$fecha_fundacion,$distrito,$director,$cedula,$celular_director,$estatus,$observaciones)=mysql_fetch_array($consulta)){
		?>
  	<tr>
    <td><?php echo $id_instituto?>-<?php echo $cod?></td>
    <td><?php echo $nombre_legal?></td>
    <td align="center"><?php echo $distrito?></td>
    <td align="center"><?php echo $telefono?></td>
    <td align="center"><?php echo $celular?></td>
    <td align="center"> 
         <form id="form1" name="form1" method="post" action="a_instituto_buscar_actualizar.php">
    	<input name="cod" id="cod" type="hidden" value="<?php echo $cod ?>"/>
        <input type="image" src="imagenes/mas.png" width="25" height="25" name="ver_planilla" id="ver_planilla"/>
        </form> 	
    </td>
  </tr>
  <?php }?>
</table>
</font>
<br/>  

</body>
</html>
