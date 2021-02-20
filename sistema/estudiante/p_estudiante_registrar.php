<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>Buscar</title>
</head>

<body>
<center>
<font id="titulo">Inscripción del Estudiante</font>
<br />
<br />


<form id="form1" name="form1" method="post" action="">
<table width="100%"  border="0" align="left" cellpadding="3" cellspacing="0">
	<tr>
    	<td colspan="3"><font id="sub_titulo">Datos Básicos:</font></td>
    </tr>
    <tr align="left">
      <td width="200">Cédula:</td>
      <td colspan="2">
      <select name="l_cedula">
      	<option value=""></option>
        <option value="V">V</option>
        <option value="E">E</option>
        <option value="P">P</option>
    </select>
      <label for="cedula"></label><input name="cedula" type="text" id="cedula" size="20" maxlength="8" placeholder="Cedula"  /></td>
      </tr>
    <tr align="left">
      <td>Nombres:</td>
      <td><label for="nombre_1"></label><input name="nombre_1" type="text" id="nombre_1" size="20" maxlength="20" placeholder="Nombre 1" /></td>
      <td><label for="nombre_2"></label><input name="nombre_2" type="text" id="nombre_2" size="20" maxlength="20" placeholder="Nombre 2" /></td>
      </tr>
      
      
    <tr align="left">
      <td>Apellidos:</td>
      <td><label for="apellido_1"></label><input name="apellido_1" type="text" id="apellido_1" size="20" maxlength="20" placeholder="Apellido 1" /></td>
      <td><label for="apellido_2"></label><input name="apellido_2" type="text" id="apellido_2" size="20" maxlength="20" placeholder="Apellido 2" /></td>
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
        <td>Instituto:</td>
        <td colspan="2"> 		
		<select name="instituto" id="instituto">
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
        <td colspan="2"> <select name="extension" id="extension">
        <option value=""></option>
        <?php 
			error_reporting(0);
			include("../conectar.php");
			$sql="SELECT * FROM extension";
	 		$result = mysql_query ($sql,$conexion);
			while($row=mysql_fetch_array($result))
			{
					if ($row_edi[nombre_legal]==$row[nombre_legal]){
					 		echo ("<option value=".$row[cod]."select>".$row[nombre_abreviado]."\n");
					}else{
				 			echo ("<option value=".$row[cod].">".$row[nombre_abreviado]."\n");
	
					 		}
			}mysql_close($conexion)			
			?>

    </select></td>
        </tr>
      <tr align="left">
        <td>Modalidad:</td>
        <td colspan="2">          
          <select name="modalidad" id="radio">
          		<option value=""></option>
        		<option value="Regular">Regular</option>
                <option value="Nocturno">Nocturno</option>
       			<option value="Sabatino">Sabatino</option>
                <option value="Dominical">Dominical</option>
                <option value="Intensivo">Intensivo</option>
                <option value="Aula">Aula</option>
   		  </select>
        </td>
        </tr>
    
    <tr align="left">
        <td>Curso:</td>
        <td colspan="2">          
       <select name="curso" id="curso">
       	<option value=""></option>
        <option value="Basico">Basico</option>
        <option value="Ministerial">Ministerial</option>
        <option value="Licenciatura">Licenciatura</option>
    </select>
          </td>
        </tr>
    <tr align="left">
      <td>Nivel:</td>
      <td colspan="2"> <select name="nivel">
        <option value="0"></option>
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
    </select></td>
      </tr>
    <tr  align="left">
      <td>Estatus:</td>
      <td colspan="2"><select name="estatus">
       <option value=""></option>
       <option value="Activo"> Activo</option>
       <option value="Retirado"> Retirado</option>
       <option value="Flotante"> Flotante</option>
       <option value="Suspendido"> Suspendido</option>
       <option value="A Graduar"> A Graduar</option>
       <option value="Graduado"> Graduado</option>
    </select></td>
      </tr>
     <tr>
     	<td>Codigo De Diploma:</td>
        <td  colspan="2"><label for="codigo_diploma"></label><input name="codigo_diploma" type="text" id="codigo_diploma" size="5" maxlength="5" placeholder="Codigo"  /></td>
     </tr> 
      <tr>
        <td valign="top">Fecha de Nacimiento:</td>
        <td colspan="2"><input type="date" name="fecha_nacimiento" id="fecha_nacimiento"/></td>
      </tr>
      <tr>
      <td valign="top">Fecha Ingreso:</td>
      <td colspan="2"><label for="fecha_ingreso"></label><input type="date" name="fecha_ingreso" id="fecha_ingreso"/></td>
      </tr>
      <tr>
      <td valign="top">Fecha Egreso:</td>
      <td colspan="2"><label for="fecha_egreso"></label><input type="date" name="fecha_egreso" id="fecha_egreso"/></td>
      </tr> 
    <tr  align="left">
      <td>Graduado en:</td>
      <td colspan="2"><select name="nivel_graduacion" id="nivel_graduacion">
        <?php 
			error_reporting(0);
			include("../conectar.php");
			$sql="SELECT * FROM nivel_graduacion";
	 		$result = mysql_query ($sql,$conexion);
			while($row=mysql_fetch_array($result))
			{
					if ($row_edi[nombre]==$row[nombre]){
					 		echo ("<option value=".$row[codigo]."select>".$row[nombre]."\n");
					}else{
				 			echo ("<option value=".$row[codigo].">".$row[nombre]."\n");
	
					 		}
			}mysql_close($conexion)			
			?>

    </select></td>
      </tr>      
    <tr  align="left">
      <td valign="top">Observaciónes:</td>
      <td colspan="2"><textarea name="observaciones"  id="observaciones" cols="50" rows="5"></textarea></td>
      </tr>
    <tr  align="left">
      <td colspan="3"><font id="sub_titulo">Documentos:</font></td>
      </tr>
    <tr  align="left">
      <td>Carta del Pastor:</td>
      <td width="50">Si
        <input type="radio" name="carta_del_pastor" id="carta_del_pastor" value="Si" />
        No
        <input type="radio" name="carta_del_pastor" id="carta_del_pastor" value="No" /></td>
      <td></td>
      </tr>
    <tr  align="left">
      <td>Carta  Solvencia de D/O:</td>
      <td>Si 
        <input type="radio" name="diezmo_ofrenda" id="diezmo_ofrenda" value="Si" />
        <label for="diezmo_ofrenda"></label>
        No
        <input type="radio" name="diezmo_ofrenda" id="diezmo_ofrenda" value="No" /></td>
      <td></td>
    </tr>
    <tr  align="left">
      <td>Planilla de Inscripción:</td>
      <td>Si
        <input type="radio" name="planilla_de_inscripcion" id="planilla_de_inscripcion1" value="Si" />
        No
        <input type="radio" name="planilla_de_inscripcion" id="planilla_de_inscripcion2" value="No" />
        </td>
      <td></td>
      </tr>
    <tr  align="left">
      <td>Copia de Cédula:</td>
      <td>Si
        <input type="radio" name="copia_de_cedula" id="copia_de_cedula1" value="Si" />
        No
        <input type="radio" name="copia_de_cedula" id="copia_de_cedula2" value="No" />
        </td>
      <td></td>
      </tr>
    <tr  align="left">
      <td>2 Fotos carnet:</td>
      <td>Si
        <input type="radio" name="fotos_tipo_carnet" id="fotos_tipo_carnet1" value="Si" />
        No
        <input type="radio" name="fotos_tipo_carnet" id="fotos_tipo_carnet2" value="No" />
        </td>
      <td></td>
      </tr>
    <tr  align="left">
      <td>Copia de Título:</td>
      <td>Si
        <input type="radio" name="copia_de_titulo" id="copia_de_titulo" value="Si" />
        No
        <input type="radio" name="copia_de_titulo" id="copia_de_titulo" value="No" />
        </td>
      <td></td>
      </tr>
    <tr  align="left">
      <td>Copia de Cert. de Notas:</td>
      <td>Si 
        <input type="radio" name="certificacion_notas" id="certificacion_notas" value="Si" />
        <label for="certificacion_notas"></label>
        No
        <input type="radio" name="certificacion_notas" id="certificacion_notas" value="No" /></td>
      <td></td>
    </tr>
    <tr>
        <td  align="left">Cert. de Salud Mental:</td>
        <td  align="left">Si 
          <input type="radio" name="salud_mental" id="salud_mental" value="Si" />
          <label for="salud_mental"></label>
        No 
        <input type="radio" name="salud_mental" id="salud_mental" value="no" /></td>
        <td  align="left">&nbsp;</td>
      </tr>
    <tr  align="left">
      <td>Sobre de Maníla:</td>
      <td>Si
        <input type="radio" name="sobre_de_manila" id="sobre_de_manila1" value="Si" />
        No
        <input type="radio" name="sobre_de_manila" id="sobre_de_manila2" value="No" />
        </td>
      <td></td>
      </tr>
 
      <tr>
     <td  align="left">Iglesia:</td>
      <td colspan="2"  align="left"><label for="Iglesia"></label><input name="iglesia" type="text" id="iglesia" size="30" maxlength="50" /></td>
      </tr> 
      <tr>
      <td  align="left">Pastor:</td>
      <td colspan="2"  align="left"><label for="Pastor"></label><input name="pastor" type="text" id="pastor" size="30" maxlength="30" /></td>
      </tr> 
      
    <tr>
      <td colspan="3" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" align="center"><input name="button" type="submit" id="button" value="Registrar" /><br />
      <?php
