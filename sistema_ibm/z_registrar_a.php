<?php
session_start();
include("../conectar.php");
error_reporting(0);
switch($_REQUEST['id'])
{

///REGISTRAR Estudiantes
	case 1:
		if($_POST['cedula']){ 
		$sql="insert into estudiante values(
					'$_POST[id_estudiante]',
					'$_POST[cedula]',
					'$_POST[nombre_1]',
					'$_POST[nombre_2]',
					'$_POST[apellido_1]',
					'$_POST[apellido_2]',
					'$_POST[telefono]',
					'$_POST[correo]',
					'$_POST[instituto]',
					'$_POST[sede]',
					'$_POST[modalidad]',
					'$_POST[curso]',
					'$_POST[nivel]',
					'$_POST[estatus]',
					'$_POST[fecha_ingreso]',
					'$_POST[fecha_egreso]',
					
					'$_POST[notas]')";

		$registro=mysql_query($sql,$conexion);
			if($registro){
					echo "Estudiante registrado con exito";?> <script> alert("Estudiante registrado con exito");</script><?php 
		 					if($_POST['cedula']){
											include"a_a_menu.php";}
			
			}else{
					echo "ESTUDIANTE YA EXISTE";?> <script> alert("ESTUDIANTE YA EXISTE") </script><?php 
					include"a_a_menu.php";
			}
		}else{
			  echo "CEDULA ES OBLIGATORIO";?> <script> alert("CEDULA ES OBLIGATORIO");</script><?php 
			  include"a_registro_ministros.php";
		}
	break;
	
//// REGISTRAR INSTITUTO
	case 2:
		if($_POST['cod']){
		$sql="insert into instituto values(
					'$_POST[cod]',
					'$_POST[id_instituto]',
					'$_POST[letra_rif]',
					'$_POST[rif]',
					'$_POST[nombre_legal]',
					'$_POST[nombre_abreviado]',
					'$_POST[telefono]',
					'$_POST[celular]',
					'$_POST[correo]',
					'$_POST[pagina_web]',
					'$_POST[estado]',
					'$_POST[ciudad]',
					'$_POST[direccion]',
					'$_POST[zona]',
					'$_POST[pastor]',
					'$_POST[estatus]',
					'$_POST[notas]')";
		$registro=mysql_query($sql,$conexion);
			if($registro){
					echo "Instituto registrada con exito";?> <script> alert("Instituto registrado con exito");</script><?php 
		 					if($_POST['rif']){
											include"a_a_menu.php";}
			
			}else{
					echo "Instituto YA EXISTE";?> <script> alert("Instituto YA EXISTE") </script><?php 
					include"a_registro_instituto.php";
			}
		}else{
			  echo "RIF ES OBLIGATORIO";?> <script> alert("RIF ES OBLIGATORIO");</script><?php 
			  include"a_registro_insituto.php";
		}
	break;

///REGISTRAR Estudiantes
	case 3:
		if($_POST['cedula']){ 
		$sql="insert into profesor values(
					'$_POST[id_profesor]',
					'$_POST[cedula]',
					'$_POST[nombre_1]',
					'$_POST[nombre_2]',
					'$_POST[apellido_1]',
					'$_POST[apellido_2]',
					'$_POST[notas]')";

		$registro=mysql_query($sql,$conexion);
			if($registro){
					echo "Profesor registrado con exito";?> <script> alert("Profesor Registrado con exito");</script><?php 
		 					if($_POST['cedula']){
											include"a_a_menu.php";}
			
			}else{
					echo "profesor YA EXISTE";?> <script> alert("PROFESOR YA EXISTE") </script><?php 
					include"a_a_menu.php";
			}
		}else{
			  echo "CEDULA ES OBLIGATORIO";?> <script> alert("CEDULA ES OBLIGATORIO");</script><?php 
			  include"a_registro_ministros.php";
		}
	break;	
	
	
	
///REGISTRAR MATERIA
	case 5:
		if($_POST['codigo']){
		$sql="insert into materia values(
					'$_POST[id_materia]',
					'$_POST[codigo]',
					'$_POST[materia]',
					'$_POST[modalidad]',
					'$_POST[nivel]',
					'$_POST[creditos]',
					'$_POST[notas]')";

		$registro=mysql_query($sql,$conexion);
			if($registro){
					echo "Materia registrada con exito";?> <script> alert("Materia Registrado con exito");</script><?php 
		 					if($_POST['codigo']){
											include"a_a_menu.php";}
			
			}else{
					echo "Materia YA EXISTE";?> <script> alert("MATERIA YA EXISTE") </script><?php 
					include"a_a_menu.php";
			}
		}else{
			  echo "CODIGO ES OBLIGATORIO";?> <script> alert("CODIGO ES OBLIGATORIO");</script><?php 
			  include"a_registro_ministros.php";
		}
	break;		


///SALIR DEL SISTEMA
	case 4:
	session_start(); 
$_SESSION=array(); 
session_destroy(); 
//lo redirecciono a la página anterior 
echo "<script>alert('Bay'); self.location='login.php';</script>";
}
?>

