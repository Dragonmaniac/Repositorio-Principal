<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar Proyecto</title>
</head>
<body>
	<form>
	<table>
		<tr>	
			<td><label for="numero">Nº de Planilla</label></td>
			<td><input name="numero" type="text" maxlength="8" size="5"></td>
			
			<td><label for="codigo">Codigo</label></td>
			<td><input name="codigo" type="text" maxlength="8" placeholder="xxxxxXXXXxxxxx" required autofocus></td>


			<td><label for="nombre">Nombre</label></td>
			<td><input name="nombre" type="text" maxlength="20" placeholder="Acueducto rural" required autofocus></td>
		</tr>

		<tr>
			<td><label for="fecha">Fecha</td></label>
			<td><input name="fecha" type="text" maxlength="10" placeholder="DD/MM/AAAAA"></td>

			<td><label for="inspeccion">Inspección Nº</label></td>
			<td><input name="inspeccion" type="text" maxlength="5" placeholder="00000" required autofocus></td>

			<td><label for="estatus">Estatus</label></td>
			<td><input name="estatus" type="text" maxlength="10" placeholder="ESTATUS QUO"></td>
		</tr>

		<tr>
			<td><label for="ubicacion"> Ubicación</label></td>
			<td><input name="ubicacion" type="text" maxlength="20" placeholder="Municipio Fernadez Feo"></td>
		</tr>

		<tr>
			<td><label for="descripcion">Descripción</label></td>
			<td><textarea name="descripcion" maxlength="100" placeholder="Se esta construyendo una vialidad"></textarea></td>
		</tr>

		<tr>
			<td><label for="empresar">Empresa Responsable</label></td>
			<td><input name="empresar" type="text" maxlength="20" placeholder="COCA COLA"></td>
			
			<td><label for="rif">Rif</label></td>
			<td><input name="rif" type="text" maxlength="10" placeholder="j-12.556.899.0"></td>
		</tr>

		<tr>
			<td><label for="ingenieror">Ing. Responsable</label></td>
			<td><input name="ingenieror" type="text" maxlength="20" placeholder="Jessica Redfox"></td>
			
			<td><label for="ingenierorr">Ing. Reed</label></td>
			<td><input name="ingenierorr" type="text" maxlength="20" placeholder="Franklin Márquez"></td>
		</tr>

		<tr>
			<td><label for="avance">Avance</label></td>
			<td><input name="avance" type="text" maxlength="20" placeholder="00000%"></td>
		</tr>

		<tr>
			<td colspan="2"><input name="enviar" type="submit" value="Enviar"/><input name="borrar" type="reset" value="Borrar"/></td>
		</tr>
	</table>
	</form>
</body>
</html>