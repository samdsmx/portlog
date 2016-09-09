<?php
session_start();
session_destroy();
echo '<script> alert("SESION FINALIZADA");</script>';
	echo '<SCRIPT LANGUAJE="javascript">
	location.href=" index.php";
	</SCRIPT>';
?>

