<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<title>Pago</title>
</head>


<body >
<?php include("estudiante/p_estudiante_buscar.php");?>
<br/>
<br/>

<?php
error_reporting(0); 
	include"../conectar.php";
	$sql= "select * from notas where cedula='$_POST[cedula]' AND `curso` = 'Basico' ";
	{
	$consulta=mysql_query($sql,$conexion);
		
$sucb=0;
$aplazado=14;
?>
<font id="sub_titulo"> Notas del Basico: </font><br /><br />


<font id="texto_p">
<table width="700" border="0" cellspacing="1" cellpadding="0">
  <tr align="center" bgcolor="#CCCCCC"  scope="col" >
    <td width="50">Reg</td>
    <td width="30">Nivel</td>
    <td width="50">Codigo</td>
    <td width="300">Materia</td>
    <td width="20">Notas</td>
    <td width="50">Porcent.</td>
    <td width="30">U.C.</td>
    <td width="70">Fecha</td>
    <td width="70">Instituto</td>
    <td width="50">Observaciones</td>
  </tr>

 <?php while(list($id_notas,$cedula,$instituto,$curso,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta)){
?>
  <tr>
    <td width="50" align="center"><?php echo $id_notas ?></td>
    <td width="30" align="center">
    
    
    
		<?php 
			$sql="SELECT * FROM materia  ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $nivel;
			  	}
		 	}
		?>
    </td>
    <td width="50" align="left"><?php echo $codigo ?></td>
    <td width="300" align="left">
		<?php 
			$sql="SELECT * FROM materia ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $materia;
				}
			}
		?>
     </td>
    <td width="20" align="center"><?php echo $nota;
					
	
	 ?></td>
    <td width="50" align="center"><?php echo (($nota*100)/20)?>%</td>
    <td width="30" align="center">
		<?php 
			$sql="SELECT * FROM materia ORDER BY  `materia`.`nivel` ASC";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $uc;
					  	if($result){
								$sucb=($uc+$sucb);
						}
			  	}
		 	}
		?>
     </td>
    <td width="70" align="center"><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td>
    <td width="50" align="justify"><?php echo $instituto?></td>
    <td width="50" align="justify"><?php if ($sql){
								         	if($aplazado>$nota) echo  "<font color='red'>".Aplazada."</font>";
							         	}
										echo $observaciones_notas;
									?>
    </td>
  </tr>
<?php } }?>  
</table>
</font>

<br />
<font id="texto_p">
<table width="700" border="0" cellspacing="1" cellpadding="0">
  <tr align="center">
    <td width="500" align="right">Total de Unidad de Creditos del Basico:</td>
    <td width="50"></td>
    <td width="250" align="left"><strong><?php echo $sucb  ?></strong></td>
  </tr>
</table>
</font>

<br />
<br />
<br />



<font id="sub_titulo"> Notas del Ministerial: </font><br /><br />

<?php
error_reporting(0); 
	include"../conectar.php";
	$sql= "select * from notas where cedula='$_POST[cedula]' AND `curso` = 'Ministerial' ";
			
			
	$consulta=mysql_query($sql,$conexion);
		
$sucm=0;
$aplazado=14;
?>
<font id="texto_p">
<table width="700" border="0" cellspacing="1" cellpadding="0">
  <tr align="center" bgcolor="#CCCCCC"  scope="col" >
    <td width="50">Reg</td>
    <td width="30">Nivel</td>
    <td width="50">Codigo</td>
    <td width="300">Materia</td>
    <td width="20">Notas</td>
    <td width="50">Porcent.</td>
    <td width="30">U.C.</td>
    <td width="70">Fecha</td>
    <td width="70">Instituto</td>
    <td width="50">Observaciones</td>
  </tr>
 <?php while(list($id_notas,$cedula,$instituto,$curso,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta)){
?>
  <tr>
    <td width="50" align="center"><?php echo $id_notas ?></td>
    <td width="30" align="center">
		<?php 
			$sql="SELECT * FROM materia";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $nivel;
			  	}
		 	}
		?>
    </td>
    <td width="50" align="left"><?php echo $codigo ?></td>
    <td width="300" align="left">
		<?php 
			$sql="SELECT * FROM materia";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $materia;
				}
			}
		?>
     </td>
    <td width="20" align="center"><?php echo $nota ?></td>
    <td width="50" align="center"><?php echo (($nota*100)/20)?>%</td>
    <td width="30" align="center">
		<?php 
			$sql="SELECT * FROM materia";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $uc;
					  	if($result){
								$sucm=($uc+$sucm);
						}
			  	}
		 	}
		?>
     </td>
    <td width="70" align="center"><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td>
        <td width="50" align="justify"><?php echo $instituto?></td>
    <td width="50" align="justify"><?php echo $observaciones_notas;
							
							if ($sql){
								if($aplazado>$nota)echo  "<font color='red'>".Aplazada."</font>";
							}	
	?></td>
  </tr>
<?php  }?>
</table>
</font>

<br />



<font id="texto_p">
<table width="700" border="0" cellspacing="1" cellpadding="0">
  <tr align="center">
    <td width="500" align="right">Total de Unidad de Creditos del Ministerial:</td>
    <td width="50"></td>
    <td width="250" align="left"><strong><?php echo $sucm  ?></strong></td>
  </tr>
</table>
</font>

<br />
<br />
<br />

<font id="sub_titulo"> Notas del Licenciatura: </font><br /><br />

<?php
error_reporting(0); 
	include"../conectar.php";
	$sql="select * from notas where cedula='$_POST[cedula]' AND `curso` = 'Licenciatura' ";
	$consulta=mysql_query($sql,$conexion);
		
