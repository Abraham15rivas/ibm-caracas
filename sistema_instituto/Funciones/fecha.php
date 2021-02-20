<?php $mes=date("F");

if ($mes=="January") $mes="Enero";
if ($mes=="February") $mes="Febrero";
if ($mes=="March") $mes="Marzo";
if ($mes=="April") $mes="Abril";
if ($mes=="May") $mes="Mayo";
if ($mes=="June") $mes="Junio";
if ($mes=="July") $mes="Julio";
if ($mes=="August") $mes="Agosto";
if ($mes=="September") $mes="Setiembre";
if ($mes=="October") $mes="Octubre";
if ($mes=="November") $mes="Noviembre";
if ($mes=="December") $mes="Diciembre";

?>
<?php 

echo date("d");
echo " "; 
echo de;
echo " "; 
echo "$mes ";
echo de;
echo " ";
echo date("Y");

function CrearFecha($FechaUS){
	list ($dia, $mes, $año) = split("-",$FechaUS);
	
	return    $dia. ' días del mes de '.NombreMes($mes).' del '.$año; 
}

function NombreMes($numMes){
	switch ($numMes){
		case 01:
			return "Enero";
			break;
		case 02:
			return "Febrero";
			break;
		case 03:
			return "Marzo";
			break;
		case 04:
			return "Abril";
			break;
		case 05:
			return "Mayo";
			break;
		case 06:
			return "Junio";
			break;
		case 07:
			return "Julio";
			break;
		case 08:
			return "Agosto";
			break;
		case 09:
			return "Septiembre";
			break;
		case 10:
			return "Octubre";
			break;
		case 11:
			return "Noviembre";
			break;
		case 12:
			return "Diciembre";
			break;
		
		}
	
	
}

	





?>

