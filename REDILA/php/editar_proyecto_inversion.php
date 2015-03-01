<?php
$codigo=$_GET['cod'];
require("conexion.php");
$conexion=conectar();

$sql="select * from proyecto_inversion where codigo='$codigo'";
$ok=mysql_query($sql,$conexion);
$cliente=mysql_fetch_assoc($ok);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Proyecto</title>
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
<div class="registro">
	<form  method="POST" action="modificar_proyecto_inversion.php">
	<table align="center" width="415" heigth="355">
		<tr>	
			<td>Nº</td>
			<td><input name="nro" id="nro" type="text" readonly="readonly" value="<?php echo $cliente['nro'] ?>"></td>

			
			<td><label for="codigo">Codigo:</label></td>
			<td><input name="codigo" type="text" maxlength="30" placeholder="xxxxxXXXXxxxxx" required autofocus value="<?php echo $cliente['codigo'] ?>"></td>


			<td><label for="nombre">Nombre:</label></td>
			<td><input name="nombre" type="text" maxlength="100" placeholder="Acueducto rural" required autofocus value="<?php echo $cliente['nombre'] ?>"></td>
		</tr>
		
		<tr>
        	<td><label for="entrevistado">Entrevistado:</label></td>
       		<td><input name="entrevistado" type="text" maxlength="50" placeholder="Sasha Gray" required autofocus size="30" value="<?php echo $cliente['entrevistado'] ?>"></td>

			<td>Telefono:</td>
			
		<td colspan="3">

			<?php
    
    
	echo "<select name='telef'  id='telef' required>";
	echo "<option>Seleccione...</option>";

	if($cliente['telef']==276)
	{
	echo "<option value='276' selected>0276</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
	}
										
	if($cliente['telef']==416)
	{
	echo "<option value='276'>0276</option>";
    echo "<option value='416' selected>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
	}									

