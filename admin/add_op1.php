<?php require_once('../Connections/con_admin.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>TABLA OP1</p>
  <p>seccion
    <label for="seccion"></label>
    <input type="text" name="seccion" id="seccion" />
  </p>
  <p>titulo
    <label for="titulo"></label>
    <input type="text" name="titulo" id="titulo" />
  </p>
  <p>
    <input type="submit" name="guardar" id="guardar" value="Guardar" />
  </p>
</form>

<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>

<?php 
if (isset ($_POST['guardar']))
{
	extract ($_REQUEST);
mysqli_select_db($con_admin, $database_con_admin);
$sql="INSERT INTO op4 (titulo,seccion) VALUES ('$titulo','$seccion')";
mysqli_query($con_admin, $sql) or die(header('location:../index.php'));
echo  "<script language='javascript'>window.location='add_op1.php'</script>";
}

?>