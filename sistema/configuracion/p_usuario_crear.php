<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>IBM</title>


</head>
<body>
<font id="titulo">Crear Usuario</font>
<br/>
<br/>

<form name="usuarios" method="post" action="validar_a.php">
<table width="700" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="30%"><font id="sub_titulo">Información:</font></td>
    <td width="30%">&nbsp;</td>
    <td width="40%">&nbsp;</td>
  </tr>
    <tr>
    <td>Cedula:</td>
    <td><input name="cedula" id="cedula" type="text" value="" size="10"  placeholder="Cedula"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nombre:</td>
    <td><input name="nombre" type="text" autofocus placeholder="Nombre" required="required" /></td>
    <td></td>
  </tr>
    <tr>
    <td>Apellido:</td>
    <td><input name="apellido" type="text" autofocus placeholder="Apellido" required="required" /></td>
    <td></td>
  </tr>
    <tr>
  <td>Correo:</td>
    <td><input name="correo" type="text" autofocus placeholder="Correo" required="required" /></td>
    <td></td>
  </tr>
  <td>Celular:</td>
    <td><input name="celular" type="text" autofocus placeholder="Celular" required="required" /></td>
    <td></td>
  </tr>
  <tr>
    <td>Instituto:</td>
    <td>  <select name="instituto" id="instituto">
        <option value=""></option>
         <?php 
			error_reporting(0);
			include("../conectar.php");
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
            </select>
		</td>
    <td></td>
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
  <tr>
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
  </tr>
  <tr>
    <td>Respuesta:</td>
    <td><input name="respuesta" type="text" placeholder="Respuesta" required="required" /></td>
    <td>&nbsp;</td>
  </tr> 
  <tr>
    <td> Tipo de Usuario:</td>
    <td><select name="tipo_usuario" >
      		<option value=""></option>
           <option value="Administrador">Administrador</option>
           <option value="Instituto">Instituto</option>
           <option value="Extension">Extensión</option>
	       <option value="Profesor">Profesor</option>
           <option value="Estudiante">Estudiante</option>
           
           </select>
       </label></td>
    <td>&nbsp;</td>
  </tr> 
  </tr>
</table>
<br />
<input type="submit" value="Registrar" />
<input type="reset" value="Borrar" />
<input type="hidden" name="id" value="2" />


</form>
</body>
</html>

