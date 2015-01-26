<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_proyect = "localhost";
$database_proyect = "proyecto";
$username_proyect = "root";
$password_proyect = "";
$proyect = mysql_pconnect($hostname_proyect, $username_proyect, $password_proyect) or trigger_error(mysql_error(),E_USER_ERROR); 
?>