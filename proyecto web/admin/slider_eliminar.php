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

if ((isset($_GET['sliderID'])) && ($_GET['sliderID'] != "")) {
  $deleteSQL = sprintf("DELETE FROM slider WHERE id=%s",
                       GetSQLValueString($_GET['sliderID'], "int"));

  mysql_select_db($database_proyect, $proyect);
  $Result1 = mysql_query($deleteSQL, $proyect) or die(mysql_error());

  $deleteGoTo = "slider.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/backend.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>administracion</title>
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
    <h2>Eliminar Registro</h2>
    <p>Por favor espere unos segundos.</p>
    <!-- InstanceEndEditable --><!-- end .content --></div>
  <div class="footer">
    <p>(c)copyright- Yohan Agredo-2014</p>
    <!-- end .footer --></div>
<!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>
