<?php

// Incluir conexión a la database
include("conectar.php");
error_reporting(0);
// Definir clave por default
$password_default = "6905685";
// Tablas que requieren modificacion
$tables = ['usuario', 'usuario_e', 'usuario_ibm'];
// Iterar para ejecutar las sentencias sql
foreach ($tables as $table) {
    // Sentencia sql
    mysql_query("UPDATE $table SET clave='md5('".$password_default."')' confirmar_clave='md5('".$password_default."')' WHERE tipo_usuario='Administrador'", $conexion);
}

?>