<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Buscar Por Pensum</font>
<br/>
<br/>
<br/>

<form id="form1" name="form1" method="post" action="">
 <table width="700" border="0" cellspacing="0" cellpadding="0">
 	<tr>
    <td width="15%" align="left"><font id="sub_titulo">Pensum:</font> </td>
    <td width="15%" align="left" scope="col"><select name="modalidad"  tabindex="3">
      		<option value=""></option>
           <option value="Basico">Basico</option>
           <option value="Ministerial">Ministerial</option>
           <option value="Licenciatura">Licenciatura</option>
           <option value="Pensum Viejo">Pensum Viejo</option>
           </select>
       </label></td>
    <td width="70%"  align="left" scope="col">
   		 <input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
 	 </tr>
 </table>
</form>
<br/>
<br/>
 
<?php
error_reporting(0); 
if($_POST['modalidad']){
	include"../conectar.php";
	$sql="select * from materia where modalidad='$_POST[modalidad]'";
	$consulta=mysql_query($sql,$conexion);
	
	
	?>

    
 <font id="texto_p">   


<table width="700" border="0" cellspacing="5" cellpadding="0" >
  <tr align="center" bgcolor="#CCCCCC" >
    <td width="20">ID</td>
   	<td width="100">Codigo:</td>
	<td width="300">Materia:</td>
    <td width="40">U.C.:</td>
    <td width="40">Nivel:</td>
    <td width="100">Modalidad:</td>
    <td width="100">Ver mas:</td>
  </tr>
 </table>
	
<?php
    while(list($id_materia,$codigo,$materia,$modalidad,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($consulta))	
	{
?>
<table width="700" border="0" cellspacing="5" cellpadding="0" >
  <tr>
    <td width="20" align="center"><?php echo $id_materia ?></td>
   	<td width="100" align="left"><?php echo $codigo ?></td>
	<td width="300" align="left"><?php echo $materia ?></td>
    <td width="40" align="center"><?php echo $uc ?></td>
    <td width="40" align="center"><?php echo $nivel ?></td>
    <td width="100" align="left"><?php echo $modalidad ?>/<?php echo $area ?></td>
    <td width="100" align="center"> 
         <form id="form1" name="form1" method="post" action="a_materia_buscar.php">
    	<input name="codigo" id="codigo" type="hidden" value="<?php echo $codigo ?>"/>
        <input type="image" src="imagenes/mas.png" width="25" height="25" name="ver_planilla" id="ver_planilla"/>
        </form> 	
           
	 
     </td>
  </tr>
</table> 
 <form name="form2" method="post" action="imprimir/pensul.php">	
 <input name="modalidad" id="modalidad" type="hidden" value="<?php echo $modalidad ?>"/>

<?php
	}
	
?>	
 <input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/>
	</form>
	
<br/>
<br/>
	       
        
</font>
<?php
	
	}mysql_close($conexion);
	
?>	

</body>
</html>
