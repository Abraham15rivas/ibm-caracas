<?php include"../conectar.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.png"/>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<title>MINEC</title>
</head>

<body>
<center>
<table width="1000"  height="110" border="0" cellspacing="0" cellpadding="0" id="tabla_c_encabezado">
  <tr>
    <td width="150" align="center"><img src="img/MINEC.png" width="98" height="88"/></td>
    <td width="350" align="left"><img src="img/titulo.png" width="360" height="98"/></td>
    <td width="250" align="center" valign="bottom">
    	<img src="imagenes/icono_notas.png" width="100" height="100"/><br />
        <font size="5" color="#FF0000">Sección de Minec</font></td>
    
  </tr>
</table>
<hr  color="#0066FF" width="1000"/>
    
    
   		
        
<table width="1000" border="0" cellspacing="0" cellpadding="0" >
	<tr>
    <td width="50" align="center" height="25">
    	<a href="a_a_menu.php"><img src="imagenes/casa.png" width="30" height="30"/></a></td>
    <td width="100" align="center" height="25">
    	<a href="a_estudiante_registrar.php"><img src="imagenes/icono_estudiante.png" width="35" height="35"/></a>
        <a href="a_estudiante_buscar_actualizar.php"><img src="imagenes/icono_actualizar.png" width="35" height="35"/></a>
        <a href="a_instituto_registrar.php"><img src="imagenes/icono_instituto.png" width="35" height="35"/></a>
    </td>
    <td width="80" align="center" height="25">
    	<a href="a_estudiante_buscar.php"><img src="imagenes/buscar.png" width="30" height="30"/></a>
        <a href="a_notas_ver.php"><img src="imagenes/icono_ver_notas.png" width="35" height="35"/></a>
        
     </td>
    <td width="120" align="center" height="25">
        <a href="a_notas_cargar_b.php"><img src="imagenes/icono_basico.png" width="35" height="35"/></a>
    	<a href="a_notas_cargar_m.php"><img src="imagenes/icono_ministerial.png" width="35" height="35"/></a>
    	<a href="a_notas_cargar_l.php"><img src="imagenes/icono_licenciatura.png" width="35" height="35"/></a>
        <a href="a_notas_cargar_pv.php"><img src="imagenes/icono_pensul_viejo.png" width="35" height="35"/></a>
        </td>
    <td width="100" align="left" valign="middle" height="25">
    	<a href="#"><img src="imagenes/icono_pago.png" width="35" height="35"/></a>
    </td>
    <td width="100" align="center" valign="middle" height="25"></td>
   	<td width="100" align="center" valign="middle" height="25">
    	<a href="../index.php"><img src="imagenes/x.png" width="25" height="25"/></a></td>
    </tr>
</table>
<table width="1000" border="0" cellspacing="0" cellpadding="0" id="tabla_menu" >
 			 <tr>
   				<td align="left" height="30">
				<?php include('menu.php'); ?>
                </td>
    		</tr>
		</table>
        
 
    

<br />
</center>
</body>
</html>