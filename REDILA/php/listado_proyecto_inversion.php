<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script> 
<title>Proyectos Existentes en los Municipios</title>
<script language="JavaScript" type="text/javascript">
<!--
function Confirmar(frm) {

var borrar = confirm("Estás seguro/a de que quiere eliminar estos registros?");

return borrar; //true o false 
}
//-->
</script> 
<meta charset="utf-8">
</head>
<body>


<?php
		require("conexion.php");
		$link=conectar();

		$sql="select * from proyecto_inversion where municipio like 'Andrés Bello' order by nro asc;";
		$sql1="select * from proyecto_inversion where municipio like 'Antonio Rómulo Costa' order by nro asc;";
		$sql2="select * from proyecto_inversion where municipio like 'Ayacucho' order by nro asc;";
		$sql3="select * from proyecto_inversion where municipio like 'Bolívar' order by nro asc;";
		$sql4="select * from proyecto_inversion where municipio like 'Cárdenas' order by nro asc;";
		$sql5="select * from proyecto_inversion where municipio like 'Córdoba' order by nro asc;";
		$sql6="select * from proyecto_inversion where municipio like 'Fernández Feo' order by nro asc;";
		$sql7="select * from proyecto_inversion where municipio like 'Francisco de Miranda' order by nro asc;";
		$sql8="select * from proyecto_inversion where municipio like 'García de Hevia' order by nro asc;";
		$sql9="select * from proyecto_inversion where municipio like 'Guásimos' order by nro asc;";
		$sql10="select * from proyecto_inversion where municipio like 'Independencia' order by nro asc;";
		$sql11="select * from proyecto_inversion where municipio like 'Jáuregui' order by nro asc;";
		$sql12="select * from proyecto_inversion where municipio like 'José María Vargas' order by nro asc;";
		$sql13="select * from proyecto_inversion where municipio like 'Junín' order by nro asc;";
		$sql14="select * from proyecto_inversion where municipio like 'Libertad' order by nro asc;";
		$sql15="select * from proyecto_inversion where municipio like 'Libertador' order by nro asc;";
		$sql16="select * from proyecto_inversion where municipio like 'Lobatera' order by nro asc;";
		$sql17="select * from proyecto_inversion where municipio like 'Michelena' order by nro asc;";
		$sql18="select * from proyecto_inversion where municipio like 'Panamericano' order by nro asc;";
		$sql19="select * from proyecto_inversion where municipio like 'Pedro María Ureña' order by nro asc;";
		$sql20="select * from proyecto_inversion where municipio like 'Rafael Urdaneta' order by nro asc;";
		$sql21="select * from proyecto_inversion where municipio like 'Samuel Darío Maldonado' order by nro asc;";
		$sql22="select * from proyecto_inversion where municipio like 'San Cristóbal' order by nro asc;";
		$sql23="select * from proyecto_inversion where municipio like 'San Judas Tadeo' order by nro asc;";
		$sql24="select * from proyecto_inversion where municipio like 'Seboruco' order by nro asc;";
		$sql25="select * from proyecto_inversion where municipio like 'Simón Rodríguez' order by nro asc;";
		$sql26="select * from proyecto_inversion where municipio like 'Sucre' order by nro asc;";
		$sql27="select * from proyecto_inversion where municipio like 'Torbes' order by nro asc;";
		$sql28="select * from proyecto_inversion where municipio like 'Uribante' order by nro asc;";


		$ok=mysql_query($sql,$link);
		$ok1=mysql_query($sql1,$link);
		$ok2=mysql_query($sql2,$link);
		$ok3=mysql_query($sql3,$link);
		$ok4=mysql_query($sql4,$link);
		$ok5=mysql_query($sql5,$link);
		$ok6=mysql_query($sql6,$link);
		$ok7=mysql_query($sql7,$link);
		$ok8=mysql_query($sql8,$link);
		$ok9=mysql_query($sql9,$link);
		$ok10=mysql_query($sql10,$link);
		$ok11=mysql_query($sql11,$link);
		$ok12=mysql_query($sql12,$link);
		$ok13=mysql_query($sql13,$link);
		$ok14=mysql_query($sql14,$link);
		$ok15=mysql_query($sql15,$link);
		$ok16=mysql_query($sql16,$link);
		$ok17=mysql_query($sql17,$link);
		$ok18=mysql_query($sql18,$link);
		$ok19=mysql_query($sql19,$link);
		$ok20=mysql_query($sql20,$link);
		$ok21=mysql_query($sql21,$link);
		$ok22=mysql_query($sql22,$link);
		$ok23=mysql_query($sql23,$link);
		$ok24=mysql_query($sql24,$link);
		$ok25=mysql_query($sql25,$link);
		$ok26=mysql_query($sql26,$link);
		$ok27=mysql_query($sql27,$link);
		$ok28=mysql_query($sql28,$link);