error_reporting(0);
if($_POST['cedula']){
		include "../conectar.php";
		$sql="insert into estudiante values(
					'$_POST[id_estudiante]',
					'$_POST[l_cedula]',
					'$_POST[cedula]',
					'$_POST[nombre_1]',
					'$_POST[nombre_2]',
					'$_POST[apellido_1]',
					'$_POST[apellido_2]',
					'$_POST[telefono]',
					'$_POST[correo]',
					'$_POST[instituto]',
					'$_POST[extension]',
					'$_POST[modalidad]',
					'$_POST[curso]',
					'$_POST[nivel]',
					'$_POST[estatus]',
					'$_POST[codigo_diploma]',
					'$_POST[fecha_nacimiento]',
					'$_POST[fecha_ingreso]',
					'$_POST[fecha_egreso]',
					'$_POST[nivel_graduacion]',
					'$_POST[observaciones]',
					'$_POST[carta_del_pastor]',
					'$_POST[diezmo_ofrenda]',
					'$_POST[planilla_de_inscripcion]',
					'$_POST[copia_de_cedula]',
					'$_POST[fotos_tipo_carnet]',
					'$_POST[copia_de_titulo]',
					'$_POST[certificacion_notas]',
					'$_POST[salud_mental]',
					'$_POST[sobre_de_manila]',
					'$_POST[iglesia]',
					'$_POST[pastor]'
				)";
				
	$registro=mysql_query($sql,$conexion);
	if($registro){
		echo "Estudiante registrado con exito";?> <script> alert("Estudiante registrado con exito");</script> <?php 
		 	if($_POST['cedula'])
				{include"p_buscar_inscripcion.php";
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

</center>
</body>
</html>
