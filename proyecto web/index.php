<?php require_once('Connections/proyect.php'); ?>
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

mysql_select_db($database_proyect, $proyect);
$query_slider = "SELECT * FROM slider WHERE slider.estado=1";
$slider = mysql_query($query_slider, $proyect) or die(mysql_error());
$row_slider = mysql_fetch_assoc($slider);
$totalRows_slider = mysql_num_rows($slider);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/frontend.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Consejo Comunal El Centro</title>
 <script src="http://code.jquery.com/jquery-latest.min.js"></script>
 <script src="js/bjqs.min.js"></script>
 <script src="js/script.js"></script>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <link rel="stylesheet" href="css/slider.css" />
  

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<link href="css/frontend.css" rel="stylesheet" type="text/css" />

</head>

<body background="imagenes/22.png">

<div class="container">
  <div class="header">
  <?php include('php/encabezado.php'); ?>
  <?php include('php/menu.php');?>
  <!-- end .header --></div>
  <!-- InstanceBeginEditable name="slider" --> 
  <?php include("php/slider.php") ?>
   <?php include("php/contenido_index.php") ?>
  
  <!-- InstanceEndEditable -->
  
  <div class="sidebar2"><!-- InstanceBeginEditable name="informacion lateral" --><div class="fb-like-box" data-href="https://www.facebook.com/pages/Consejo-Comunal-El-Centro/274932426023232" data-width="250" data-height="280" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div> <!-- InstanceEndEditable -->
    
   
    <!-- end .sidebar1 --></div>
  <div class="content"><!-- InstanceBeginEditable name="contenido" --> 
  <div class="capas">
  <h2>Noticias</h2>
  Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto.
  <div class="clearfloat"></div>
  <div class="boton">
  	 <a href="#"> +ver más..</a>
  </div>
  </div>   
 <div class="capas">
  <h2>Noticias</h2>
  Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto.
 <div class="clearfloat"></div>
  <div class="boton">
  	 <a href="#"> +ver más..</a>
  </div>
  </div>
 <div class="capas">
  <h2>Noticias</h2>
  Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto.
  <div class="clearfloat"></div>
  <div class="boton">
  	 <a href="#"> +ver más..</a>
  </div>
  </div>   
   <!-- InstanceEndEditable -->
   
    <!-- end .content --></div>
  <div class="footer">
 
 <?php include('php/pie_pagina.php'); ?>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($slider);
?>
