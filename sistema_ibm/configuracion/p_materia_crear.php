<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Crear Materia</font>
<br/>
<br/>
<form action="" method="post">
<table width="700" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="20%"><font id="sub_titulo">Registrar</font></td>
    <td width="30%"></td>
    <td width="50%"></td>
  </tr>
  <tr>
    <td>Codigo:</td>
    <td><input name="codigo" id="codigo" type="text" value="" size="10" maxlength="10" placeholder="Codigo" tabindex="1"></td>
    <td></td>
  </tr>
    <tr>
    <td>Materia:</td>
    <td><input name="materia" id="materia" type="text" size="20" maxlength="100" placeholder="Materia" tabindex="2"></td>
    <td></td>
  </tr>
    <tr>
    <td>Curso:</td>
    <td><select name="curso"  tabindex="3">
			<option value=""></option>
           <option value="Basico">Basico</option>
           <option value="Ministerial">Ministerial</option>
           <option value="Licenciatura">Licenciatura</option>
           <option value="Pensum Viejo">Pensum Viejo</option>
    </select>
       </label></td>
    <td></td>
  </tr>
      <tr>
    <td>Area:</td>
    <td><select name="area"  tabindex="4">
			<option value=""></option>
           <option value="Bíblica">Bíblica</option>
           <option value="General">General</option>
           <option value="Ministerio">Ministerio</option>
           <option value="Teológica">Teológica</option>
           <option value="Común">Común</option>
           <option value="Educación Cristiana">Educación Cristiana</option>
           <option value="Orientación Pastoral">Orientación Pastoral</option>
           <option value="Misiones">Misiones</option>
    </select>
       </label></td>
    <td></td>
  </tr>
 <tr>
    <td>Creditos:</td>
    <td><select name="uc"  tabindex="5">
			<option value=""></option>
           <option value="1">1</option>
           <option value="1.5">1.5</option>
           <option value="2">2</option>
           <option value="2.5">2.5</option>
           <option value="3">3</option>
           <option value="3.5">3.5</option>
           <option value="4">4</option>
    </select>
       </label></td>
    <td></td>
  </tr>
  <tr>
    <td>Nivel:</td>
    <td><select name="nivel"  tabindex="6">
			<option value=""></option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
           <option value="9">9</option>
           <option value="10">10</option>
           <option value="11">11</option>
			<option value="12">12</option>
    </select>
       </label></td>
    <td></td>
  </tr>
    <tr>
    <td>Tiempo:</td>
    <td><input name="tiempo" id="tiempo" type="text" value="" size="2" maxlength="2"tabindex="7"><font color="#FF0000" size="-2">Horas academicas</font></td>
    <td></td>
  </tr>
   <tr>
    <td valign="top">Prerequisitos:</td>
    <td><textarea name="prerrequisitos"  id="prerrequisitos" cols="52" rows="2" tabindex="8"></textarea></td>
    <td></td>
  </tr> 

  <tr>
    <td valign="top">Obeservaciones:</td>
    <td><textarea name="observaciones"  id="observaciones" cols="52" rows="2" tabindex="9" ></textarea></td>
    <td></td>
  </tr>
</table>

<input type="submit" value="Registrar"  tabindex="10" />
<input type="reset" value="Borrar" />
<?php
error_reporting(0);
	if($_POST['codigo']){
			include "../conectar.php";
				$sql="insert into materia values(
					'$_POST[id_materia]',
					'$_POST[codigo]',
					'$_POST[materia]',
					'$_POST[curso]',
					'$_POST[area]',
					'$_POST[uc]',
					'$_POST[nivel]',
					'$_POST[tiempo]',
					'$_POST[prerrequisitos]',
					'$_POST[observaciones]'
				)";
				$registro=mysql_query($sql,$conexion);
		if($registro){
			echo "Materia Registrada Con Exito";?> <script> alert ("Materia Registrada Con Exito"); self.location='a_materia_ver_todas.php' </script> <?php 
		 	
			}else{
				echo "Materia ya existe";?> <script> alert("MATERIA YA EXISTE") </script><?php 
					}
			}else{
		echo "El Codigo es Obligatorio"; 
	}
		?> 


</form>

</body>
</html>
