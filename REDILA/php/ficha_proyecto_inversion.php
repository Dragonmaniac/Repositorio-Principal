<?php
$codigo = $_GET['cod'];
require("conexion.php");
require("../html2pdf_v4.01/html2pdf.class.php");
$conexion=conectar();
$objPDF=new HTML2PDF("P","Letter","es",true,'UTF-8');

	$sql="select * from proyecto_inversion where codigo='$codigo'";
	$ok=mysql_query($sql,$conexion);
	$registro=mysql_fetch_assoc($ok);

$tabla="<page backtop='30'>
		<page_header><img src='../imagenes/banner.png'/> </page_header>
		<table border='1px' align='center'>

		<tr bgcolor='#C0504D' align='center'>
			<td><label>Nombre de La Obra</label></td><td style='height: 50px; width: 200px;'>$registro[codigo], $registro[nombre].</td>
		</tr>

		<tr align='center'>
			<td><label>Número de Inspección</label></td><td style='height: 50px; width: 200px;'>$registro[inspeccion].</td>
		</tr>

		<tr align='center'>
			<td><label>Fecha de la Inspección</label></td><td style='height: 50px; width: 200px;'>$registro[diains]/$registro[mesins]/$registro[anioins].</td>
		</tr>

		<tr align='center'>
			<td><label>Ubicación</label></td><td style='height: 50px; width: 200px;'>$registro[municipio], $registro[parroquia], $registro[sector].</td>
		</tr>

		<tr align='center'>
			<td><label>Entrevistado</label></td><td style='height: 50px; width: 200px;'>$registro[entrevistado].</td>
		</tr>

		<tr align='center'>
			<td><label>Descripción</label></td><td style='height: 50px; width: 200px;'>$registro[descripcion].</td>
		</tr>

		<tr align='center'>
			<td><label>Ente Responsable</label></td><td style='height: 50px; width: 200px;'>$registro[ente]</td>
		</tr>

		<tr align='center'>
			<td><label>Año de Aprovación</label></td><td style='height: 50px; width: 200px;'>$registro[anio].</td>
		</tr>
		
		<tr align='center'>
			<td><label>Inversión</label></td><td style='height: 50px; width: 200px;'>$registro[inversion]Bs.</td>
		</tr>

		<tr align='center'>
			<td><label>Estatus</label></td><td style='height: 50px; width: 200px;'>$registro[estatus]</td>	
		</tr>

		<tr align='center'>
			<td><label>Coordenadas U.T.M.</label></td><td style='height: 50px; width: 200px;'>Norte: $registro[coordnorte], Este: $registro[coordeste].</td>
		</tr>

		<tr align='center'>
			<td><label>Empresa Ejecutora.</label></td><td style='height: 80px; width: 200px;'>$registro[empresa]
																							  Rif: $registro[rif]
																						  	  Ing. Resd.: $registro[ingenieror]
																							  C.I.V.: $registro[civr]
																							  Ing. Insp.: $registro[ingenieroi]
																							  C.I.V.: $registro[civi]</td>
		</tr>

		<tr align='center'>
			<td><label>Fecha de Inicio.</label></td><td style='height: 50px; width: 200px;'>$registro[diai]/$registro[mesi]/$registro[anioi]</td>
		</tr>

		<tr align='center'>
			<td><label>Fecha de Culminación.</label></td><td style='height: 50px; width: 200px;'>$registro[diac]/$registro[mesc]/$registro[anioc]</td>	
		</tr>

		<tr align='center'>
			<td><label>Avance Fisico.</label></td><td style='height: 50px; width: 200px;'>$registro[avance]%</td>	
		</tr>

		<tr align='center'>
			<td><label>Beneficiados.</label></td><td style='height: 50px; width: 200px;'>$registro[beneficiados] Personas.</td>	
		</tr>

		";

$tabla.="</table>";
$tabla.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla.="</page>";
$objPDF->writeHTML($tabla);
$objPDF->Output("Ficha del Proyecto.pdf","D");
?>