$sucl=0;
$aplazado=14;
?>
<font id="texto_p">
<table width="700" border="0" cellspacing="1" cellpadding="0">
  <tr align="center" bgcolor="#CCCCCC"  scope="col" >
    <td width="50">Reg</td>
    <td width="30">Nivel</td>
    <td width="50">Codigo</td>
    <td width="300">Materia</td>
    <td width="20">Notas</td>
    <td width="50">Porcent.</td>
    <td width="30">U.C.</td>
    <td width="70">Fecha</td>
    <td width="70">Instituto</td>
    <td width="50">Observaciones</td>
  </tr>

 <?php while(list($id_notas,$cedula,$instituto,$modalicursodad,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta)){
?>
  <tr>
    <td width="50" align="center"><?php echo $id_notas ?></td>
    <td width="30" align="center">
		<?php 
			$sql="SELECT * FROM materia";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $nivel;
			  	}
		 	}
		?>
    </td>
    <td width="50" align="left"><?php echo $codigo ?></td>
    <td width="300" align="left">
		<?php 
			$sql="SELECT * FROM materia";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $materia;
				}
			}
		?>
     </td>
    <td width="20" align="center"><?php echo $nota ?></td>
    <td width="50" align="center"><?php echo (($nota*100)/20)?>%</td>
    <td width="30" align="center">
		<?php 
			$sql="SELECT * FROM materia";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $uc;
					  	if($result){
								$sucl=($uc+$sucl);
						}
			  	}
		 	}
		?>
     </td>
    <td width="70" align="center"><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td>
        <td width="50" align="justify"><?php echo $instituto?></td>
    <td width="50" align="justify"><?php echo $observaciones_notas;
							
							if ($sql){
								if($aplazado>$nota) echo  "<font color='red'>".Aplazada."</font>";
							}?></td>
  </tr>
<?php } ?>
  
</table>
<br />
</font>

<font id="texto_p">
<table width="700" border="0" cellspacing="1" cellpadding="0">
  <tr align="center">
    <td width="500" align="right">Total de Unidad de Creditos del Licenciatura:</td>
    <td width="50"></td>
    <td width="250" align="left"><strong><?php echo $sucl ?></strong></td>
  </tr>
</table>
</font>

<br />
<br />
<br />

<font id="sub_titulo"> Notas del Pensum Viejo: </font><br /><br />

<?php
error_reporting(0); 
	include"../conectar.php";
	$sql="select * from notas where cedula='$_POST[cedula]' AND `curso` = 'Pensum Viejo' ";
	$consulta=mysql_query($sql,$conexion);
		
$sucpv=0;
$aplazado=14;
?>
<font id="texto_p">
<table width="700" border="0" cellspacing="1" cellpadding="0">
  <tr align="center" bgcolor="#CCCCCC"  scope="col" >
    <td width="50">Reg</td>
    <td width="30">Nivel</td>
    <td width="50">Codigo</td>
    <td width="300">Materia</td>
    <td width="20">Notas</td>
    <td width="50">Porcent.</td>
    <td width="30">U.C.</td>
    <td width="70">Fecha</td>
    <td width="70">Instituto</td>
    <td width="50">Observaciones</td>
  </tr>

 <?php while(list($id_notas,$cedula,$instituto,$curso,$codigo,$cedula_codigo,$nota,$fecha_nota,$observaciones_notas)=mysql_fetch_array($consulta)){
?>
  <tr>
    <td width="50" align="center"><?php echo $id_notas ?></td>
    <td width="30" align="center">
		<?php 
			$sql="SELECT * FROM materia";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $nivel;
			  	}
		 	}
		?>
    </td>
    <td width="50" align="left"><?php echo $codigo ?></td>
    <td width="300" align="left">
		<?php 
			$sql="SELECT * FROM materia";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $materia;
				}
			}
		?>
     </td>
    <td width="20" align="center"><?php echo $nota ?></td>
    <td width="50" align="center"><?php echo (($nota*100)/20)?>%</td>
    <td width="30" align="center">
		<?php 
			$sql="SELECT * FROM materia";
	 		$result = mysql_query ($sql,$conexion);
			while(list($id_materia,$codigo_materia,$materia,$curso,$area,$uc,$nivel,$tiempo,$prerrequisitos,$observaciones)=mysql_fetch_array($result)){
				if ($codigo==$codigo_materia){
					 echo $uc;
					  	if($result){
								$sucpv=($uc+$sucpv);
						}
			  	}
		 	}
		?>
     </td>
    <td width="70" align="center"><?php echo date("d-m-Y",strtotime($fecha_nota)) ?></td>
        <td width="50" align="justify"><?php echo $instituto?></td>
    <td width="50" align="justify"><?php echo $observaciones_notas ;
							
							if ($sql){
								if($aplazado>$nota) echo  "<font color='red'>".Aplazada."</font>";
							}?></td>
  </tr>
<?php } ?>
  
</table>
</font>
<br />



<font id="texto_p">
<table width="700" border="0" cellspacing="1" cellpadding="0">
  <tr align="center">
    <td width="500" align="right">Total de Unidad de Creditos del Pensum Cerrados:</td>
    <td width="50"></td>
    <td width="250" align="left"><strong><?php echo $sucpv  ?></strong></td>
  </tr>
</table>
</font>

<br />
<br />
<br />

Total de Unidad De Credito Aprobadas:
<?php 
	$suct=0;
	$suct=($sucb+$sucm+$sucl+$sucpv);
	echo $suct;

?>

</body>
</html>