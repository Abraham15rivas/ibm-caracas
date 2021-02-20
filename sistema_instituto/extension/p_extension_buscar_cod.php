<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Buscar Extensión por Codigo</font>
<br/>
<br/>

<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
 	<tr>
    <td width="15%"  align="left"> <font id="sub_titulo">Codigo:</font></td>
    <td width="25%"  align="left" scope="col"><label for="cod" ></label>
        <input name="cod" type="text" id="cod" placeholder="Cod" size="12" maxlength="12"/>
    </td>
    <td width="60%"  align="left" scope="col">
   		 <input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
 	 </tr>
	</table>
    <br/>
    <br/>
</form>
<?php
error_reporting(0); 
	if($_POST['cod']){
		include"../../conectar.php";
		$sql="select * from extension where cod='$_POST[cod]'";
				$consulta=mysql_query($sql,$conexion);
					if(list($id_extension,$extension,$cod,$letra_rif,$rif,$nombre_legal,$nombre_abreviado,$telefono,$celular,$correo,$pagina_web,$estado,$ciudad,$direccion,$fecha_fundacion,$distrito,$director,$cedula,$celular_director,$estatus,$observaciones)=mysql_fetch_array($consulta))	
					{ ?>
             
<font id="texto_p">
<table width="700" border="0" cellspacing="2" cellpadding="0">
  <tr>
  	<td width="120"><font id="sub_titulo">Instituto:</font></td>
    <td width="200"></td>
    <td width="200" align="right" rowspan="12">
   	<form name="form2" method="post" action="imprimir/planilla_extension.php">
    	<input type="hidden" name="cod" id="cod" value="<?php echo $cod ?>">
		<input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/>
    </form>
 
     
    </td>
  </tr>
  <tr>
    <td>Cod:</td>
    <td><?php echo $cod?></td>
  </tr>	
  <tr>
    <td>Rif:</td>
    <td><?php echo $letra_rif ?>-<?php echo $rif ?></td>
  </tr>
  <tr>
    <td>Nombres Completo:</td>
    <td><?php echo $nombre_legal ?></td>
  </tr>
  <tr>
    <td>Apellidos:</td>
    <td><?php echo $nombre_abreviado ?></td>
  </tr>
  <tr>
    <td>Teléfono:</td>
    <td><?php echo $telefono ?></td>
  </tr>
    <tr>
  <td>Celular:</td>
    <td><?php echo $celular ?></td>
  </tr>
  <tr>
    <td>Correo:</td>
    <td><?php echo $correo ?></td>
  </tr>
  <tr>
    <td>Pagina web:</td>
    <td><?php echo $pagina_web ?></td>
  </tr>
  <tr>
    <td>Estado:</td>
    <td><?php echo $estado ?> <?php echo $ciudad ?></td>
  </tr>
  <tr>
    <td>Dirección:</td>
    <td><?php echo $direccion ?></td>
  </tr>
  <tr>
    <td>Obsevaciones:</td>
    <td><?php echo $observaciones ?></td>
  </tr>
</table>
</font>
  

<?php 
	}else{
		print"Dato no encontrado"; ?> <script> alert ("Datos no encontrados")</script>
<?php
	}mysql_close($conexion);
	}
?>	

<br/>  
</body>
</html>
