<!DOCTYPE HTML>
<?php
include('../admin/function/functions.php');
require_once('../Connections/con_admin.php');
require_once('../admin/paginacion/paginator.class.php');
?>
<html lang="es"><!-- InstanceBegin template="/Templates/General.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

<!-- InstanceBeginEditable name="head" -->	

<?php 
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$index='galeria'; 
extract($_REQUEST);
?>
<!-- InstanceEndEditable -->

<?php
mysqli_select_db($con_admin, $database_con_admin);
$qry2 =("SELECT * FROM metas WHERE seccion='$index'");
$r2=mysqli_query($con_admin, $qry2) or die(header('location:home.php'));
if ( $r2 !== false && mysqli_num_rows($r2) > 0 ) 
{
	$a = mysqli_fetch_assoc($r2);
	$id_metas = test_input($a['id_metas']);
	$meta_tit = test_input($a['meta_tit']);
	$meta_desc = test_input($a['meta_desc']);
	$meta_keys = test_input($a['meta_keys']);
}
?>
<meta name="title" content="<?php echo $meta_tit; ?>" />
<meta name="keywords" content="<?php echo $meta_keys; ?>" />
<meta name="description" content="<?php echo $meta_desc; ?>"/>
<meta name="site" content="">
<!-- InstanceBeginEditable name="metas" -->	
<?php
$seccion = array (	
				  "galeria" => "b1"
				  );
				   
foreach($seccion as $seccion => $nombre){		
mysqli_select_db($con_admin, $database_con_admin);
$qry2 =("SELECT * FROM op4 WHERE seccion='$seccion'");
$r2=mysqli_query($con_admin, $qry2) or die(mysqli_error());
if ( $r2 !== false && mysqli_num_rows($r2) > 0 ) 
{
	$a2 = mysqli_fetch_assoc($r2);
			${'tit'.$nombre} = stripslashes($a2['titulo']);
}
}
?>
<!-- InstanceEndEditable -->
<?php
$plantilla = array (	
				  "sem1" => "z0",
				  "logotipo" => "l1",
				  "leyenda" => "a1",
				   "aviso" => "a2",
				   "empresa" => "a3");
				   
foreach($plantilla as $plantilla => $nombre){		
mysqli_select_db($con_admin, $database_con_admin);
$qry2 =("SELECT * FROM op4 WHERE seccion='$plantilla'");
$r2=mysqli_query($con_admin, $qry2) or die(mysqli_error());
if ( $r2 !== false && mysqli_num_rows($r2) > 0 ) 
{
	$a2 = mysqli_fetch_assoc($r2);
			${'tit'.$nombre} = stripslashes($a2['titulo']);
			${'sub'.$nombre} = stripslashes($a2['subtitulo']);
			${'desc'.$nombre} = stripslashes($a2['descripcion']);
			${'img'.$nombre} = stripslashes($a2['imagen']);
			${'tit_img'.$nombre} = stripslashes($a2['titulo_imagen']);
			${'desc_img'.$nombre} = stripslashes($a2['desc_imagen']);
}
}
?>	
<?php echo $descz0; ?>	

<!--[if lt IE 9]>
    <script>
    var e = ("abbr,article,aside,audio,canvas,datalist,details," +
    "figure,footer,header,hgroup,mark,menu,meter,nav,output," +
    "progress,section,time,video").split(',');
    for (var i = 0; i < e.length; i++) {
    document.createElement(e[i]);
    }
    </script>
    <![endif]-->

<link type="image/x-icon" href="../img/favicon/favicon.ico" rel="icon" /> 

<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../css/estilos_responsive.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="../css/menu.js"></script> 


<title><?php echo $meta_tit; ?></title>

<!-- InstanceBeginEditable name="doctitle" -->
<link href="../shadowbox-3.0.3/shadowbox.css" rel="stylesheet" type="text/css" />  
<script type="text/javascript" src="../shadowbox-3.0.3/jquery-1.4.2.min.js"></script>  
<script type="text/javascript" src="../shadowbox-3.0.3/shadowbox.js"></script>  
<script type="text/javascript"> Shadowbox.init({ language: "es", players:  ['img', 'html', 'iframe', 'qt', 'wmp', 'swf', 'flv'] }); </script>  
<!-- InstanceEndEditable -->


