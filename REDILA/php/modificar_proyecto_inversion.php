<?php
require("conexion.php");
$conexion=conectar();

$ok=mysql_query("update proyecto_inversion set
nro='".$_POST['nro']."',
nombre='".$_POST['nombre']."',
entrevistado='".$_POST['entrevistado']."',
telef='".$_POST['telef']."',
telefono='".$_POST['telefono']."',
cargo='".$_POST['cargo']."',
ente='".$_POST['ente']."',
anio='".$_POST['anio']."',
descripcion='".$_POST['descripcion']."',
inspeccion='".$_POST['inspeccion']."',
estatus='".$_POST['estatus']."', 
municipio='".$_POST['municipio']."',
parroquia='".$_POST['parroquia']."',
sector='".$_POST['sector']."',
inversion='".$_POST['inversion']."',
empresa='".$_POST['empresa']."',
rif='".$_POST['rif']."',
ingenieror='".$_POST['ingenieror']."',
civr='".$_POST['civr']."',
ingenieroi='".$_POST['ingenieroi']."',
civi='".$_POST['civi']."',
avance='".$_POST['avance']."',
diai='".$_POST['diai']."',
mesi='".$_POST['mesi']."',
anioi='".$_POST['anioi']."',
valla='".$_POST['valla']."',
diac='".$_POST['diac']."',
mesc='".$_POST['mesc']."',
anioc='".$_POST['anioc']."',
beneficiados='".$_POST['beneficiados']."'
where codigo='".$_POST['codigo']."'",$conexion);

$afectadas=mysql_affected_rows($conexion);
if($afectadas>=0)
 echo "Cliente actualizado correctamente";
  else
   echo "Error al actualizar cliente ";

?>