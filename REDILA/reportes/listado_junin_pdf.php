<?php
require("conexion.php");
require("../html2pdf_v4.01/html2pdf.class.php");
$conexion=conectar();
/*instanciamos un objeto de la clase html2pdf*/
$objPDF=new HTML2PDF("L","Letter","es",true,'UTF-8');

$tabla="<page backtop='30'>
		<page_header><img src='../imagenes/banner.png'/> </page_header>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql="select * from proyecto_inversion where municipio like 'Junín' order by nro asc;";
$ok=mysql_query($sql,$conexion);
while(($datos=mysql_fetch_assoc($ok))>0)
{
	$tabla.="<tr align='center'>
						<td>$datos[nro]</td>
						<td>$datos[ente]</td>
						<td>$datos[anio]</td>
						<td>$datos[codigo]</td>
						<td style='width:100px; height:80px'>$datos[nombre]</td>
						<td>$datos[inspeccion]</td>
						<td>$datos[estatus]</td>
						
			</tr>";
}
$tabla.="</table>";
$tabla.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla.="</page>";
/*ahora llamamos a la funcion writeHTml para escribir la variaable $tabla en un archivo con formato PDF*/
$objPDF->writeHTML($tabla);
/*el ultimo paso es generar el archivo especificamente el destino(ventana emrgente o dentro del navegador)*/
$objPDF->Output("Listado_Municipio_Junín.pdf","D");
?>