</head>
<!-- oncontextmenu="return false" ondragstart="return false" onmousedown="return true" onselectstart="return false"-->
<body>
<header>
    <article class="head">
    <div class="aliniado_right">
    	<div class="wrapper">
        	<a href="http://www.portloginter.com">Español</a> | <a href="http://portloginter.com/english/">English</a>
        </div>
    </div>
    
	<div class="wrapper">

    <div id="logotipo"><figure><a href="../index.php"><img src="../img/logo/portlog-logotipo.png" alt="<?php echo $desc_imgl1; ?>" title="<?php echo $tit_imgl1; ?>" /></a></figure></div>
                    
                <div class="navegacion">
                    <div class="menu_bar">
                    <a class="bt-menu">Menú <span class="icon-menu"></span> </a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="../index.php">Inicio</a></li>
                            <li><a href="nuestras-empresa.php">Nuestra Empresa</a></li>
                            <li><a href="servicios.php">Servicios</a></li>
                            <li><a href="clientes.php">Clientes</a></li>
                            <li><a href="galeria-proyectos.php">Galería Proyectos </a></li>
                            <li><a href="contacto.php">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
    </div>  
    </article>
</header>


<section>
<content>
<!-- InstanceBeginEditable name="Contenido" -->
<div class="wrapper">
	        <?php              
mysqli_select_db($con_admin, $database_con_admin);
$qry2 = "SELECT * FROM galeria WHERE id_galeria='$galeria'";
$r2 = mysqli_query($con_admin, $qry2) or die(header('location:home.php'));
if ( $r2 !== false && mysqli_num_rows($r2) > 0 ) 
{		
		$a2 = mysqli_fetch_assoc($r2);
		$titulo = test_input($a2['titulo']);
}
?>  
    
    <h1 class="titulos"><?php echo $titb1; ?>: <?php echo $titulo; ?></h1>
    
    <div class="galeria">
<?php              
mysqli_select_db($con_admin, $database_con_admin);
$qry2 = "SELECT * FROM imagenes WHERE galeria='$galeria' ORDER BY orden ASC";
$r2 = mysqli_query($con_admin, $qry2) or die(header('location:home.php'));
if ( $r2 !== false && mysqli_num_rows($r2) > 0 ) 
{
	while ($a2 = mysqli_fetch_assoc($r2))
	{
		$img_galeria = test_input($a2['imagen']);
		$titulo = test_input($a2['titulo']);
?>     	
        <div class="gal_ind col-xl-3 col-mc-4 col-ch-12">
        <a href="../img/imagenes/<?php echo $img_galeria; ?>" rel="lightbox[groupName1]" data-ob_share="false" class="mosaic-overlay">
        	<figure><img src="../img/imagenes/<?php echo $img_galeria; ?>" title="<?php echo $titulo; ?>" alt="<?php echo $titulo,'-',$img_galeria;?>"><div class="mascara"><span class="icon-lupa2"></span></div></figure>
            <h2><?php echo $titulo; ?></h2>
       </a>
       </div>
<?php }
} else { 
?>     
    <div class="gal_ind col-xl-12">
            <h2>There is no gallery for the moment</h2>
       </div>
<?php } ?>       
        
    </div>
    
</div>
<!-- InstanceEndEditable -->
</content>
</section>

<footer>
	<article class="foot">
    <div class="wrapper">
    	
        <div class="pie1">
        	<p><?php echo $desca1; ?></p>
    		<a href="aviso.php"><?php echo $tita1; ?></a>
        </div>
        
        <div class="pie2">
        	<p><?php echo $tita1; ?></p>
            <a href="http://www.wwpc.eu.com/" target="_blank"><figure><img src="../img/op/<?php echo $imga3; ?>" title="<?php echo $tit_imga3; ?>" alt="<?php echo $desc_imga3; ?>" ></figure></a>
        </div>
        
    </div>      
    </article>

</footer>
</body>
<!-- InstanceEnd -->