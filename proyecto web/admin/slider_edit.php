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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE slider SET nombre=%s, img=%s, texto=%s, link=%s, estado=%s WHERE id=%s",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['img'], "text"),
                       GetSQLValueString($_POST['texto'], "text"),
                       GetSQLValueString($_POST['link'], "text"),
                       GetSQLValueString($_POST['estado'], "int"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_proyect, $proyect);
  $Result1 = mysql_query($updateSQL, $proyect) or die(mysql_error());

  $updateGoTo = "slider.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$var_edit = "0";
if (isset($_GET['sliderID'])) {
  $var_edit = $_GET['sliderID'];
}
mysql_select_db($database_proyect, $proyect);
$query_edit = sprintf("SELECT * FROM slider WHERE slider.id =%s", GetSQLValueString($var_edit, "int"));
$edit = mysql_query($query_edit, $proyect) or die(mysql_error());
$row_edit = mysql_fetch_assoc($edit);
$totalRows_edit = mysql_num_rows($edit);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/backend.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->

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
    <p>Edita los datos del formulario.</p>
 <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Nombre:</td>
      <td><input type="text" name="nombre" value="<?php echo htmlentities($row_edit['nombre'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Img:</td>
      <td><input type="text" name="img" value="<?php echo htmlentities($row_edit['img'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Texto:</td>
      <td><input type="text" name="texto" value="<?php echo htmlentities($row_edit['texto'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Link:</td>
      <td><input type="text" name="link" value="<?php echo htmlentities($row_edit['link'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Estado:</td>
      <td><select name="estado">
        <option value="1" <?php if (!(strcmp(1, htmlentities($row_edit['estado'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>activa</option>
        <option value="0" <?php if (!(strcmp(0, htmlentities($row_edit['estado'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>desactivada</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Actualizar registro" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="id" value="<?php echo $row_edit['id']; ?>" />
</form>
<p>&nbsp;</p>
</html>
<?php
mysql_free_result($edit);
?>

  <!-- InstanceEndEditable --><!-- end .content --></div>
  <div class="footer">
    <p>(c)copyright- Yohan Agredo-2014</p>
    <!-- end .footer --></div>
<!-- end .container --></div>
</body>
<!-- InstanceEnd -->
