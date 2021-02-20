<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>IBM</title>


</head>
<body>
<font id="titulo">Registro Legal de la Iglesia</font>
<br/>
<br/>

<form action="z_registrar_a.php" method="post"> 
<table width="100%" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="30%"><font id="sub_titulo">Pastor General:</font></td>
    <td width="70%"></td>
  </tr>
    <tr>
    <td width="30%">Cedula:</td>
    <td width="70%"><input name="cedula" id="cedula" type="text" value="" size="10" maxlength="10" placeholder="Cedula"> </td>
  </tr>
  <tr>
    <td width="30%">Nombres:</td>
    <td width="70%">
    	<input name="nombre_1" id="nombre_1" type="text" size="20" maxlength="40" placeholder="Primer Nombre">
		<input name="nombre_2" id="nombre_2" type="text" size="20" maxlength="40" placeholder="Segundo Nombre">    
    </td>
  </tr>
  <tr>
    <td width="30%">apellidos:</td>
    <td width="70%">
    	<input name="apellido_1" id="apellido_1" type="text" size="20" maxlength="40" placeholder="Primer Apellido">
    	<input name="apellido_2" id="apellido_2" type="text" size="20" maxlength="40" placeholder="Segundo Apellido">
    </td>
  </tr>
  <tr>
    <td width="30%">Celular:</td>
    <td width="70%"><input name="celular" id="celular" type="text" size="11" maxlength="11"></td>
  </tr>
   
    <tr>
    <td width="30%"><font id="sub_titulo">Datos Del Registro:</font></td>
    <td width="70%"></td>
  </tr>
  <tr>
    <td width="30%">RIF:</td>
    <td width="70%">
    	<select name="letra_rif" id="letra_rif">
    	<option value=""></option>
        <option value="J">J</option>
        <option value="G">G</option>
        <option value="V">V</option>
        </option>
    	
        </select><input name="rif"  id="rif" type="text" value="" size="9" maxlength="9">
    </td>
  </tr>
   <tr>
    <td>Nombre Completo:</td>
    <td><input name="nombre_legal" id="iglesia" type="text" size="20" maxlength="100"></td>
  </tr>
     <tr>
    <td>Nombre Abreviado:</td>
    <td><input name="nombre_abreviado" id="iglesia" type="text" size="20" maxlength="100"></td>
  </tr>
  <tr>
    <td valign="top">Logo:</td>  
    <td><input type="file" name="logo" id="logo" /></td>
  </tr>
  <tr>
    <td><font id="sub_titulo">Datos De Ubicación:</font></td>
    <td ></td>
  </tr>
  <td>Telefono Local:</td>
    <td><input name="telefono" id="telefono" type="text" size="11" maxlength="11"></td>
  </tr>
    <tr>
    <td>Correo:</td>
    <td><input name="correo" id="correo" type="text" size="20" maxlength="40"></td>
  </tr>
      <tr>
    <td>Pagina Web:</td>
    <td><input name="pagina_web" id="pagina_web" type="text" size="20" maxlength="40"></td>
  </tr>
  <tr>
    <td>Estado:</td>
    <td><input name="estado" id="estado" type="text" size="20" maxlength="40"></td>
  </tr>
  <tr>
    <td>Ciudad:</td>
    <td><input name="ciudad" id="ciudad" type="text" size="20" maxlength="40"></td>
  </tr>
  <tr>
    <td valign="top">Dirección:</td>
    
    <td><textarea name="direccion" cols="40" rows="3" id="direccion"></textarea></td>
  </tr>

   <tr>
    <td></td>
    <td>
    	<input type="submit" value="Registrar" />
        <input type="reset" value="Borrar" />
        <input type="hidden" name="id" value="9" />
    </td>
  </tr>
</table>
</form> 


</body>
</html>

