<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Ver Anuncios</font>
<br/>
<br/>
<?php
error_reporting(0); 

	include"../conectar.php";
	$sql="select * from anuncios ORDER BY id_anuncio DESC";
	$consulta=mysql_query($sql,$conexion);
	
	?>
    
    
 <?php
    while(list($id_anuncio,$actividad,$descripcion,$fecha_inicio,$fecha_culminacion,$lugar,$nombre_1,$apellido_1,$telefono,$correo)=mysql_fetch_array($consulta))	{
	
?>	
<table width="700" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="200">Anuncio N°: <font id="sub_titulo"><?php echo $id_anuncio?></font></td>
    <td><font id="sub_titulo"><?php echo $actividad?></font></td>
  </tr>
    <tr>
    <td>Recuerde:</td>
    <td><font id="texto_p"><?php echo $descripcion?></font></td>
  </tr>  
  <tr>
    <td width="200">Lugar:</td>
    <td><?php echo $lugar?></td>
  </tr>
  <tr>
    <td>Fecha de Inicio:</td>
    <td><?php echo date("d-M-Y / h:i:sA",strtotime($fecha_inicio))?></td>
  </tr>
  <tr>
    <td>Fecha de Culminación:</td>
    <td><?php echo date("d-M-Y / h:i:sA",strtotime($fecha_culminacion))?></td>
  </tr>

    <tr>
    <td valign="top">Para mas Información:</td>
    <td>
    	Persona Contacto: <?php echo $nombre_1?> <?php echo $apellido_1?><br/>
    	Telefono: <?php echo $telefono?><br/>
        Correo:<?php echo $correo?><br/>
    
     </td>
  </tr>  
</table>
<br/>
<?php }mysql_close($conexion);?>
</body>
</html>
