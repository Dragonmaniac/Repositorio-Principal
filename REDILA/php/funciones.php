<?php

function nro($conexion)
{
	
	$sql = "select max(nro) from proyecto_inversion";
	$resultado = mysql_query($sql,$conexion);
	$x = mysql_fetch_row($resultado);
	if($x[0])
	{
		return $x[0]+1;
	}
	else
	{
		return 1;
	}
}
?>