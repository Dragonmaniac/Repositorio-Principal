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
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
<div class="registro">
	<form id="form1" name="form1" method="post" action="guardar_proyecto_inversion.php">
	<table align="center" width="415" heigth="355" >
		<tr>	
			<td>Nº</td>
			<td><input name="nro" id="nro" type="text" readonly value="<?php echo nro($conexion) ?>"></td>
			
			<td><label for="codigo">Codigo:</label></td>
			<td><input name="codigo" type="text" maxlength="30" placeholder="xxxxxXXXXxxxxx" required autofocus></td>


			<td><label for="nombre">Nombre:</label></td>
			<td><input name="nombre" type="text" maxlength="100" placeholder="Acueducto rural" required autofocus></td>
		</tr>
	
		<tr>
        	<td><label for="entrevistado">Entrevistado:</label></td>
       		<td><input name="entrevistado" type="text" maxlength="50" placeholder="Sasha Gray" required autofocus size="30"></td>

			<td> <label for="telef" id="telef">Telefono:</label> </td> <td colspan="2"> <select name="telef">
										<option value="0">selecc</option>
										<option value="0276">0276</option>
										<option value="0416">0416</option> 
										<option value="0426">0426</option>
										<option value="0414">0414</option>
										<option value="0424">0424</option>
										<option value="0412">0412</option>
										
							</select>
			<input name="telefono" type="text" maxlength="7" placeholder="xxxxxxx" /></td> 
		</tr>

		<tr>
			<td><label for="cargo">Cargo Ocupado:</label></td>
        	<td><input name="cargo" type="text" maxlength="50" placeholder="Inspector de acueductos" size="30"></td>
		</tr>

		<tr>
			<td><label for="ente">Ente Responsable:</label></td>
        	<td><input name="ente" type="text" maxlength="100" placeholder="Gobernación, Alcaldia, Ministerio" size="30"></td>
		</tr>

		<tr>

			<td><label for="fecha">Año de Aprobación:</label></td>
			<td><select name="anio">		            <option value="0">Año</option>
        		                                        <option value="2012">2012</option>
                		                                <option value="2013">2013</option>
                        		                        <option value="2014">2014</option>
                                		                <option value="2015">2015</option>
                                        		        </select></td>

			<td><label for="descripcion">Descripción:</label></td>
			<td><textarea name="descripcion" maxlength="200" placeholder="Se esta construyendo una vialidad"></textarea></td>
		</tr>

		<tr>
			<td><label for="inspeccion">Inspección Nº:</label></td>
			<td><input name="inspeccion" type="text" maxlength="5" placeholder="00000" required autofocus></td>

			<td><label for="estatus">Estatus:</label></td> <td><select name="estatus" required autofocus> 	<option value="">--Seleccione--</option>
																											<option value="Sin Iniciar">Sin Iniciar</option>
																											<option value="En Ejecución">En ejecución</option>
																											<option value="Paralizado">Paralizado</option>
																											<option value="Culminado">Culminado</option>
																											</select></td>
		</tr>

		<tr align="center">
			<td><label for="fechains">Fecha de Inspección:</label></td>
			<td colspan="2"><select name="diains">			<option value="0">Dia</option>
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

            <select name="mesins">				<option value="0">Mes</option>
												<option value="Enero">Enero</option>
                                                <option value="Febrero">Febrero</option>
                                                <option value="Marzo">Marzo</option>
                                                <option value="Abril">Abril</option>
                                                <option value="Mayo">Mayo</option>
                                                <option value="Junio">Junio</option>
                                                <option value="Julio">Julio</option>
                                                <option value="Agosto">Agosto</option>
                                                <option value="Septiembre">Septiembre</option>
                                                <option value="Octubre">Octubre</option>
                                                <option value="Noviembre">Noviembre</option>
                                                <option value="Diciembre">Diciembre</option>
                                                </select>

          	<select name="anioins">	          	<option value="0">Año</option>
												<option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                </select>
                                                </td>

		</tr>
		<tr>
			<td><label for="municipio"> Municipio:</label></td><td><select name="municipio">
							
																								<option>--Seleccione--</option>
																								<option value="Andrés Bello">Andrés Bello</option>
																								<option value="Antonio Rómulo Costa">Antonio Rómulo Costa</option>
																								<option value="Ayacucho">Ayacucho</option>
																								<option value="Bolívar">Bolívar</option>
																								<option value="Cárdenas">Cárdenas</option>
																								<option value="Córdoba">Córdoba</option>
																								<option value="Fernández Feo">Fernández Feo</option>
																								<option value="Francisco de Miranda">Francisco de Miranda</option>
																								<option value="García de Hevia">García de Hevia</option>
																								<option value="Guásimos">Guásimos</option>
																								<option value="Independencia">Independencia</option>
																								<option value="Jáuregui">Jáuregui</option>
																								<option value="José María Vargas">José María Vargas</option>
																								<option value="Junín">Junín</option>
																								<option value="Libertad">Libertad</option>
																								<option value="Libertador">Libertador</option>
																								<option value="Lobatera">Lobatera</option>
																								<option value="Michelena">Michelena</option>
																								<option value="Panamericano">Panamericano</option>
																								<option value="Pedro María Ureña">Pedro María Ureña</option>
																								<option value="Rafael Urdaneta">Rafael Urdaneta</option>
																								<option value="Samuel Darío Maldonado">Samuel Darío Maldonado</option>
																								<option value="San Cristóbal">San Cristóbal</option>
																								<option value="San Judas Tadeo">San Judas Tadeo</option>
																								<option value="Seboruco">Seboruco</option>
																								<option value="Simón Rodríguez">Simón Rodríguez</option>
																								<option value="Sucre">Sucre</option>
																								<option value="Torbes">Torbes</option>
																								<option value="Uribante">Uribante</option>
																								</select></td>
			
			<td><label for="parroquia">Parroquia:</label></td>
			<td><input name="parroquia" type="text" maxlength="50" placeholder="La Concordia" required autofocus></td>

			<td><label for="sector">Sector</label></td>
			<td><input name="sector" type="text" maxlength="50" placeholder="Las Pilas" required autofocus></td>
		</tr>

		<tr>
					</tr>

		<tr>
			<td><label for="inversion">Inversión:</td>
			<td><input name="inversion" type="text" size="8" maxlength="50" placeholder="5.000.000">Bs</td>
			<td><label for="coordenadas">Coordenadas U.T.M.:</label></td>
			<td colspan="2"><input name="coordnorte" size="10" type="text" maxlength="9" placeholder="Norte"><input name="coordeste" size="10" type="text" maxlength="9" placeholder="Este"></td>

		</tr>

		<tr>
			<td><label for="empresa">Empresa Ejecutora:</label></td>
			<td><input name="empresa" type="text" maxlength="50" placeholder="COCA COLA"></td>
			
			<td><label for="rif">Rif:</label></td>
			<td><input name="rif" type="text" maxlength="30" placeholder="j-12.556.899.0"></td>
		</tr>

		<tr>
			<td><label for="ingenieror">Ing. Residente:</label></td>
			<td><input name="ingenieror" type="text" maxlength="30" placeholder="Jessica Redfox"></td>
			
			<td><label for="civr">C.I.V.:</label></td>
			<td><input name="civr" type="text" maxlength="20" placeholder="x-xxxxxxxxxx"></td>
		</tr>

		<tr>
			<td><label for="ingenieroi">Ing. Inspector:</label></td>
			<td><input name="ingenieroi" type="text" maxlength="30" placeholder="Franklin Márquez"></td>

			<td><label for="civi">C.I.V.:</label></td>
			<td><input name="civi" type="text" maxlength="20" placeholder="x-xxxxxxxxxx"></td>
		</tr>

		<tr>
			<td><label for="avance">Avance Fisíco:</label></td>
			<td><input name="avance" type="text" size="8" maxlength="5" placeholder="00000">%</td>
		</tr>

		<tr>
			<td><label for="fechai">Fecha de Inicio:</label></td>
			<td colspan="2"><select name="diai">			<option value="0">Dia</option>
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

			<select name="mesi">			    <option value="0">Mes</option>
												<option value="Enero">Enero</option>
                                                <option value="Febrero">Febrero</option>
                                                <option value="Marzo">Marzo</option>
                                                <option value="Abril">Abril</option>
                                                <option value="Mayo">Mayo</option>
                                                <option value="Junio">Junio</option>
                                                <option value="Julio">Julio</option>
                                                <option value="Agosto">Agosto</option>
                                                <option value="Septiembre">Septiembre</option>
                                                <option value="Octubre">Octubre</option>
                                                <option value="Noviembre">Noviembre</option>
                                                <option value="Diciembre">Diciembre</option>
                                                </select>

