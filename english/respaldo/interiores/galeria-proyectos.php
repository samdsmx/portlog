<!DOCTYPE HTML>
<?php
include('../../../admin/function/functions.php');
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
<meta name="title" content="Portlog" />
<meta name="title" content="Portlog" />
<meta name="keywords" content="portlog, portlog galeria, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, importaciones, exportaciones, empresas de logistica, logistica internacional" />
<meta name="description" content="Portlog es una empresa con más de 10 años de experiencia en logística internacional, líder en servicios marítimos y transportación de proyectos industriales"/>
<meta name="site" content="">
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

<link type="image/x-icon" href="../../imagenes/favicon.ico" rel="icon" /> 

<link href="../../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../../css/estilos_responsive.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="../../css/menu.js"></script> 



<title><?php echo $meta_tit; ?></title>
<!-- InstanceBeginEditable name="doctitle" -->
<title>PORTLOG INTERNATIONAL | galería</title>

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

    <div id="logotipo"><figure><a href="../../index.php"><img src="../../imagenes/plantilla/Portlong_Logotipo.jpg" alt="logotipo casa portlong" title="Logotipo casa portlong png" /></a></figure></div>
                    
                <div class="navegacion">
                    <div class="menu_bar">
                    <a class="bt-menu">Menú <span class="icon-menu"></span> </a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="../../index.php">Home</a></li>
                            <li><a href="../../interiores/nuestras-empresa.php">Our Company</a></li>
                            <li><a href="../../interiores/servicios.php">Services</a></li>
                            <li><a href="../../interiores/clientes.php">Customers</a></li>
                            <li><a href="../../interiores/galeria-proyectos.php">Project Gallery</a></li>
                            <li><a href="../../interiores/contacto.php">Contact</a></li>
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
	
    <h1 class="titulos">Galería</h1>
    
    <div class="galeria">
    	
        <div class="gal_ind col-xl-3 col-mc-4 col-ch-12">
        <a href="../imagenes/galeria/galeria1.jpg" rel="lightbox[groupName1]" data-ob_share="false" class="mosaic-overlay">
        	<figure><img src="../imagenes/galeria/galeria1.jpg" title="Galeria Lorem ipsum " alt="Lorem ipsum "><div class="mascara"><span class="icon-lupa2"></span></div></figure>
            <h2>Lorem ipsum </h2>
       </a>
       </div>
        
        <div class="gal_ind col-xl-3 col-mc-4 col-ch-12">
        <a href="../imagenes/galeria/galeria2.jpg" rel="lightbox[groupName1]" data-ob_share="false" class="mosaic-overlay">
        	<figure><img src="../imagenes/galeria/galeria2.jpg" title="Galeria Lorem ipsum " alt="Lorem ipsum "><div class="mascara"><span class="icon-lupa2"></span></div></figure>
            <h2>Lorem ipsum </h2>
        </a>
        </div>
        
        <div class="gal_ind col-xl-3 col-mc-4 col-ch-12">
        <a href="../imagenes/galeria/galeria3.jpg" rel="lightbox[groupName1]" data-ob_share="false" class="mosaic-overlay">
        	<figure><img src="../imagenes/galeria/galeria3.jpg" title="Galeria Lorem ipsum " alt="Lorem ipsum "><div class="mascara"><span class="icon-lupa2"></span></div></figure>
            <h2>Lorem ipsum </h2>
        </a>
        </div>
        
        <div class="gal_ind col-xl-3 col-mc-4 col-ch-12">
        <a href="../imagenes/galeria/galeria4.jpg" rel="lightbox[groupName1]" data-ob_share="false" class="mosaic-overlay">
        	<figure><img src="../imagenes/galeria/galeria4.jpg" title="Galeria Lorem ipsum " alt="Lorem ipsum "><div class="mascara"><span class="icon-lupa2"></span></div></figure>
            <h2>Lorem ipsum </h2>
        </a>
        </div>
        
        
        <div class="gal_ind col-xl-3 col-mc-4 col-ch-12">
        <a href="../imagenes/galeria/galeria5.jpg" rel="lightbox[groupName1]" data-ob_share="false" class="mosaic-overlay">
        	<figure><img src="../imagenes/galeria/galeria5.jpg" title="Galeria Lorem ipsum " alt="Lorem ipsum "><div class="mascara"><span class="icon-lupa2"></span></div></figure>
            <h2>Lorem ipsum </h2>
        </a>
        </div>
        
        <div class="gal_ind col-xl-3 col-mc-4 col-ch-12">
        <a href="../imagenes/galeria/galeria6.jpg" rel="lightbox[groupName1]" data-ob_share="false" class="mosaic-overlay">
        	<figure><img src="../imagenes/galeria/galeria6.jpg" title="Galeria Lorem ipsum " alt="Lorem ipsum "><div class="mascara"><span class="icon-lupa2"></span></div></figure>
            <h2>Lorem ipsum </h2>
        </a>
        </div>
        
        <div class="gal_ind col-xl-3 col-mc-4 col-ch-12">
        <a href="../imagenes/galeria/galeria7.jpg" rel="lightbox[groupName1]" data-ob_share="false" class="mosaic-overlay">
        	<figure><img src="../imagenes/galeria/galeria7.jpg" title="Galeria Lorem ipsum " alt="Lorem ipsum "><div class="mascara"><span class="icon-lupa2"></span></div></figure>
            <h2>Lorem ipsum </h2>
        </a>
        </div>
        
        <div class="gal_ind col-xl-3 col-mc-4 col-ch-12">
        <a href="../imagenes/galeria/galeria1.jpg" rel="lightbox[groupName1]" data-ob_share="false" class="mosaic-overlay">
        	<figure><img src="../imagenes/galeria/galeria1.jpg" title="Galeria Lorem ipsum " alt="Lorem ipsum "><div class="mascara"><span class="icon-lupa2"></span></div></figure>
            <h2>Lorem ipsum </h2>
        </a>
        </div>
        
        <div class="gal_ind col-xl-3 col-mc-4 col-ch-12">
        <a href="../imagenes/galeria/galeria9.jpg" rel="lightbox[groupName1]" data-ob_share="false" class="mosaic-overlay">
        	<figure><img src="../imagenes/galeria/galeria9.jpg" title="Galeria Lorem ipsum " alt="Lorem ipsum "><div class="mascara"><span class="icon-lupa2"></span></div></figure>
            <h2>Lorem ipsum </h2>
        </a>
        </div>
        
        <div class="gal_ind col-xl-3 col-mc-4 col-ch-12">
        <a href="../imagenes/galeria/galeria10.jpg" rel="lightbox[groupName1]" data-ob_share="false" class="mosaic-overlay">
        	<figure><img src="../imagenes/galeria/galeria10.jpg" title="Galeria Lorem ipsum " alt="Lorem ipsum "><div class="mascara"><span class="icon-lupa2"></span></div></figure>
            <h2>Lorem ipsum </h2>
        </a>
        </div>
        
        <div class="gal_ind col-xl-3 col-mc-4 col-ch-12">
        <a href="../imagenes/galeria/galeria11.jpg" rel="lightbox[groupName1]" data-ob_share="false" class="mosaic-overlay">
        	<figure><img src="../imagenes/galeria/galeria11.jpg" title="Galeria Lorem ipsum " alt="Lorem ipsum "><div class="mascara"><span class="icon-lupa2"></span></div></figure>
            <h2>Lorem ipsum </h2>
        </a>
        </div>
        
        <div class="gal_ind col-xl-3 col-mc-4 col-ch-12">
        <a href="../imagenes/galeria/galeria12.jpg" rel="lightbox[groupName1]" data-ob_share="false" class="mosaic-overlay">
        	<figure><img src="../imagenes/galeria/galeria12.jpg" title="Galeria Lorem ipsum " alt="Lorem ipsum "><div class="mascara"><span class="icon-lupa2"></span></div></figure>
            <h2>Lorem ipsum </h2>
        </a>
        </div>
        
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
    		<a href="../../interiores/aviso.php"><?php echo $tita2; ?></a>
        </div>
        
        <div class="pie2">
        	<p><?php echo $tita1; ?></p>
             <a href="http://www.wwpc.eu.com/" target="_blank"><figure><img src="../../img/op/<?php echo $imga3; ?>" title="<?php echo $tit_imga3; ?>" alt="<?php echo $desc_imga3; ?>" ></figure></a>
        </div>
        
    </div>      
    </article>

</footer>
</body>
<!-- InstanceEnd -->