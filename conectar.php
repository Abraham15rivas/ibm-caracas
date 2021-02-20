<?php
/*BASE DE DATO EN LA WEB */
//$conexion=mysql_connect("localhost","mineccom_db","16706332") or die ("Error en conexion");
//mysql_select_db("mineccom_db",$conexion) or die ("Error en base de datos hola");


/*BASE DE DATO EN LA PC*/
$conexion=mysql_connect("localhost","root","") or die ("Error en conexion");
mysql_select_db("minec",$conexion) or die ("Error en base de datos");
 ?>