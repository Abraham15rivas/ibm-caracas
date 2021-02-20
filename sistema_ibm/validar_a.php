<?php
session_start();
include("../conectar.php");
error_reporting(0);
switch($_REQUEST['id'])
{
// Validar Administradores
case 1:
		if ($_REQUEST['usuario']
		&& $_REQUEST['clave']) 
		{
			$query=mysql_query("SELECT * FROM usuario WHERE usuario='$_REQUEST[usuario]'", $conexion);
			$row=mysql_fetch_array($query);
			if($_REQUEST['usuario']==$row['usuario'] && md5($_REQUEST['clave'])==$row['clave'])
			{
				$_SESSION['activo']=1;
				$_SESSION['id_usuario']=$row['id_usuario'];
				$_SESSION['nombre']=$row['nombre'];
				$_SESSION['usuario']=$row['usuario'];
				$_SESSION['cedula']=$row['cedula'];
				$_SESSION['tipo_usuario']=$row['tipo_usuario'];
				if($_SESSION['tipo_usuario']=="Administrador")
				{
					echo "<script>alert('Bienvenido al Portal Administrativo del IBM!!!'); self.location='menu_a.php';</script>";
				}else {
					echo "<script>alert('Bienvenido al Portal Administrativo del IBM!!!'); self.location='menu_a.php';</script>";
				}
			}else{ 
				echo "<script>alert('Datos Incorrectos!!!'); self.location='a_login_a.php';</script>";
			}
		}else{
			echo "<script>alert('Campos Vacios!!!'); self.location='a_login_a.php';</script>";
		}
	break;
	
//// Registro De Usuario administrativo al Sistema 
case 2:
		if($_REQUEST['nombre'] && $_REQUEST['usuario'] && $_REQUEST['cedula'])
			{
			if($_REQUEST['tipo_usuario'])$tp=$_REQUEST['tipo_usuario'];
				else $tp="Administrador";
			if($_REQUEST['idu']) $query= "UPDATE usuario SET
			
			 nombre='".$_REQUEST['nombre']."',
			 usuario='".$_REQUEST['usuario']."',
			 cedula='".$_REQUEST['cedula']."',
			 tipo_usuario='".$tp."'
			 WHERE id_usuario='".$_REQUEST['idu']."'";
				
			else; $query="INSERT INTO usuario VALUES ( 
			'".$_REQUEST['id_usuario']."',
			'".$_REQUEST['cedula']."',
			'".$_REQUEST['nombre']."',
			'".$_REQUEST['apellido']."',
			'".$_REQUEST['correo']."',
			'".$_REQUEST['celular']."',
			'".$_REQUEST['instituto']."',
			'".$_REQUEST['usuario']."',
			md5('".$_REQUEST['clave']."'),
			md5('".$_REQUEST['confirma_clave']."'),
			'".$_REQUEST['pregunta']."',
			'".$_REQUEST['respuesta']."',
			'".$_REQUEST['tipo_usuario']."')";
			$exec=mysql_query($query,$conexion);
				if($exec)
						{ 
							if($_SESSION['activo']) echo "<script>alert('Registro Exitoso!!!'); self.location='a_a_menu.php';</script>";
				else echo "<script>alert('Registro Exitoso !!!'); self.location='a_a_menu.php.php';</script>";
			}else echo "<script>alert('Error en la Operacion, Por Favor Volver a Intentar!!!'); self.location='a_a_menu.php';</script>";
		}else echo "<script>alert('Campos Incompletos, Por Favor Volver a Intentar!!!'); self.location='a_a_menu.php';</script>";
	break;

//// Actualizar Usuario administrativo al Sistema 
case 3:
		if($_REQUEST['nombre'] && $_REQUEST['usuario'] && $_REQUEST['cedula'])
			{
			if($_REQUEST['tipo_usuario'])$tp=$_REQUEST['tipo_usuario'];
				else $tp="Administrador";
			if($_REQUEST['idu']) $query= "UPDATE usuario SET
			
			 nombre='".$_REQUEST['nombre']."',
			 usuario='".$_REQUEST['usuario']."',
			 cedula='".$_REQUEST['cedula']."',
			 tipo_usuario='".$tp."'
			 WHERE id_usuario='".$_REQUEST['idu']."'";
				
			else; $query="INSERT INTO usuario VALUES ( 
			'".$_REQUEST['id_usuario']."',
			'".$_REQUEST['cedula']."',
			'".$_REQUEST['nombre']."',
			'".$_REQUEST['apellido']."',
			'".$_REQUEST['correo']."',
			'".$_REQUEST['celular']."',
			'".$_REQUEST['instituto']."',
			'".$_REQUEST['usuario']."',
			md5('".$_REQUEST['clave']."'),
			md5('".$_REQUEST['confirma_clave']."'),
			'".$_REQUEST['pregunta']."',
			'".$_REQUEST['respuesta']."',
			'".$_REQUEST['tipo_usuario']."')";
			$exec=mysql_query($query,$conexion);
				if($exec)
						{ 
							if($_SESSION['activo']) echo "<script>alert('Registro Exitoso!!!'); self.location='a_a_menu.php';</script>";
				else echo "<script>alert('Registro Exitoso !!!'); self.location='a_a_menu.php.php';</script>";
			}else echo "<script>alert('Error en la Operacion, Por Favor Volver a Intentar!!!'); self.location='a_crear_usuario.php';</script>";
		}else echo "<script>alert('Campos Incompletos, Por Favor Volver a Intentar!!!'); self.location='a_crear_usuario.php';</script>";
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

