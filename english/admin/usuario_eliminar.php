<?php require_once('../Connections/con_admin.php');
extract ($_REQUEST); 

mysqli_select_db($con_admin, $database_con_admin);
mysqli_query($con_admin, "DELETE FROM usuario2 WHERE id_usuario2=".$_REQUEST["id_usuario2"]."");			 

echo  "<script language='javascript'>window.location='usuario.php'</script>";

?>
<?php mysqli_close($con_admin);?>