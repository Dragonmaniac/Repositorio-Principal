<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css"/>
<meta charset="utf-8">
	<title>Proyectos Existentes</title>
</head>
<body>
	<?php
		//$buscar="";
		//$buscar=$_POST['busca'];

		require("conexion.php");
		$link=conectar();
		$tabla=mysql_query("select * from proyecto_inversion where ubicacion like 'Andres Bello' order by codigo asc;");
		$tabla1=mysql_query("select * from proyecto_inversion where ubicacion like 'Antonio Romulo Costa' order by codigo asc;");
		$tabla2=mysql_query("select * from proyecto_inversion where ubicacion like 'Ayacucho' order by codigo asc;");
		$tabla3=mysql_query("select * from proyecto_inversion where ubicacion like 'Bolivar' order by codigo asc;");
		$tabla4=mysql_query("select * from proyecto_inversion where ubicacion like 'Cardenas' order by codigo asc;");
		$tabla5=mysql_query("select * from proyecto_inversion where ubicacion like 'Cordoba' order by codigo asc;");
		$tabla6=mysql_query("select * from proyecto_inversion where ubicacion like 'Fernandez Feo' order by codigo asc;");
		$tabla7=mysql_query("select * from proyecto_inversion where ubicacion like 'Francisco de Miranda' order by codigo asc;");
		$tabla8=mysql_query("select * from proyecto_inversion where ubicacion like 'Garcia de Hevia' order by codigo asc;");
		$tabla9=mysql_query("select * from proyecto_inversion where ubicacion like 'Guasimos' order by codigo asc;");
		$tabla10=mysql_query("select * from proyecto_inversion where ubicacion like 'Independencia' order by codigo asc;");
		$tabla11=mysql_query("select * from proyecto_inversion where ubicacion like 'Jauregui' order by codigo asc;");
		$tabla12=mysql_query("select * from proyecto_inversion where ubicacion like 'Jose Maria Vargas' order by codigo asc;");
		$tabla13=mysql_query("select * from proyecto_inversion where ubicacion like 'Junin' order by codigo asc;");
		$tabla14=mysql_query("select * from proyecto_inversion where ubicacion like 'Libertad' order by codigo asc;");
		$tabla15=mysql_query("select * from proyecto_inversion where ubicacion like 'Libertador' order by codigo asc;");
		$tabla16=mysql_query("select * from proyecto_inversion where ubicacion like 'Lobatera' order by codigo asc;");
		$tabla17=mysql_query("select * from proyecto_inversion where ubicacion like 'Michelena' order by codigo asc;");
		$tabla18=mysql_query("select * from proyecto_inversion where ubicacion like 'Panamericano' order by codigo asc;");
		$tabla19=mysql_query("select * from proyecto_inversion where ubicacion like 'Pedro Maria Ureña' order by codigo asc;");
		$tabla20=mysql_query("select * from proyecto_inversion where ubicacion like 'Rafael Urdaneta' order by codigo asc;");
		$tabla21=mysql_query("select * from proyecto_inversion where ubicacion like 'Samuel Dario Maldonado' order by codigo asc;");
		$tabla22=mysql_query("select * from proyecto_inversion where ubicacion like 'San Cristobal' order by codigo asc;");
		$tabla23=mysql_query("select * from proyecto_inversion where ubicacion like 'San Judas Tadeo' order by codigo asc;");
		$tabla24=mysql_query("select * from proyecto_inversion where ubicacion like 'Seboruco' order by codigo asc;");
		$tabla25=mysql_query("select * from proyecto_inversion where ubicacion like 'Simon Rodriguez' order by codigo asc;");
		$tabla26=mysql_query("select * from proyecto_inversion where ubicacion like 'Sucre' order by codigo asc;");
		$tabla27=mysql_query("select * from proyecto_inversion where ubicacion like 'Torbes' order by codigo asc;");
		$tabla28=mysql_query("select * from proyecto_inversion where ubicacion like 'Uribante' order by codigo asc;");
	?>
	<div class="listados">
	<h1>Listado de Proyectos</h1>
	<div id="listado">
		<div id="andres">
		<script type="text/javascript">
			function imprSelec(andres)
				{
					var ficha=document.getElementById(andres);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Andres Bello</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
           	</div>
			<center><a href="javascript:imprSelec('andres')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>
            
            
		<div id="antonio">
		<script type="text/javascript">
			function imprSelec(antonio)
				{
					var ficha=document.getElementById(antonio);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Antonio Romulo Costa</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla1)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
            </div>
			<center><a href="javascript:imprSelec('antonio')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>


		<div id="ayacucho">
		<script type="text/javascript">
			function imprSelec(ayacucho)
				{
					var ficha=document.getElementById(ayacucho);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Ayacucho</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla2)) {?>

					<tr>
						<td><?php echo $registro['VAR_NUMERO']; ?></td>
						<td><?php echo $registro['VAR_CODIGO'];?></td>
						<td><?php echo $registro['VAR_NOMBRE'];?></td>
						<td><?php echo $registro['VAR_AVANCE'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('ayacucho')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>


		<div id="bolivar">
		<script type="text/javascript">
			function imprSelec(bolivar)
				{
					var ficha=document.getElementById(bolivar);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Bolívar</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla3)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('bolivar')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>


		<div id="cardenas">
		<script type="text/javascript">
			function imprSelec(cardenas)
				{
					var ficha=document.getElementById(cardenas);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Cardenas</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla4)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('cardenas')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>


		<div id="cordoba">
		<script type="text/javascript">
			function imprSelec(cordoba)
				{
					var ficha=document.getElementById(cordoba);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Cordoba</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla5)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('cordoba')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>


		<div id="fernadez">
		<script type="text/javascript">
			function imprSelec(fernadez)
				{
					var ficha=document.getElementById(fernadez);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Fernandez Feo</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla6)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('fernadez')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>


		<div id="francisco">
		<script type="text/javascript">
			function imprSelec(francisco)
				{
					var ficha=document.getElementById(francisco);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Francisco de Miranda</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla7)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			
			</table>
			</div>
			<center><a href="javascript:imprSelec('francisco')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>


		<div id="garcia">
		<script type="text/javascript">
			function imprSelec(garcia)
				{
					var ficha=document.getElementById(garcia);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Garcia de Hevia</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla8)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('garcia')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>


		<div id="guasimos">
		<script type="text/javascript">
			function imprSelec(guasimos)
				{
					var ficha=document.getElementById(guasimos);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Guasimos</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla9)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('guasimos')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>


		<div id="independencia">
		<script type="text/javascript">
			function imprSelec(independencia)
				{
					var ficha=document.getElementById(independencia);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Independencia</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla10)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('independencia')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="jauregui">
		<script type="text/javascript">
			function imprSelec(jauregui)
				{
					var ficha=document.getElementById(jauregui);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Jauregui</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla11)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('jauregui')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="jose">
		<script type="text/javascript">
			function imprSelec(jose)
				{
					var ficha=document.getElementById(jose);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Jose María Vargas</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla12)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('jose')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="junin">
		<script type="text/javascript">
			function imprSelec(junin)
				{
					var ficha=document.getElementById(junin);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Junin</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla13)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('junin')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="libertad">
		<script type="text/javascript">
			function imprSelec(libertad)
				{
					var ficha=document.getElementById(libertad);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Libertad</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla14)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('libertad')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="libertador">
		<script type="text/javascript">
			function imprSelec(libertador)
				{
					var ficha=document.getElementById(libertador);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Libertador</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla15)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('libertador')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="lobatera">
		<script type="text/javascript">
			function imprSelec(lobatera)
				{
					var ficha=document.getElementById(lobatera);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Lobatera</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla16)) {?>

					<tr>
						<td><?php echo $registro['VAR_NUMERO']; ?></td>
						<td><?php echo $registro['VAR_CODIGO'];?></td>
						<td><?php echo $registro['VAR_NOMBRE'];?></td>
						<td><?php echo $registro['VAR_AVANCE'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('lobatera')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="michelena">
		<script type="text/javascript">
			function imprSelec(michelena)
				{
					var ficha=document.getElementById(michelena);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Michelena</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla17)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('michelena')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="panamericano">
		<script type="text/javascript">
			function imprSelec(panamericano)
				{
					var ficha=document.getElementById(panamericano);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Panamericano</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla18)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('panamericano')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>
		

		<div id="pedro">
		<script type="text/javascript">
			function imprSelec(pedro)
				{
					var ficha=document.getElementById(pedro);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Pedro María Ureña</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla19)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('pedro')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="rafael">
		<script type="text/javascript">
			function imprSelec(rafael)
				{
					var ficha=document.getElementById(rafael);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Rafael Urdaneta</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla20)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('rafael')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="samuel">
		<script type="text/javascript">
			function imprSelec(samuel)
				{
					var ficha=document.getElementById(samuel);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Samuel Darío Maldonado</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla21)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('samuel')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="sc">
		<script type="text/javascript">
			function imprSelec(sc)
				{
					var ficha=document.getElementById(sc);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio San Cristóbal</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla22)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<a href="javascript:imprSelec('sc')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a>

		<div id="judas">
		<script type="text/javascript">
			function imprSelec(judas)
				{
					var ficha=document.getElementById(judas);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio San Judas Tadeo</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla23)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('judas')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="seboruco">
		<script type="text/javascript">
			function imprSelec(seboruco)
				{
					var ficha=document.getElementById(seboruco);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Seboruco</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla24)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('seboruco')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="simon">
		<script type="text/javascript">
			function imprSelec(simon)
				{
					var ficha=document.getElementById(simon);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Simon Rodríguez</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla25)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('simon')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="sucre">
		<script type="text/javascript">
			function imprSelec(sucre)
				{
					var ficha=document.getElementById(sucre);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Sucre</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla26)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('sucre')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="torbes">
		<script type="text/javascript">
			function imprSelec(torbes)
				{
					var ficha=document.getElementById(torbes);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Torbes</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla27)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('torbes')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

		<div id="uribante">
		<script type="text/javascript">
			function imprSelec(uribante)
				{
					var ficha=document.getElementById(uribante);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table align="center" border="1px">
				<h3>Municipio Uribante</h3>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla28)) {?>

					<tr>
						<td><?php echo $registro['nro']; ?></td>
						<td><?php echo $registro['codigo'];?></td>
						<td><?php echo $registro['nombre'];?></td>
						<td><?php echo $registro['avance'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<center><a href="javascript:imprSelec('uribantes')"><input name="imprimir" type="button" value="Imprimir Tabla"/></a></center>

	</div>
	<center><a href="javascript:imprSelec('listado')"><input name="imprimir" type="button" value="Imprimir Tablas"/></a>
	<a href="menu_principal.html"><input name="menu" type="submit" value="Regresar"/></a></center>
	</div>
</body>
</html>