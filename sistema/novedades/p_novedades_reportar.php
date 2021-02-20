<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Reportar Eventualidad</font>
<br/>
<br/>
<form id="form1" name="form1" method="post" action="">
<table width="100%"  border="0" align="left" cellpadding="3" cellspacing="0">
	<tr>
    	<td colspan="3"><font id="sub_titulo">Caso:</font></td>
    </tr>
    <tr align="left">
      <td width="200">Cédula:</td>
    <td colspan="2">
      <label for="cedula"></label><input name="cedula" type="text" id="cedula" size="20" maxlength="8" placeholder="Cedula"  /></td>
      </tr>
    <tr align="left">
      <td>¿Quién Reporta?:</td>
      <td>
      <label for="nombre_1"></label><input name="nombre_1" type="text" id="nombre_1" size="20" maxlength="20" placeholder="Nombre 1" />
      <label for="apellido_1"></label><input name="apellido_1" type="text" id="apellido_1" size="20" maxlength="20" placeholder="Apellido 1" /></td>
      </tr>
      <tr>
   <td  align="left">Teléfono:</td>
      <td colspan="2"  align="left"><label for="telefono"></label><input name="telefono" type="text" id="telefono" value="04" size="12" maxlength="11" /></td>
      </tr>   
      <tr>
        <td  align="left">Correo:</td>
      <td colspan="2"  align="left"><label for="correo"></label><input name="correo" type="text" id="correo" placeholder="Correo"  size="20" maxlength="50" /></td>
      </tr>   

      <tr align="left">
        <td>Instituto</td>
        <td colspan="2"><select name="instituto" id="instituto">
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
            </select></td>
        </tr>
      <tr align="left">
        <td>Sede o Extensión</td>
        <td colspan="2"> <select name="sede">
        <option value=""></option>
        <option value="Sede">Sede</option>
        </select>
        </td>
           <tr>
    	<td valign="top">Fecha de Reporte:</td>
        <td colspan="2"><input type="date" name="fecha" /></td>
      </tr>   
     <tr>
      <td  align="left">Titulo de Eventualidad:</td>
      <td colspan="2"  align="left">
      <label for="titulo"></label><input name="titulo"   type="text" size="20" maxlength="20" placeholder="Titulo" /></td>
      </tr>   
     <tr>
      <td  align="left">Boton</td>
      <td colspan="2"  align="left"><select name="boton">
      	<option value=""></option>
        <option value="Pagina Web"> Pagina Web</option>
        <option value="Inicio"> Inicio</option>
        <option value="Registrar"> Registrar</option>
        <option value="Buscar"> Buscar</option>
        <option value="Nivelando"> Nivelando</option>
       <option value="Notas"> Notas</option>
       <option value="Pagos"> Pagos</option>
       <option value="Listados"> Listados</option>
       <option value="Novedades"> Novedades</option>
       <option value="Configuración"> Configuración</option>
    </select></td>
      </tr> 
    <td  align="left">Sub-Botones</td>
      <td colspan="2"  align="left"><select name="sub_boton">
      	<option value=""></option>
        <option value="Estudiante"> Estudiante</option>
        <option value="Instituto"> Inicio</option>
        <option value="Profesor"> Profesor</option>
        <option value="Buscar"> Buscar</option>
        <option value="Cargar"> Cargar</option>
       <option value="Ver"> Ver</option>
       <option value="Corregir"> Listados</option>
       <option value="MINEC"> MINEC</option>
       <option value="Usuario"> Usuario</option>
       <option value="Estadisticas"> Estadisticas</option>
       <option value="Reportar"> Reportar</option>
       <option value="Materia"> Materia</option>
       <option value="Directiva"> Directiva</option>
       <option value="Eliminar"> Eliminar</option>
       <option value="Registro Legal"> Registro Legal</option>
       <option value="Anuncio"> Anuncio</option>
       <option value="Texto Biblico"> Texto Biblico</option>
    </select></td>
      </tr>    
     </tr>
    <tr  align="left">
      <td valign="top">Descripción de Enventualida:</td>
      <td colspan="2"><textarea name="descripcion"  id="descripcion" cols="50" rows="5"></textarea></td>
      </tr>
    <tr>
      <td colspan="3" align="center"><input name="button" type="submit" id="button" value="Reportar" /><br />
      <?php
error_reporting(0);
if($_POST['fecha']){
		include "../conectar.php";
		$sql="insert into novedades values(
					'$_POST[id_novedades]',
					'$_POST[cedula]',
					'$_POST[nombre_1]',
					'$_POST[apellido_1]',
					'$_POST[telefono]',
					'$_POST[correo]',
					'$_POST[instituto]',
					'$_POST[sede]',
					'$_POST[fecha]',
					'$_POST[titulo]',
					'$_POST[boton]',
					'$_POST[sub_boton]',
					'$_POST[descripcion]'
				)";
				
	$registro=mysql_query($sql,$conexion);
	if($registro){
		echo "Novedad Enviada Con Exito";?> <script> alert ("Novedad Enviada Con Exito"); self.location='a_novedades_ver.php' </script> <?php 
		 	if($_POST['cedula'])
				{include"a_a_menu.php";
			}
	}else{
		echo "Estudiantes ya existe";?> <script> alert("ESTUDIANTES YA EXISTE") </script><?php 
	}
}else{
		echo "CÉDULA Y NOMBRE SON OBLIGATORIOS"; 
}
		?> </td>
    </tr>
</table>
</form>
</body>
</html>
