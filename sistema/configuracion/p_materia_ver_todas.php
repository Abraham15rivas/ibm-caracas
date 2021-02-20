<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font id="titulo">Todas Las Materias</font>
<br/>
<br/>
<?php
error_reporting(0); 

	include"../conectar.php";
	$sql="select * from materia ORDER BY id_materia DESC";
	$consulta=mysql_query($sql,$conexion);
	
	?>
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
}mysql_close($conexion);

	
?>    
 </table>
 


</font>


</body>
</html>
