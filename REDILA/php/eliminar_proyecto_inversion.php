<?php 
require("conexion.php");
$conexion=conectar();

$sql="delete from proyecto_inversion where codigo='".$_GET['cod']."'"; 
if (mysql_query($sql)){
      $salida = "Se ha eliminado el registro";
}else{
      $salida = "No se ha podido Eliminar. Este es el error: " . mysql_error();
}    
echo " 
<script language='JavaScript'> alert(\"$salida\"); document.location.href='listado_proyecto_inversion.php';</script>
"; 
?>
