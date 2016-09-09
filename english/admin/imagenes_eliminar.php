<?php require_once('../Connections/con_admin.php');
extract ($_REQUEST); 
mysqli_select_db($con_admin, $database_con_admin);
$sql=("SELECT imagen FROM imagenes WHERE id_imagenes=".$_REQUEST["id_imagenes"]."");
$r=mysqli_query($con_admin, $sql) or die(header('location:home.php'));
$filas=mysqli_fetch_array($r);
	  
$imgn=$filas['imagen'];	
	  
$carpeta='../img/imagenes/';
	 
if (file_exists($carpeta.$imgn))
{
	unlink($carpeta.$imgn);
}
		      
mysqli_select_db($con_admin, $database_con_admin);
mysqli_query($con_admin, "DELETE FROM imagenes WHERE id_imagenes=".$_REQUEST["id_imagenes"]."");			 

echo  "<script language='javascript'>window.location='imagenes_actualizar.php?galeria=".$galeria."'</script>";

?>
<?php mysqli_close($con_admin);?>