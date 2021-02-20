<?php
session_start();
include("conectar.php");
error_reporting(0);
switch($_REQUEST['id'])
{
// Validar Administradores
	case 1:
		if ($_REQUEST['usuario']&& $_REQUEST['clave']) 
		
		{
			$query=mysql_query("SELECT * FROM usuario WHERE usuario='$_REQUEST[usuario]' AND tipo_usuario='Administrador'", $conexion);
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
					echo "<script>alert('Usted esta entrando al SANECAD'); self.location='sistema/a_a_menu.php';</script>";
				}else {
					echo "<script>alert('Usted esta entrando al SANECAD'); self.location='sistema/a_a_menu.php';</script>";
				}
			}else{ 
				echo "<script>alert('Datos Incorrectos!!!'); self.location='a_sistema.php';</script>";
			}
		}else{
			echo "<script>alert('Campos Vacios!!!'); self.location='a_sistema.php';</script>";
		}
	break;
	
// Validar Institutos
	case 2:
		if ($_REQUEST['usuario']&& $_REQUEST['clave']) 
		
		{
			$query=mysql_query("SELECT * FROM usuario WHERE usuario='$_REQUEST[usuario]' AND tipo_usuario='Instituto'", $conexion);
			$row=mysql_fetch_array($query);
			if($_REQUEST['usuario']==$row['usuario'] && md5($_REQUEST['clave'])==$row['clave'])
			{
				$_SESSION['activo']=1;
				$_SESSION['id_usuario']=$row['id_usuario'];
				$_SESSION['nombre']=$row['nombre'];
				$_SESSION['usuario']=$row['usuario'];
				$_SESSION['cedula']=$row['cedula'];
				$_SESSION['tipo_usuario']=$row['tipo_usuario'];
				if($_SESSION['tipo_usuario']=="Instituto")
				{
					echo "<script>alert('Usted esta entrando al SANECAD'); self.location='sistema_instituto/a_a_menu.php';</script>";
				}else {
					echo "<script>alert('Usted esta entrando al SANECAD'); self.location='sistema_instituto/a_a_menu.php';</script>";
				}
			}else{ 
				echo "<script>alert('Datos Incorrectos!!!'); self.location='a_sistema_instituto.php';</script>";
			}
		}else{
			echo "<script>alert('Campos Vacios!!!'); self.location='a_sistema_instituto.php';</script>";
		}
	break;

// Validar Profesor
	case 3:
		if ($_REQUEST['usuario']&& $_REQUEST['clave']) 
		
		{
			$query=mysql_query("SELECT * FROM usuario WHERE usuario='$_REQUEST[usuario]' AND tipo_usuario='Profesor'", $conexion);
			$row=mysql_fetch_array($query);
			if($_REQUEST['usuario']==$row['usuario'] && md5($_REQUEST['clave'])==$row['clave'])
			{
				$_SESSION['activo']=1;
				$_SESSION['id_usuario']=$row['id_usuario'];
				$_SESSION['nombre']=$row['nombre'];
				$_SESSION['usuario']=$row['usuario'];
				$_SESSION['cedula']=$row['cedula'];
				$_SESSION['tipo_usuario']=$row['tipo_usuario'];
				if($_SESSION['tipo_usuario']=="Profesor")
				{
					echo "<script>alert('Usted esta entrando al SANECAD'); self.location='sistema_profesor/a_a_menu.php';</script>";
				}else {
					echo "<script>alert('Usted esta entrando al SANECAD'); self.location='sistema_profesor/a_a_menu.php';</script>";
				}
			}else{ 
				echo "<script>alert('Datos Incorrectos!!!'); self.location='a_sistema_profesor.php';</script>";
			}
		}else{
			echo "<script>alert('Campos Vacios!!!'); self.location='a_sistema_profesor.php';</script>";
		}
	break;		
		
	

