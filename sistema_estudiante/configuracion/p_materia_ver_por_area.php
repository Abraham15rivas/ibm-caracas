<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Buscar Por Área</font>
<br/>
<br/>
<br/>

<form id="form1" name="form1" method="post" action="">
 <table width="700" border="0" cellspacing="0" cellpadding="0">
 	<tr>
    <td width="15%" align="left"><font id="sub_titulo">Pensum:</font> </td>
    <td width="15%" align="left" scope="col"><select name="area"  tabindex="3">
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
    <td width="70%"  align="left" scope="col">
   		 <input type="submit" name="Buscar" id="Buscar" value="Buscar" /></td>
 	 </tr>
 </table>
</form>
<br/>
<br/>
 
<?php
error_reporting(0); 
if($_POST['area']){
	include"../conectar.php";
	$sql="select * from materia where area='$_POST[area]'";
	$consulta=mysql_query($sql,$conexion);
		if(list($id_materia,$codigo,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($consulta))	
	{
	?>
 
  
<form name="form2" method="post" action="imprimir/materia_area.php">	
<input name="area" id="area" type="hidden" value="<?php echo $area?>"/>
Imprimir Lista de la materia <?php echo $area?>
<input type="image" src="imagenes/imprimir.png" width="30" height="30" name="ver_planilla" id="ver_planilla"/>
</form>   

<font id="texto_p">   
<table width="700" border="0" cellspacing="2" cellpadding="0" >
  <tr align="center" bgcolor="#CCCCCC" >
    <td width="20">ID</td>
   	<td width="60">Codigo:</td>
	<td width="300">Materia:</td>
    <td width="30">U.C.</td>
    <td width="30">Nivel</td>
    <td width="80">Curso:</td>
    <td width="80">Area:</td>
    <td width="50">Ver mas:</td>
  </tr>
	
<?php
    while(list($id_materia,$codigo,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($consulta))	
	{
?>
<tr>
    <td align="center"><?php echo $id_materia ?></td>
   	<td align="left"><?php echo $codigo ?></td>
	<td align="left"><?php echo $materia ?></td>
    <td align="center"><?php echo $uc ?></td>
    <td align="center"><?php echo $nivel ?></td>
    <td align="left"><?php echo $curso ?></td>
    <td align="left"><?php echo $area ?></td>
    <td align="center"> 
         <form id="form1" name="form1" method="post" action="a_materia_buscar.php">
    	<input name="codigo" id="codigo" type="hidden" value="<?php echo $codigo ?>"/>
        <input type="image" src="imagenes/mas.png" width="25" height="25" name="ver_planilla" id="ver_planilla"/>
        </form> 	
    </td>
    </tr>
<?php
	}
	
?>    
</table> 
</font>
<br/>
<br/>


<?php
	}
	}mysql_close($conexion);
	
?>	
</body>
</html>