?>

<script type="text/javascript">
			function imprSelec(andres)
				{
					var ficha_proyecto_inversion=document.getElementById(andres);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha_proyecto_inversion.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>
<div id="listado">
<?php
	//Se deben insertar las tablas que se van a mostrar dentro de un ?php y se muestran con echo para que no exista
	//ningun problema de interfaz

	//La funcion de javascrip va afuera ya que existe algun conflicto con el echo o el php.
		echo "
			
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Andrés Bello</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>

					</tr>";
				}
			echo "</table>
				";
		//El boton de imprimir debe ir fuera del metodo php ya que no funciona dentro del  mismo
	?>
		<center><a href="../reportes/listado_andres_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>


<?php

		echo "
			<div id='antonio'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Antonio Rómulo Costa</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok1))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_antonio_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

	<?php

		echo "
			<div id='ayacucho'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Ayacucho</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok2))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_ayacucho_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

	<?php

		echo "
			<div id='bolivar'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Bolívar</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok3))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_bolivar_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

	<?php

		echo "
			<div id='cardenas'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Cárdenas</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok4))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_cardenas_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

	<?php

		echo "
			<div id='cordoba'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Córdoba</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok5))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_cordoba_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

	<?php

		echo "
			<div id='fernandez'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Fernández Feo</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok6))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_fernandez_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

	<?php

		echo "
			<div id='francisco'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Francisco de Miranda</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok7))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_francisco_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

	<?php

		echo "
			<div id='garcia'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio García de Hevia</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok8))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_garcia_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

	<?php

		echo "
			<div id='guasimos'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Guásimos</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok9))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_guasimos_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

	<?php

		echo "
			<div id='independencia'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Independencia</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok10))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_independencia_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='jauregui'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Jáuregui</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok11))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_jauregui_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='jose'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio José María Vargas</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok12))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_jose_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='junin'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Junín</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok13))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_junin_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='libertad'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Libertad</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok14))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_libertad_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='libertador'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Libertador</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok15))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_libertador_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='libertador'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Lobatera</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok16))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_libertador_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>


<?php

		echo "
			<div id='michelena'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Michelena</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok17))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_michelena_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='panamericano'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Panamericano</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok18))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_panamericano_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='pedro'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Pedro María Ureña</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok19))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_pedro_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='rafael'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Rafael Urdaneta</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok20))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_rafael_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='samuel'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Samuel Darío Maldonado</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok21))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_samuel_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
				<table align='center' border='1px'>
				<h3 align='center'>Municipio San Cristóbal</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok22))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  ";

	?>
	<center><a href="../reportes/listado_sc_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>


<?php

		echo "
			<div id='judas'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio San Judas Tadeo</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok23))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_judas_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='seboruco'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Seboruco</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok24))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_seboruco_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='simon'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Simón Rodríguez</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok25))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_simon_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='sucre'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Sucre</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok26))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_sucre_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

<?php

		echo "
			<div id='torbes'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Torbes</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok27))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_torbes_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

	<?php

		echo "
			<div id='uribante'>
				<table align='center' border='1px'>
				<h3 align='center'>Municipio Uribante</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok28))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='ficha_proyecto_inversion.php?cod=$registro[codigo]' style='text-decoration:none; color:#3399CC;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='editar_proyecto_inversion.php?cod=$registro[codigo]'><img src='../iconos/editar.png' width='25' height='25'></a></td>
						<td><a href='eliminar_proyecto_inversion.php?cod=$registro[codigo]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>
					</tr>";
				}
			echo "</table>
				  </div>";

	?>
	<center><a href="../reportes/listado_uribante_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>

	</div>
<center><a href="javascript:imprSelec('listado')"><img src="../iconos/imprimir.png"></a></center>
</body>
</html>