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
			$ssql = "insert into proyecto_inversion (nro,codigo,nombre,entrevistado,telef,telefono,cargo,ente,anio,descripcion,inspeccion,estatus,diains,mesins,anioins,municipio,parroquia,sector,inversion,coordnorte,coordeste,empresa,rif,ingenieror,civr,ingenieroi,civi,avance,diai,mesi,anioi,valla,diac,mesc,anioc,beneficiados) values ('" . $_POST['nro'] . "','" . $_POST['codigo'] . "','" . $_POST['nombre'] . "','" . $_POST['entrevistado'] . "','" . $_POST['telef'] . "','" . $_POST['telefono'] . "','" . $_POST['cargo'] . "','" . $_POST['ente'] . "','" . $_POST['anio'] . "','" . $_POST['descripcion'] . "','" . $_POST['inspeccion'] . "','" . $_POST['estatus'] . "','" . $_POST['diains'] . "','" . $_POST['mesins'] . "','" . $_POST['anioins'] . "','" . $_POST['municipio'] . "','" . $_POST['parroquia'] . "','" . $_POST['sector'] . "','" . $_POST['inversion'] . "','" . $_POST['coordnorte'] . "','" . $_POST['coordeste'] . "','" . $_POST['empresa'] . "','" . $_POST['rif'] . "','" . $_POST['ingenieror'] . "','" . $_POST['civr'] . "','" . $_POST['ingenieroi'] . "','" . $_POST['civi'] . "','" . $_POST['avance'] . "','" . $_POST['diai'] . "','" . $_POST['mesi'] . "','" . $_POST['anioi'] . "','" . $_POST['valla'] . "','" . $_POST['diac'] . "','" . $_POST['mesc'] . "','" . $_POST['anioc'] . "','" . $_POST['beneficiados'] . "')" ;
		  if (mysql_query($ssql)) 
		  {
		  	$salida = "Insertado Correctamente";
		  }
		  else
		  {
		  	$salida = "No se ha insertado. Este es el error: " . mysql_error();
		  }
		}
	echo "<script language='JavaScript'> alert(\"$salida\"); document.location.href='registrar_proyecto_inversion.php';</script>";
?>