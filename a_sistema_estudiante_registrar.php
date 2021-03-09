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
  <td valign="top"><table width="600" height="500"border="0" cellspacing="0" cellpadding="0" id="tabla_pie">
    <td align="center" valign="top"><br/>
      <font id="titulo">Registro en SISCON</font> <br />
      <br />
      <font id="texto">Ingrese su usuario y contraseña</font><br/>
      <font id="texto">Portal Para Registrar <font color="#FF0000"> Estudiante</font></font><br/>
      <br />
      
      <form name="usuarios" method="post" action="validar_a.php">
<table width="700" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="30%"><font id="sub_titulo">Información:</font></td>
    <td width="30%">&nbsp;</td>
    <td width="40%">&nbsp;</td>
  </tr>
    <tr>
    <td>Cedula:</td>
    <td><input name="cedula" id="cedula" type="text" value="" autofocus size="10" maxlength="10" placeholder="Cedula" required="required"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nombre:</td>
    <td><input name="nombre" type="text" autofocus placeholder="Nombre" /></td>
    <td></td>
  </tr>
    <tr>
    <td>Apellido:</td>
    <td><input name="apellido" type="text" autofocus placeholder="Apellido" /></td>
    <td></td>
  </tr>
    <tr>
  <td>Correo:</td>
    <td><input name="correo" type="text" autofocus placeholder="Correo" required="required" /></td>
    <td></td>
  </tr>
  <td>Celular:</td>
    <td colspan="2">
    <input name="celular" type="text" autofocus placeholder="Celular" required="required" />
    <font id="importante"> Solo digitos, sin ningun tipo de carácter ni simbolo.</font>
    </td>
  </tr>
  <tr>
    <td>Instituto:</td>
    <td colspan="2">  <select name="instituto" id="instituto">
        <option value=""></option>
        <?php 
			error_reporting(0);
			include("conectar.php");
			$sql="SELECT * FROM instituto";
	 		$result = mysql_query ($sql,$conexion);
			while($row=mysql_fetch_array($result))
			{
					if ($row_edi[nombre_legal]==$row[nombre_legal]){
					 		echo ("<option value=".$row[nombre_abreviado]."select>".$row[nombre_legal]."\n");
					}else{
				 			echo ("<option value=".$row[nombre_abreviado].">".$row[nombre_legal]."\n");
	
					 		}
			}mysql_close($conexion)			
			?>
            </select></td>
  </tr>
  <tr>
    <td width="30%"><font id="sub_titulo">Seguridad:</font></td>
    <td width="30%">&nbsp;</td>
    <td width="40%">&nbsp;</td>
  </tr>
  <tr>
    <td>Nombre de Usuario</td>
    <td><input name="usuario" type="text" placeholder="Usuario" required="required" /></td>
    <td>&nbsp;</td>
  </tr>
    <td>Clave:</td>
    <td><input name="clave" type="password" placeholder="Clave" required="required" /></td>
    <td></td>
  </tr>
    <td>Confirmar Clave:</td>
    <td><input name="confirmar_clave" type="password" placeholder="Confirmar Clave" required="required" /></td>
    <td></td>
  </tr>
    <td>Pregunta Secreta:</td>
    <td><select name="pregunta" >
      		<option value=""></option>
           <option value="Color Favorito">Color Favorito</option>
           <option value="Primera Mascota">Primera Mascota</option>
           <option value="Primera Escuela">Primera Escuela</option>
           <option value="Heroe Favorito">Heroe Favorito</option>
           <option value="Pelicula Favorita">Pelicula Favorita</option>
           <option value="Libro Favorito">Libro Favorit0</option>
           </select>
       </label></td>
    <td></td>
  <tr>
    <td>Respuesta:</td>
    <td><input name="respuesta" type="text" placeholder="Respuesta" required="required" /></td>
    <td>&nbsp;</td>
  </tr> 
  <tr>
    <td> Tipo de Usuario:</td>
    <td><select name="tipo_usuario" >
           <option value="Estudiante">Estudiante</option>
           </select>
       </label></td>
    <td>&nbsp;</td>
  </tr> 
  </tr>
</table>
<br />
<input type="submit" value="Registrar" />
<input type="reset" value="Borrar"/>
<input type="hidden" name="id" value="5" />


</form>
<br />
<br />
<br />
<a href="index.php">Desbloquear o Recuperar su clave de acceso de SISCON</a><br />
</td>
</tr>
<tr>
  <td align="left">
    <font id="texto">
        Atención al Usuario:<br />
      (0424) 211-3891 - Edies Flores<br />
      ibm.caracas@gmail.com<br />
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
