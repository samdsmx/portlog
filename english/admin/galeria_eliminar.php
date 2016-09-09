<?php require_once('../Connections/con_admin.php');
extract ($_REQUEST); 
mysqli_select_db($con_admin, $database_con_admin);
$sql=("SELECT imagen FROM galeria WHERE id_galeria=".$_REQUEST["id_galeria"]."");
$r=mysqli_query($con_admin, $sql) or die(header('location:home.php'));
$filas=mysqli_fetch_array($r);
	  
$imgn=$filas['imagen'];	
	  
$carpeta='../img/galeria/';
	 
if (file_exists($carpeta.$imgn))
{
	unlink($carpeta.$imgn);
}
		      
mysqli_select_db($con_admin, $database_con_admin);
mysqli_query($con_admin, "DELETE FROM galeria WHERE id_galeria=".$_REQUEST["id_galeria"]."");			 

echo  "<script language='javascript'>window.location='galeria_actualizar.php'</script>";

?>
<?php mysqli_close($con_admin);?>