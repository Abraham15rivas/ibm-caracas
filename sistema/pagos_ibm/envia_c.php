<?php 
	if(isset($_POST['asunto'])&&!empty($_POST['asunto'])&&
	isset($_POST['mensaje'])&&!empty($_POST['mensaje']))
{
	$destino = "ibm.caracas@gmail.com";
	$desde = "oswaldo@sistempro.net";
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	mail($destino,$asunto,$mensaje,$desde);
	echo "Correo Enviado..."?> <a href="index.php">inicio</a>;<?php

	}else{
		echo "Problema al Enviar";
	
	
}
		


?>