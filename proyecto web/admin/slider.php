<?php require_once('../Connections/proyect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_publicaciones = 2;
$pageNum_publicaciones = 0;
if (isset($_GET['pageNum_publicaciones'])) {
  $pageNum_publicaciones = $_GET['pageNum_publicaciones'];
}
$startRow_publicaciones = $pageNum_publicaciones * $maxRows_publicaciones;

mysql_select_db($database_proyect, $proyect);
$query_publicaciones = "SELECT * FROM slider ORDER BY slider.nombre ASC";
$query_limit_publicaciones = sprintf("%s LIMIT %d, %d", $query_publicaciones, $startRow_publicaciones, $maxRows_publicaciones);
$publicaciones = mysql_query($query_limit_publicaciones, $proyect) or die(mysql_error());
$row_publicaciones = mysql_fetch_assoc($publicaciones);

if (isset($_GET['totalRows_publicaciones'])) {
  $totalRows_publicaciones = $_GET['totalRows_publicaciones'];
} else {
  $all_publicaciones = mysql_query($query_publicaciones);
  $totalRows_publicaciones = mysql_num_rows($all_publicaciones);
}
$totalPages_publicaciones = ceil($totalRows_publicaciones/$maxRows_publicaciones)-1;

$queryString_publicaciones = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_publicaciones") == false && 
        stristr($param, "totalRows_publicaciones") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_publicaciones = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_publicaciones = sprintf("&totalRows_publicaciones=%d%s", $totalRows_publicaciones, $queryString_publicaciones);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/backend.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>administracion</title>
<title>administracion</title>
<script>
	function confirmacion()
	{
		confirmar= confirm('Seguro deseas Elimiar el registro?');
		return confirmar;
	}
</script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="../css/backend.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
  <div class="header">
  <?php include("../php/encabezado_admin.php") ?>
  <!-- end .header --></div>
  <div class="sidebar1">
    <?php include("../php/menu_admin.php") ?>
    <p></p>
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1>Administración</h1>
    <!-- InstanceBeginEditable name="contenido administracion" -->
    <div class="tabla-content">
    <p> <a href="slider_agregar.php"><img src="../imagenes/ico/agregar.png" width="17" height="17" />Nuevo Registro</a></p>
    <table width="100%"  cellspacing="0" cellpadding="0">
      <tr bgcolor="#999999">
        <td width="30%"><strong>publicacion</strong></td>
        <td width="20%"><strong>Imagen</strong></td>
        <td width="31%"><strong>Texto</strong></td>
        <td width="21%"><strong>Enlace</strong></td>
        <td width="21%"><strong>Opciones</strong></td>
      </tr>
      <?php do{ ?>
  <tr <?php if($row_publicaciones['estado']==0){echo 'class="tr_inactivo"';}?>>
    <td><?php echo $row_publicaciones['nombre']; ?></td>
    <td ><?php echo $row_publicaciones['img']; ?></td>
    <td ><?php echo $row_publicaciones['texto']; ?></td>
    <td ><?php echo $row_publicaciones['link']; ?></td>
 <td><a href="slider_eliminar.php?sliderID=<?php echo $row_publicaciones['id']; ?>" onclick="javascript:return confirmacion();"><img src="../imagenes/ico/eliminar.png" width="17" height="17" /></a> &nbsp;&nbsp;<a href="slider_edit.php?sliderID=<?php echo $row_publicaciones['id']; ?>"><img src="../imagenes/ico/editar.png" width="17" height="17" /></a> </td>
  </tr>
  <?php } while ($row_publicaciones = mysql_fetch_assoc($publicaciones)); ?>
    </table>
    <hr/>
    <table border="0">
      <tr>
        <td><?php if ($pageNum_publicaciones > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_publicaciones=%d%s", $currentPage, 0, $queryString_publicaciones); ?>">Primero</a>
            <?php } // Show if not first page ?></td>
        <td><?php if ($pageNum_publicaciones > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_publicaciones=%d%s", $currentPage, max(0, $pageNum_publicaciones - 1), $queryString_publicaciones); ?>">Anterior</a>
            <?php } // Show if not first page ?></td>
        <td><?php if ($pageNum_publicaciones < $totalPages_publicaciones) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_publicaciones=%d%s", $currentPage, min($totalPages_publicaciones, $pageNum_publicaciones + 1), $queryString_publicaciones); ?>">Siguiente</a>
            <?php } // Show if not last page ?></td>
        <td><?php if ($pageNum_publicaciones < $totalPages_publicaciones) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_publicaciones=%d%s", $currentPage, $totalPages_publicaciones, $queryString_publicaciones); ?>">&Uacute;ltimo</a>
            <?php } // Show if not last page ?></td>
      </tr>
    </table>
    </div>
    <!-- InstanceEndEditable -->
    <!-- end .content --></div>
  <div class="footer">
    <p>(c)copyright- Yohan Agredo-2014</p>
    <!-- end .footer --></div>
<!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($publicaciones);
?>