// Validar Estudiante
	case 4:
		if ($_REQUEST['usuario']&& $_REQUEST['clave']) 
		
		{
			$query=mysql_query("SELECT * FROM usuario_e WHERE usuario='$_REQUEST[usuario]' AND tipo_usuario='Estudiante'", $conexion);
			$row=mysql_fetch_array($query);
			if($_REQUEST['usuario']==$row['usuario'] && md5($_REQUEST['clave'])==$row['clave'])
			{
				$_SESSION['activo']=1;
				$_SESSION['id_usuario']=$row['id_usuario'];
				$_SESSION['nombre']=$row['nombre'];
				$_SESSION['usuario']=$row['usuario'];
				$_SESSION['cedula']=$row['cedula'];
				$_SESSION['tipo_usuario']=$row['tipo_usuario'];
				if($_SESSION['tipo_usuario']=="Estudiante")
				{
					echo "<script>alert('Usted esta entrando al SANECAD'); self.location='sistema_estudiante/a_a_menu.php';</script>";
				}else {
					echo "<script>alert('Usted esta entrando al SANECAD'); self.location='sistema_estudiante/a_a_menu.php';</script>";
				}
			}else{ 
				echo "<script>alert('Datos Incorrectos!!!'); self.location='a_sistema_estudiante.php';</script>";
			}
		}else{
			echo "<script>alert('Campos Vacios!!!'); self.location='a_sistema_estudiante.php';</script>";
		}
	break;		

//Registro de Estudiantes
case 5:
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
				
			else; $query="INSERT INTO usuario_e VALUES ( 
			'".$_REQUEST['id_usuario_e']."',
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
							if($_SESSION['activo']) echo "<script>alert('Registro Exitoso!!!'); self.location='a_sistema_estudiante.php';</script>";
				else echo "<script>alert('Registro Exitoso !!!'); self.location='a_sistema_estudiante.php';</script>";
			}else echo "<script>alert('Error en la Operacion, o Estudiante ya existe Por Favor Volver a Intentar!!!'); self.location='a_sistema_estudiante_registrar.php';</script>";
		}else echo "<script>alert('Campos Incompletos, Por Favor Volver a Intentar!!!'); self.location='a_sistema_estudiante_registrar.php';</script>";
	break;
	
//// Registro del personal administrativo al Sistema 
	case 5:
		if($_REQUEST['nombre'] && $_REQUEST['usuario'] && $_REQUEST['cedula'])
		{
			if($_REQUEST['tipo_usuario'])$tp=$_REQUEST['tipo_usuario'];
			else $tp="Administrador";
			if($_REQUEST['idu']) $query="UPDATE usuario_a SET nombre='".$_REQUEST['nombre']."', usuario='".$_REQUEST['usuario']."', cedula='".$_REQUEST['cedula']."',tipo_usuario='".$tp."' WHERE id_usuario='".$_REQUEST['idu']."'";
			else $query="INSERT INTO usuario_a VALUES ('', '".$_REQUEST['cedula']."', '".$_REQUEST['nombre']."', '".$_REQUEST['usuario']."',md5('".$_REQUEST['clave']."'), '".$tp."')";
			$exec=mysql_query($query, $conexion);
			if($exec)
			{
				if($_SESSION['activo']) echo "<script>alert('Registro Exitoso !!!'); self.location='a_sistema_estudiante.php';</script>";
				else echo "<script>alert('Registro Exitoso !!!'); self.location='a_sistema_estudiante.php';</script>";
			}else echo "<script>alert('Error en la Operacion, Por Favor Volver a Intentar!!!'); self.location='a_sistema_estudiante_registrar.php';</script>";
		}else echo "<script>alert('Campos Incompletos, Por Favor Volver a Intentar!!!'); self.location='a_sistema_estudiante_registrar.php';</script>";
	break;
	
// Validar Personal Administrativo DEL IBM
	case 6:
	if ($_REQUEST['usuario']&& $_REQUEST['clave']) 
		
		{
			$query=mysql_query("SELECT * FROM usuario_ibm WHERE usuario='$_REQUEST[usuario]' AND tipo_usuario='Administrador'", $conexion);
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
					echo "<script>alert('Usted esta entrando al SANECAD'); self.location='sistema_ibm/a_a_menu.php';</script>";
				}else {
					echo "<script>alert('Usted esta entrando al SANECAD'); self.location='sistema_ibm/a_a_menu.php';</script>";
				}
			}else{ 
				echo "<script>alert('Datos Incorrectos!!!'); self.location='a_sistema_ibm.php';</script>";
			}
		}else{
			echo "<script>alert('Campos Vacios!!!'); self.location='a_sistema_ibm.php';</script>";
		}
	break;
	
	
	

///SALIR DEL SISTEMA
	case 7:
	session_start(); 
$_SESSION=array(); 
session_destroy(); 
//lo redirecciono a la página anterior 
echo "<script>alert('Bay'); self.location='login.php';</script>";
}
?>

