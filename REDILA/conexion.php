<?php
function conectar()
{
	$conexion = mysql_connect("localhost", "root", "");
	$db = mysql_select_db("",$conexion);
	return $conexion;
}
?>