if($cliente['telef']==426)
	{
	echo "<option value='276'>0276</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426' selected>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
	}

	if($cliente['telef']==414)
	{
	echo "<option value='276'>0276</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414' selected>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
	}

	if($cliente['telef']==424)
	{
	echo "<option value='276'>0276</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424' selected>0424</option>";
    echo "<option value='412'>0412</option>";
	}
							
	if($cliente['telef']==412)
	{
	echo "<option value='276'>0276</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412' selected>0412</option>";
	}
	 echo "</select>";
	?>
	
 

			<input name="telefono" type="text" maxlength="7" placeholder="xxxxxxx" value="<?php echo $cliente['telefono'] ?>"/></td>
		</tr>

		<tr>
			<td><label for="cargo">Cargo Ocupado:</label></td>
        	<td><input name="cargo" type="text" maxlength="50" placeholder="Inspector de acueductos" size="30" value="<?php echo $cliente['cargo'] ?>"></td>
		</tr>

		<tr>
			<td><label for="ente">Ente Responsable:</label></td>
        	<td><input name="ente" type="text" maxlength="50" placeholder="Gobernación, Alcaldia, Ministerio" size="30" value="<?php echo $cliente['ente'] ?>"></td>
		</tr>

		<tr>

			<td>Año de Aprobación:</td>
			<td>
			<?php
			echo"<select name='anio' id='anio' required>";		            
			echo"<option>Año</option>";

			if ($cliente['anio']==2012)
			{

				echo"<option value='2012' selected>2012</option>";
             	echo"<option value='2013'>2013</option>";
                echo"<option value='2014'>2014</option>";
                echo"<option value='2015'>2015</option>";

			}			
        		
        	if ($cliente['anio']==2013)
			{

				echo"<option value='2012'>2012</option>";
             	echo"<option value='2013' selected>2013</option>";
                echo"<option value='2014'>2014</option>";
                echo"<option value='2015'>2015</option>";

			}	                                  
			if ($cliente['anio']==2014)
			{

				echo"<option value='2012'>2012</option>";
             	echo"<option value='2013'>2013</option>";
                echo"<option value='2014' selected>2014</option>";
                echo"<option value='2015'>2015</option>";

			}	      
            if ($cliente['anio']==2015)
			{

				echo"<option value='2012' >2012</option>";
             	echo"<option value='2013'>2013</option>";
                echo"<option value='2014'>2014</option>";
                echo"<option value='2015' selected>2015</option>";

			}	

            echo"</select>";
               
            ?>             

               </td>

			<td><label for="descripcion">Descripción:</label></td>
			<td width="45" heigth="300"><input name="descripcion" maxlength="400"  placeholder="Se esta construyendo una vialidad" value="<?php echo $cliente['descripcion'] ?>"></input></td>
		</tr>

		<tr>
			<td><label for="inspeccion">Inspección Nº:</label></td>
			<td><input name="inspeccion" type="text" maxlength="5" placeholder="00000" required autofocus value="<?php echo $cliente['inspeccion'] ?>"></td>

			<td>Estatus:</td> 
			<td>
			<?php

			echo "<select name='estatus' id='estatus' required>";
    		echo "<option>Seleccione...</option>";

    			if ($cliente['estatus']=="Sin Iniciar") 
    			{
    				echo"<option value='Sin Iniciar' selected>Sin Iniciar</option>";
					echo"<option value='En Ejecución'>En ejecución</option>";
					echo"<option value='Paralizado'>Paralizado</option>";
					echo"<option value='Culminado'>Culminado</option>";
    			}

			if ($cliente['estatus']=="En Ejecución") 
    			{
    				echo"<option value='Sin Iniciar' >Sin Iniciar</option>";
					echo"<option value='En Ejecución' selected>En ejecución</option>";
					echo"<option value='Paralizado'>Paralizado</option>";
					echo"<option value='Culminado'>Culminado</option>";

    			}
    			if ($cliente['estatus']=="Paralizado") 
    			{
    				echo"<option value='Sin Iniciar' >Sin Iniciar</option>";
					echo"<option value='En Ejecución'>En ejecución</option>";
					echo"<option value='Paralizado' selected>Paralizado</option>";
					echo"<option value='Culminado'>Culminado</option>";

    			}
    			if ($cliente['estatus']=="Culminado") 
    			{
    				echo"<option value='Sin Iniciar'>Sin Iniciar</option>";
					echo"<option value='En Ejecución'>En ejecución</option>";
					echo"<option value='Paralizado'>Paralizado</option>";
					echo"<option value='Culminado' selected>Culminado</option>";

    			}								
				echo"</select>";

				?>

				</td>
		</tr>
		<tr>
			<td>Municipio:</td>
			<td>
			<?php

			echo "<select name='municipio' id='municipio' required>";
			echo "<option>Seleccione...</option>";
						
				if ($cliente['municipio']=="Andrés Bello")
				{
				echo"<option value='Andrés Bello' selected>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				
				if ($cliente['municipio']=="Antonio Rómulo Costa")
				{
				echo"<option value='Andrés Bello' >Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa' selected>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}																				
				
				if ($cliente['municipio']=="Ayacucho")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho' selected>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}

				if ($cliente['municipio']=="Bolívar")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar' selected>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Cárdenas")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas' selected>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Córdoba")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba' selected>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}

				if ($cliente['municipio']=="Fernández Feo")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo' selected>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}

				if ($cliente['municipio']=="Francisco de Miranda")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda' selected>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="García de Hevia")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia' selected>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Guásimos")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos' selected>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				
				if ($cliente['municipio']=="Independencia")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia' selected>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				
				if ($cliente['municipio']=="Jáuregui")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas' >Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui' selected>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="José María Vargas")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas' selected>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Junín")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín' selected>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Libertad")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas' >Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad' selected>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Libertador")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas' >Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador' selected>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Lobatera")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera' selected>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Michelena")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena' selected>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Panamericano")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano' selected>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Pedro María Ureña")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña' selected>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Rafael Urdaneta")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas' >Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta' selected>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Samuel Darío Maldonado")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado' selected>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="San Cristóbal")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal' selected>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="San Judas Tadeo")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo' selected>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Seboruco")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco' selected>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Simón Rodrígue")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue' selected>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Sucre")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre' selected>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Torbes")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas'>Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes' selected>Torbes</option>";
				echo"<option value='Uribante'>Uribante</option>";
				}
				if ($cliente['municipio']=="Uribante")
				{
				echo"<option value='Andrés Bello'>Andrés Bello</option>";
				echo"<option value='Antonio Rómulo Costa'>Antonio Rómulo Costa</option>";
				echo"<option value='Ayacucho'>Ayacucho</option>";
				echo"<option value='Bolívar'>Bolívar</option>";
				echo"<option value='Cárdenas' >Cárdenas</option>";
				echo"<option value='Córdoba'>Córdoba</option>";
				echo"<option value='Fernández Feo'>Fernández Feo</option>";
				echo"<option value='Francisco de Miranda'>Francisco de Miranda</option>";
				echo"<option value='García de Hevia'>García de Hevia</option>";
				echo"<option value='Guásimos'>Guásimos</option>";
				echo"<option value='Independencia'>Independencia</option>";
				echo"<option value='Jáuregui'>Jáuregui</option>";
				echo"<option value='José María Vargas'>José María Vargas</option>";
				echo"<option value='Junín'>Junín</option>";
				echo"<option value='Libertad'>Libertad</option>";
				echo"<option value='Libertador'>Libertador</option>";
				echo"<option value='Lobatera'>Lobatera</option>";
				echo"<option value='Michelena'>Michelena</option>";
				echo"<option value='Panamericano'>Panamericano</option>";
				echo"<option value='Pedro María Ureña'>Pedro María Ureña</option>";
				echo"<option value='Rafael Urdaneta'>Rafael Urdaneta</option>";
				echo"<option value='Samuel Darío Maldonado'>Samuel Darío Maldonado</option>";
				echo"<option value='San Cristóbal'>San Cristóbal</option>";
				echo"<option value='San Judas Tadeo'>San Judas Tadeo</option>";
				echo"<option value='Seboruco'>Seboruco</option>";
				echo"<option value='Simón Rodrígue'>Simón Rodríguez</option>";
				echo"<option value='Sucre'>Sucre</option>";
				echo"<option value='Torbes'>Torbes</option>";
				echo"<option value='Uribante' selected>Uribante</option>";
				}
				
				echo"</select>";
				?>

				</td>
			
			
			<td><label for="parroquia">Parroquia:</label></td>
			<td><input name="parroquia" type="text" maxlength="50" placeholder="La Concordia" required autofocus value="<?php echo $cliente['parroquia'] ?>"></td>

			<td><label for="sector">Sector</label></td>
			<td><input name="sector" type="text" maxlength="50" placeholder="Las Pilas" required autofocus value="<?php echo $cliente['sector'] ?>"></td>
		</tr>

		<tr>
			<td><label for="inversion">Inversión:</td>
			<td><input name="inversion" type="text" maxlength="50" placeholder="5.000.000" value="<?php echo $cliente['inversion'] ?>">Bs</td>
		</tr>

		<tr>
			<td><label for="empresa">Empresa Ejecutora:</label></td>
			<td><input name="empresa" type="text" maxlength="50" placeholder="COCA COLA" value="<?php echo $cliente['empresa'] ?>"></td>
			
			<td><label for="rif">Rif:</label></td>
			<td><input name="rif" type="text" maxlength="30" placeholder="j-12.556.899.0" value="<?php echo $cliente['rif'] ?>"></td>
		</tr>

		<tr>
			<td><label for="ingenieror">Ing. Residente:</label></td>
			<td><input name="ingenieror" type="text" maxlength="30" placeholder="Jessica Redfox" value="<?php echo $cliente['ingenieror'] ?>"></td>
			
			<td><label for="civr">C.I.V.:</label></td>
			<td><input name="civr" type="text" maxlength="20" placeholder="x-xxxxxxxxxx" value="<?php echo $cliente['civr'] ?>"></td>
		</tr>

		<tr>
			<td><label for="ingenieroi">Ing. Inspector:</label></td>
			<td><input name="ingenieroi" type="text" maxlength="30" placeholder="Franklin Márquez" value="<?php echo $cliente['ingenieroi'] ?>"></td>

			<td><label for="civi">C.I.V.:</label></td>
			<td><input name="civi" type="text" maxlength="20" placeholder="x-xxxxxxxxxx" value="<?php echo $cliente['civi'] ?>"></td>
		</tr>

		<tr>
			<td><label for="avance">Avance Fisíco:</label></td>
			<td><input name="avance" type="text" maxlength="5" placeholder="00000" value="<?php echo $cliente['avance'] ?>">%</td>
		</tr>

		<tr>
			<td>Fecha de Inicio:</td>
			<td colspan="2">
			<?php
			echo"<select name='diai' id='diai' required>";
			echo"<option>Dia</option>";

			if ($cliente['diai']==01) 

			{
				echo"<option value='01' selected>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==02) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02' selected>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}									
			if ($cliente['diai']==03) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03' selected>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==04) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04' selected>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==05) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05' selected>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==06) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06' selected>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==07) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07' selected>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==08) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08' selected>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==09) 

			{
				echo"<option value='01' >01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09' selected>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==10) 

			{
				echo"<option value='01' >01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10' selected>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==11) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11' selected>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==12) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12' selected>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==13) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13' selected>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==14) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14' selected>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==15) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15' selected>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==16) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16' selected>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==17) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17' selected>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==18) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18' selected>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
            if ($cliente['diai']==19) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19' selected>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==20) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20' selected>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==21) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21' selected>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==22) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22' selected>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==23) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23' selected>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==24) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24' selected>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==25) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25' selected>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==26) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26' selected>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==27) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27' selected>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==28) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28' selected>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==29) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29' selected>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==30) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30' selected>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diai']==31) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31' selected>31</option>";

			}
            echo"</select>";
            ?>

            <?php

			echo"<select name='mesi' id='mesi' required>";
			echo"<option>Mes</option>";

			if ($cliente['mesi']=="Enero")
			{
			
				echo"<option value='Enero' selected>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesi']=="Febrero")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero' selected>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesi']=="Marzo")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo' selected>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesi']=="Abril")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril' selected>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesi']=="Abril")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril' selected>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesi']=="Mayo")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo' selected>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesi']=="Junio")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio' selected>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesi']=="Julio")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio' selected>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesi']=="Agosto")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto' selected>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesi']=="Septiembre")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre' selected>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesi']=="Octubre")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre' selected>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesi']=="Noviembre")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre' selected>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesi']=="Diciembre")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre' selected>Diciembre</option>";				
			}

              echo "</select>";
              ?>

			<?php

			echo"<select name='anioi' id='anioi' required>";
			echo"<option>Año</option>";
			if ($cliente['anioi']==2010)

			{
			echo"<option value='2010' selected>2010</option>";
            echo"<option value='2011'>2011</option>";
            echo"<option value='2012'>2012</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
			}
			if ($cliente['anioi']==2011)

			{
			echo"<option value='2010'>2010</option>";
            echo"<option value='2011' selected>2011</option>";
            echo"<option value='2012'>2012</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
			}
			if ($cliente['anioi']==2012)

			{
			echo"<option value='2010'>2010</option>";
            echo"<option value='2011'>2011</option>";
            echo"<option value='2012' selected>2012</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
			}
			if ($cliente['anioi']==2013)

			{
			echo"<option value='2010'>2010</option>";
            echo"<option value='2011'>2011</option>";
            echo"<option value='2012'>2012</option>";
            echo"<option value='2013' selected>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
			}
			if ($cliente['anioi']==2014)

			{
			echo"<option value='2010'>2010</option>";
            echo"<option value='2011'>2011</option>";
            echo"<option value='2012'>2012</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014' selected>2014</option>";
            echo"<option value='2015'>2015</option>";
			}
			if ($cliente['anioi']==2015)

			{
			echo"<option value='2010'>2010</option>";
            echo"<option value='2011'>2011</option>";
            echo"<option value='2012'>2012</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015' selected>2015</option>";
			}
            echo"</select>";
            ?>

            </td>
		</tr>

		<tr>
			<td>Existencia de Valla:</td>
			<td><input type="radio" name="valla" value="<?php echo $cliente['valla'] ?>" required autofocus >Sí
				<input type="radio" name="valla" value="<?php echo $cliente['valla'] ?>" required autofocus >No</td>
		</tr>

		<tr>
			<td>Fecha de Culminación:</td>

			<td colspan="2">
			<?php

			echo "<select name='diac' id='diac' required>";
			echo"<option>Dia</option>";
			
			if ($cliente['diac']==01) 

			{
				echo"<option value='01' selected>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==02) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02' selected>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}									
			if ($cliente['diac']==03) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03' selected>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==04) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04' selected>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==05) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05' selected>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==06) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06' selected>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==07) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07' selected>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==08) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08' selected>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==09) 

			{
				echo"<option value='01' >01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09' selected>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==10) 

			{
				echo"<option value='01' >01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10' selected>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==11) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11' selected>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==12) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12' selected>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==13) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13' selected>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==14) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14' selected>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==15) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15' selected>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==16) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16' selected>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==17) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17' selected>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==18) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18' selected>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
            if ($cliente['diac']==19) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19' selected>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==20) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20' selected>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==21) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21' selected>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==22) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22' selected>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==23) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23' selected>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==24) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24' selected>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==25) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25' selected>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==26) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26' selected>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==27) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27' selected>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==28) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28' selected>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==29) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29' selected>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==30) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30' selected>30</option>";
                echo"<option value='31'>31</option>";

			}
			if ($cliente['diac']==31) 

			{
				echo"<option value='01'>01</option>";
                echo"<option value='02'>02</option>";
                echo"<option value='03'>03</option>";
                echo"<option value='04'>04</option>";
                echo"<option value='05'>05</option>";
                echo"<option value='06'>06</option>";
                echo"<option value='07'>07</option>";
                echo"<option value='08'>08</option>";
                echo"<option value='09'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
               	echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31' selected>31</option>";

			}
            echo"</select>";
            ?>

            <?php

			echo"<select name='mesc' id='mesc' required>";		
			echo"<option>Mes</option>";

			if ($cliente['mesc']=="Enero")
			{
			
				echo"<option value='Enero' selected>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesc']=="Febrero")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero' selected>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesc']=="Marzo")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo' selected>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesc']=="Abril")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril' selected>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesc']=="Abril")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril' selected>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesc']=="Mayo")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo' selected>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesc']=="Junio")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio' selected>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesc']=="Julio")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio' selected>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesc']=="Agosto")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto' selected>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesc']=="Septiembre")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre' selected>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesc']=="Octubre")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre' selected>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesc']=="Noviembre")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre' selected>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";				
			}
			if ($cliente['mesc']=="Diciembre")
			{
			
				echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre' selected>Diciembre</option>";				
			}

              echo "</select>";
              ?>

		<?php

		echo "<select name='anioc' id='anioc'>";
		echo"<option>Año</option>";
		
		if ($cliente['anioc']==2010)

			{
			echo"<option value='2010' selected>2010</option>";
            echo"<option value='2011'>2011</option>";
            echo"<option value='2012'>2012</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
			}
			if ($cliente['anioc']==2011)

			{
			echo"<option value='2010'>2010</option>";
            echo"<option value='2011' selected>2011</option>";
            echo"<option value='2012'>2012</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
			}
			if ($cliente['anioc']==2012)

			{
			echo"<option value='2010'>2010</option>";
            echo"<option value='2011'>2011</option>";
            echo"<option value='2012' selected>2012</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
			}
			if ($cliente['anioc']==2013)

			{
			echo"<option value='2010'>2010</option>";
            echo"<option value='2011'>2011</option>";
            echo"<option value='2012'>2012</option>";
            echo"<option value='2013' selected>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
			}
			if ($cliente['anioc']==2014)

			{
			echo"<option value='2010'>2010</option>";
            echo"<option value='2011'>2011</option>";
            echo"<option value='2012'>2012</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014' selected>2014</option>";
            echo"<option value='2015'>2015</option>";
			}
			if ($cliente['anioc']==2015)

			{
			echo"<option value='2010'>2010</option>";
            echo"<option value='2011'>2011</option>";
            echo"<option value='2012'>2012</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015' selected>2015</option>";
			}
            echo"</select>";
            ?>
		</tr>

		<tr>
			<td><label for="beneficiados">Beneficiados:</label></td>
			<td><input name="beneficiados" type="text" maxlength="20" placeholder="5000" value="<?php echo $cliente['beneficiados'] ?>">Personas</td>
		</tr>


		<center></center><tr>
			<td colspan="50"><input name="enviar" type="submit" value="Guardar"/><input name="borrar" type="reset" value="Borrar"/><a href="menu_principal.html"><input name="menu" type="submit" value="Regresar"/></a></td>
		</tr></center>
	</table>
	</form>
	</div>
</body>
</html>