<?php require_once('../Connections/con_admin.php');
extract ($_REQUEST); 
mysqli_select_db($con_admin, $database_con_admin);
$sql=("SELECT imagen FROM clientes WHERE id_clientes=".$_REQUEST["id_clientes"]."");
$r=mysqli_query($con_admin, $sql) or die(header('location:home.php'));
$filas=mysqli_fetch_array($r);
	  
$imgn=$filas['imagen'];	
	  
$carpeta='../img/clientes/';
	 
if (file_exists($carpeta.$imgn))
{
	unlink($carpeta.$imgn);
}
		      
mysqli_select_db($con_admin, $database_con_admin);
mysqli_query($con_admin, "DELETE FROM clientes WHERE id_clientes=".$_REQUEST["id_clientes"]."");			 

echo  "<script language='javascript'>window.location='clientes_actualizar.php'</script>";

?>
<?php mysqli_close($con_admin);?>