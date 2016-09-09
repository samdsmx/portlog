<?php require_once('../Connections/con_admin.php');
extract ($_REQUEST); 
mysqli_select_db($con_admin, $database_con_admin);
$sql=("SELECT imagen FROM banner WHERE id_banner=".$_REQUEST["id_banner"]."");
$r=mysqli_query($con_admin, $sql) or die(header('location:home.php'));
$filas=mysqli_fetch_array($r);
	  
$imgn=$filas['imagen'];	
	  
$carpeta='../img/banner/';
	 
if (file_exists($carpeta.$imgn))
{
	unlink($carpeta.$imgn);
}
		      
mysqli_select_db($con_admin, $database_con_admin);
mysqli_query($con_admin, "DELETE FROM banner WHERE id_banner=".$_REQUEST["id_banner"]."");			 

echo  "<script language='javascript'>window.location='banner_actualizar.php'</script>";

?>
<?php mysqli_close($con_admin);?>