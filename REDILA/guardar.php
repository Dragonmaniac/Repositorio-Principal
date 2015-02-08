<?php
	require("conexion.php");
	$link=conectar():

	//Recibir variables
	$variables = $_POST[""];

	$nuevo_VAR_CODIGO = mysql_query("select VAR_CODIGO from TABLA where VAR_CODIGO = '$VAR_CODIGO'");
		if(mysql_num_rows($nuevo_VAR_CODIGO)>0)
		{
			$salida = "El codigo ya existe";
		}
		else
		{
			$ssql = "insert into TABLA (VAR_CODIGO) values ('" . $_POST['VAR_CODIGO'] . "')" ;
		  if (mysql_query($ssql)) 
		  {
		  	$salida = "Insertado Correctamente";
		  }
		  else
		  {
		  	$salida = "No se ha insertado. Este es el error: " . mysql_error();
		  }
		}
	echo "<script language='JavaScript'> alert(\"$salida\"); document.location.href='registar.php';</script>";
?>