<?php include "encabezado.php"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.jpg.png"/>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<title>Distrito Metropolitano</title>
</head>

<body>
<center>
<table  border="0" cellspacing="20" cellpadding="0" id="table_c">
  <tr>
    <td valign="top">


<table width="600" height="500"border="0" cellspacing="0" cellpadding="0" id="tabla_pie">
  <tr>
    <td align="center" valign="top">
    	<br/>  
		<font id="titulo">Ingrese a SANECAD</font> <br /><br />
        <font id="texto">Ingrese su usuario y contraseña</font><br/>
        <font id="texto">Sección Para estudiantes Registrado en<br />
        	 El LOS INSTITUTOS DE LAS ASAMBLEAS DE DIOS<br />
         <font color="#FF0000"> ESTUDIANTES</font></font><br/><br />
          
		<?php include('usuario_clave_estudiante.html'); ?>  
        <br />
        <a href="a_sistema_estudiante_registrar.php">REGISTRARSE</a>
        <br />
        <br />
        <br />
       
        </td>  
  </tr>
  <tr>
  		<td align="left">
        <a href="index.php">Desbloquear o Recuperar su clave de acceso de SANECAD</a><br />
         <font id="texto">
         Atención al Usuario:<br />
		sistempro.ca@gmail.com<br />
        (0424) 268-8338<br />
        </font>
        
        </td>
  </tr>
  
</table>
</td>
  </tr>
</table>

</center>
</body>
</html>
<?php include "pie.php"?>
