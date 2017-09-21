<?php
class funciones {
	
	public function edit_metas($meta_tit, $meta_desc, $meta_keys, $seccion){
		include('../Connections/con_admin.php');
		mysql_select_db($database_con_admin, $con_admin);
		$qry =("UPDATE metas SET meta_tit='$meta_tit', meta_desc='$meta_desc', meta_keys='$meta_keys' WHERE seccion='$seccion'");
		mysql_query($qry, $con_admin) or die(mysql_error());
		echo"<script language='javascript'>window.location='".$seccion.".php'</script>";
	}
	
	public function edit_contactos($titulo, $subtitulo, $tel, $lada, $email, $correo, $seccion, $serv){
		include('../Connections/con_admin.php');
		mysql_select_db($database_con_admin, $con_admin);
		$qry =("UPDATE contacto SET titulo='$titulo', subtitulo='$subtitulo', tel='$tel', lada='$lada', correo='$email', correo_formulario='$correo' WHERE seccion='$seccion'");
		mysql_query($qry, $con_admin) or die(mysql_error());
		echo"<script language='javascript'>window.location='servicios_in.php?sec=".$seccion."&serv=".$serv."'</script>";
	}
	
	public function nuevo_banner($orden, $nombre_imagen, $nombre_tmp_imagen, $t1, $t2, $link){
		include('../Connections/con_admin.php');
		$carpeta = '../img/banner/';
		if (!file_exists($carpeta.$nombre_imagen))
		{
			copy($nombre_tmp_imagen, $carpeta.$nombre_imagen);
			mysql_select_db($database_con_admin, $con_admin);
			$qry44 = "INSERT INTO banner (orden, imagen, t1, t2, url) VALUES ('$orden', '$nombre_imagen', '$t1', '$t2', '$link')";
			mysql_query($qry44, $con_admin) or die(mysql_error());
			echo"<script language='javascript'>window.location='actualizar_banner.php'</script>";
		}
		else
		{
			echo "<script languaje='javascript'>alert('ERROR: Ya hay una imagen con el mismo nombre')</script>";
		}
	}
	
	public function editar_ts($titulo, $subtitulo, $id, $seccion){
		include('../Connections/con_admin.php');
		mysql_select_db($database_con_admin, $con_admin);
		$qry =("UPDATE secs SET titulo='$titulo', subtitulo='$subtitulo' WHERE id='$id'");
		mysql_query($qry, $con_admin) or die(mysql_error());	
		echo"<script language='javascript'>window.location='".$seccion.".php'</script>";
	}
	
	public function editar_t($titulo, $id, $sec){
		include('../Connections/con_admin.php');
		mysql_select_db($database_con_admin, $con_admin);
		$qry =("UPDATE secs SET titulo='$titulo' WHERE id='$id'");
		mysql_query($qry, $con_admin) or die(mysql_error());	
		echo"<script language='javascript'>window.location='".$sec.".php'</script>";
	}
	
	public function editar_titulo($titulo, $id, $seccion){
		include('../Connections/con_admin.php');
		mysql_select_db($database_con_admin, $con_admin);
		$qry =("UPDATE secs SET titulo='$titulo' WHERE id='$id'");
		mysql_query($qry, $con_admin) or die(mysql_error());	
		echo"<script language='javascript'>window.location='".$seccion.".php'</script>";
	}
	
	public function editar_d_text($descripcion, $id, $seccion){
		include('../Connections/con_admin.php');
		mysql_select_db($database_con_admin, $con_admin);
		$qry =("UPDATE secs SET descripcion1='$descripcion' WHERE id='$id'");
		mysql_query($qry, $con_admin) or die(mysql_error());	
		echo"<script language='javascript'>window.location='".$seccion.".php'</script>";
	}
	
	
	
} //cierra class metas
?>