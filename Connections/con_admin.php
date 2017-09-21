<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_con_admin = "148.204.14.24";
$database_con_admin = "paginade_portlog";
$username_con_admin = "root";
$password_con_admin = "origendb";
#$con_admin = mysqli_connect($hostname_con_admin, $username_con_admin, $password_con_admin) or die(header('location:../home.php')); 
$con_admin = mysqli_connect("localhost", "root", "origendb", "paginade_portlog") or die(header('location:../home.php')); 
error_log( mysql_error($con_admin) );
?>