<select name="anioi">		                  	<option value="0">Año</option>
												<option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                </select></td>
		</tr>

		<tr>
			<td><label for="valla">Existencia de Valla:</label></td>
			<td><input type="radio" name="valla" value="Sí" required autofocus>Sí
				<input type="radio" name="valla" value="No" required autofocus>No</td>
		</tr>

		<tr>
			<td><label for="fechac">Fecha de Culminación:</label></td>
			<td colspan="2"><select name="diac">			<option value="0">Dia</option>
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

				<select name="mesc">			<option value="0">Mes</option>
												<option value="Enero">Enero</option>
                                                <option value="Febrero">Febrero</option>
                                                <option value="Marzo">Marzo</option>
                                                <option value="Abril">Abril</option>
                                                <option value="Mayo">Mayo</option>
                                                <option value="Junio">Junio</option>
                                                <option value="Julio">Julio</option>
                                                <option value="Agosto">Agosto</option>
                                                <option value="Septiembre">Septiembre</option>
                                                <option value="Octubre">Octubre</option>
                                                <option value="Noviembre">Noviembre</option>
                                                <option value="Diciembre">Diciembre</option>
                                                </select>

<select name="anioc">		                  	<option value="0">Año</option>
												<option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                </select></td>
		</tr>

		<tr>
			<td><label for="beneficiados">Beneficiados:</label></td>
			<td><input name="beneficiados" type="text" size="8" maxlength="20" placeholder="5000">Personas</td>
		</tr>


		<tr>
			<td colspan="50"><input name="enviar" type="submit" value="Enviar"/><input name="borrar" type="reset" value="Borrar"/><a href="menu_principal.html"><input name="menu" type="submit" value="Regresar"/></a></td>
		</tr>
	</table>
	</form>
	</div>
</body>
</html>