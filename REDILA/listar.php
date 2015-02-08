<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Proyectos Existentes</title>
</head>
<body>
	<?php
		//$buscar="";
		//$buscar=$_POST['busca'];

		require("conexion.php");
		$link=conectar();
		$tabla=mysql_query("select * from TABLA order by VAR_CODIGO asc;")
	?>

		<h1>Listado de Proyectos</h1>

		<div id="muestra">
		<script type="text/javascript">
			function imprSelec(muestra)
				{
					var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

			<table>
					<tr>
						<th scope="col">N°</th>
						<th scope="col">Codigo</th>
						<th scope="col">Nombre del Proyecto</th>
						<th scope="col">Avance</th>
					</tr>
				<?php while ($registro = mysql_fetch_array($tabla)) {?>

					<tr>
						<td><?php echo $registro['VAR_NUMERO']; ?></td>
						<td><?php echo $registro['VAR_CODIGO'];?></td>
						<td><?php echo $registro['VAR_NOMBRE'];?></td>
						<td><?php echo $registro['VAR_AVANCE'];?></td>
					</tr>
				<?php }	?>
			</table>
			</div>
			<input type="button" value="Imprimir Tabla" onclick="javascript:imprSelec('muestra');function imprSelec(muestra) 
			{var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();};" />
			<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
			<a href="menu_principal.html"><input name="menu" type="submit" value="Regresar"/></a></div>
</body>
</html>