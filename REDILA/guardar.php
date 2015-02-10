<?php
	require("conexion.php");
	$link=conectar();

	//Recibir variables
	$codigo = $_POST["codigo"];

	$nuevo_VAR_CODIGO = mysql_query("select codigo from proyecto_inversion where codigo = '$codigo'");
		if(mysql_num_rows($nuevo_VAR_CODIGO)>0)
		{
			$salida = "El codigo ya existe";
		}
		else
		{
			$ssql = "insert into proyecto_inversion (nro,codigo,nombre,dia,mes,anio,inspeccion,estatus,ubicacion,descripcion,empresa,rif,ingenieror,ingenierorr,avance) values ('" . $_POST['nro'] . "','" . $_POST['codigo'] . "','" . $_POST['nombre'] . "','" . $_POST['dia'] . "','" . $_POST['mes'] . "','" . $_POST['anio'] . "','" . $_POST['inspeccion'] . "','" . $_POST['estatus'] . "','" . $_POST['ubicacion'] . "','" . $_POST['descripcion'] . "','" . $_POST['empresa'] . "','" . $_POST['rif'] . "','" . $_POST['ingenieror'] . "','" . $_POST['ingenierorr'] . "','" . $_POST['avance'] . "')" ;
		  if (mysql_query($ssql)) 
		  {
		  	$salida = "Insertado Correctamente";
		  }
		  else
		  {
		  	$salida = "No se ha insertado. Este es el error: " . mysql_error();
		  }
		}
	echo "<script language='JavaScript'> alert(\"$salida\"); document.location.href='registrar.php';</script>";
?>