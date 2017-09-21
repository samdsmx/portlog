<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_con_admin = "localhost";
$database_con_admin = "paginade_port-ingles";
$username_con_admin = "root";
$password_con_admin = "origendb";
$con_admin = mysqli_connect($hostname_con_admin, $username_con_admin, $password_con_admin) or die(header('location:../home.php')); 
?>
