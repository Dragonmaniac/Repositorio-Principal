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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
	
	$archivo= $_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'],'../imagenes/'.$archivo);
	
  $insertSQL = sprintf("INSERT INTO slider (nombre, img, texto, link, estado) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($archivo, "text"),
                       GetSQLValueString($_POST['texto'], "text"),
                       GetSQLValueString($_POST['link'], "text"),
                       GetSQLValueString($_POST['estado'], "int"));

  mysql_select_db($database_proyect, $proyect);
  $Result1 = mysql_query($insertSQL, $proyect) or die(mysql_error());

  $insertGoTo = "slider.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
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
    <p>Bienvenido administrador</p>
    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" enctype="multipart/form-data">
      <table align="center">
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Nombre:</td>
          <td><input type="text" name="nombre" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Img:</td>
          <td><input type="file" name="img" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Texto:</td>
          <td><input type="text" name="texto" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Link:</td>
          <td><input type="text" name="link" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Estado:</td>
          <td><select name="estado">
            <option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Activa</option>
            <option value="0" <?php if (!(strcmp(0, ""))) {echo "SELECTED";} ?>>Desactivada</option>
          </select></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">&nbsp;</td>
          <td><input type="submit" value="Insertar registro" /></td>
        </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form1" />
    </form>
    <p>&nbsp;</p>
    <!-- InstanceEndEditable --><!-- end .content --></div>
  <div class="footer">
    <p>(c)copyright- Yohan Agredo-2014</p>
    <!-- end .footer --></div>
<!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>
