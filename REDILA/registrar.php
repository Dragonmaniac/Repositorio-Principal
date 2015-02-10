<?php
require("funciones.php");
require("conexion.php");
$conexion = conectar();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar Proyecto</title>
</head>
<body>
	<form id="form1" name="form1" method="post" action="guardar.php">
	<table align="center" width="415" heigth="355">
		<tr>	
			<td>Nº</td>
			<td><input name="nro" id="nro" type="text" readonly="readonly" value="<?php echo nro($conexion) ?>"></td>
			
			<td><label for="codigo">Codigo</label></td>
			<td><input name="codigo" type="text" maxlength="30" placeholder="xxxxxXXXXxxxxx" required autofocus></td>


			<td><label for="nombre">Nombre</label></td>
			<td><input name="nombre" type="text" maxlength="100" placeholder="Acueducto rural" required autofocus></td>
		</tr>
	
<tr align="center">
<td><label for="fecha">Fecha de Aprobación:</label></td>
<td><select name="dia">			            	<option value="0">Dia</option>
												<option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                </select>


<select name="mes">			            		<option value="0">Mes</option>
												<option value="enero">Enero</option>
                                                <option value="febrero">Febrero</option>
                                                <option value="marzo">Marzo</option>
                                                <option value="abril">Abril</option>
                                                <option value="mayo">Mayo</option>
                                                <option value="junio">Junio</option>
                                                <option value="julio">Julio</option>
                                                <option value="agosto">Agosto</option>
                                                <option value="septiembre">Septiembre</option>
                                                <option value="octubre">Octubre</option>
                                                <option value="noviembre">Noviembre</option>
                                                <option value="diciembre">Diciembre</option>
                                                </select>

<select name="anio">		                  	<option value="0">Año</option>
												<option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                </select></td>
</tr>

		<tr>
			<td><label for="inspeccion">Inspección Nº</label></td>
			<td><input name="inspeccion" type="text" maxlength="5" placeholder="00000" required autofocus></td>

			<td><label for="estatus">Estatus</label></td> <td><select name="estatus" required autofocus> 	<option value="nulo">---</option>
																											<option value="iniciado">Iniciado</option>
																											<option value="proceso">En Proceso</option>
																											<option value="abandonado">Abandonado</option>
																											<option value="terminado">Terminado</option>
																											</select></td>
		</tr>
		<tr>
			<td><label for="ubicacion"> Municipio</label></td>
			<td><input name="ubicacion" type="text" maxlength="50" placeholder="Fernadez Feo" required autofocus></td>
		</tr>

		<tr>
			<td><label for="descripcion">Descripción</label></td>
			<td><textarea name="descripcion" maxlength="100" placeholder="Se esta construyendo una vialidad"></textarea></td>
		</tr>

		<tr>
			<td><label for="empresa">Empresa Responsable</label></td>
			<td><input name="empresa" type="text" maxlength="50" placeholder="COCA COLA"></td>
			
			<td><label for="rif">Rif</label></td>
			<td><input name="rif" type="text" maxlength="30" placeholder="j-12.556.899.0"></td>
		</tr>

		<tr>
			<td><label for="ingenieror">Ing. Responsable</label></td>
			<td><input name="ingenieror" type="text" maxlength="30" placeholder="Jessica Redfox"></td>
			
			<td><label for="ingenierorr">Ing. Reed</label></td>
			<td><input name="ingenierorr" type="text" maxlength="30" placeholder="Franklin Márquez"></td>
		</tr>

		<tr>
			<td><label for="avance">Avance</label></td>
			<td><input name="avance" type="text" maxlength="30" placeholder="00000%"></td>
		</tr>

		<tr>
			<td colspan="2"><input name="enviar" type="submit" value="Enviar"/><input name="borrar" type="reset" value="Borrar"/><a href="menu_principal.html"><input name="menu" type="submit" value="Regresar"/></a></td>
		</tr>
	</table>
	</form>
</body>
</html>