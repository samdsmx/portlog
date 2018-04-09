<!DOCTYPE HTML>
<?php
include('admin/function/functions.php');
require_once('Connections/con_admin.php');
require_once('admin/paginacion/paginator.class.php');
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
$index='inicio'; ?>
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
				  "bloque1" => "b1",
				   "bloque2" => "b2",
				   "bloque3" => "b3",
				   "bloque4" => "b4",
				   "bloque5" => "b5"
				  );
				   
foreach($seccion as $seccion => $nombre){		
mysqli_select_db($con_admin, $database_con_admin);
$qry2 =("SELECT * FROM op4 WHERE seccion='$seccion'");
$r2=mysqli_query($con_admin, $qry2) or die(mysqli_error());
if ( $r2 !== false && mysqli_num_rows($r2) > 0 ) 
{
	$a2 = mysqli_fetch_assoc($r2);
   			${'id_op'.$nombre} = stripslashes($a2['id_op']);
			${'tit'.$nombre} = stripslashes($a2['titulo']);
			${'sub'.$nombre} = stripslashes($a2['subtitulo']);
			${'desc'.$nombre} = stripslashes($a2['descripcion']);
			${'text'.$nombre} = stripslashes($a2['texto']);
			${'img'.$nombre} = stripslashes($a2['imagen']);
			${'url'.$nombre} = stripslashes($a2['url']);
			${'arch'.$nombre} = stripslashes($a2['archivo']);
			${'tit_img'.$nombre} = stripslashes($a2['titulo_imagen']);
			${'desc_img'.$nombre} = stripslashes($a2['desc_imagen']);
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

<link type="image/x-icon" href="imagenes/favicon.ico" rel="icon" /> 

<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_responsive.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="css/menu.js"></script> 



<title><?php echo $meta_tit; ?></title>
<!-- InstanceBeginEditable name="doctitle" -->
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script>
	$(document).ready(function(){
		
		$('.single-item').slick({
		  infinite: true,
	autoplay: true,
	autoplaySpeed: 5000,
  speed: 800,
  arrows:true,
		  fade:true
		});
		
		$('.responsive').slick({
	autoplay: true,
	autoplaySpeed: 5000,
  infinite: true,
  speed: 800,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 736,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 475,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
		
});		
</script>
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

    <div id="logotipo"><figure><a href="index.php"><img src="imagenes/plantilla/Portlong_Logotipo.jpg" alt="logotipo casa portlong" title="Logotipo casa portlong png" /></a></figure></div>
                    
                <div class="navegacion">
                    <div class="menu_bar">
                    <a class="bt-menu">Menú <span class="icon-menu"></span> </a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="interiores/nuestras-empresa.php">Our Company</a></li>
                            <li><a href="interiores/servicios.php">Services</a></li>
                            <li><a href="interiores/clientes.php">Customers</a></li>
                            <li><a href="interiores/galeria-proyectos.php">Project Gallery</a></li>
                            <li><a href="interiores/contacto.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
    </div>  
    </article>
</header>


<section>
<content>
<!-- InstanceBeginEditable name="Contenido" -->
<div id="banner">
    <div class="slider single-item">
<?php              
mysqli_select_db($con_admin, $database_con_admin);
$qry2 = "SELECT * FROM banner ORDER BY orden ASC";
$r2 = mysqli_query($con_admin, $qry2) or die(header('location:home.php'));
if ( $r2 !== false && mysqli_num_rows($r2) > 0 ) 
{
	while ($a2 = mysqli_fetch_assoc($r2))
	{
		$img_banner = test_input($a2['imagen']);
		$titulo = test_input($a2['titulo']);
		$descripcion = test_input($a2['descripcion']);
?>     
        	<figure class="img_banner"><img src="img/banner/<?php echo $img_banner; ?>" ><div class="tit_banner"><h3><?php echo $titulo; ?></h3><p><?php echo $descripcion; ?></p></div></figure>
   <?php }
}
?>         
		</div>
    </div>
</div>

<div id="bloque1" class="wrapper">
<div class="slider responsive">

	<div class="bloq1">
    	<figure><img src="img/op/<?php echo $imgb1; ?>" title="<?php echo $tit_imgb1; ?>" alt="<?php echo $desc_imgb1; ?>"></figure>
        <h4><?php echo $titb1; ?></h4>
        <p><?php echo $subb1; ?></p>
    </div>
    
    <div class="bloq1">
    	<figure><img src="img/op/<?php echo $imgb2; ?>" title="<?php echo $tit_imgb2; ?>" alt="<?php echo $desc_imgb2; ?>"></figure>
        <h4><?php echo $titb2; ?></h4>
        <p><?php echo $subb2; ?></p>
    </div>
    
    <div class="bloq1">
    	<figure><img src="img/op/<?php echo $imgb3; ?>" title="<?php echo $tit_imgb3; ?>" alt="<?php echo $desc_imgb3; ?>"></figure>
        <h4><?php echo $titb3; ?></h4>
        <p><?php echo $subb3; ?></p>
    </div>
    
</div>
</div>

<div id="bloque2">
<div class="wrapper">	
    
    <div class="bloq2_1">
    	<figure class="col-xl-4"><img src="img/op/<?php echo $imgb4; ?>" title="<?php echo $titb4; ?>" alt="<?php echo $desc_imgb4; ?>" ></figure>
        
        <article class="col-xl-8 col-mc-12">
        	<h5><?php echo $titb4; ?></h5>
            <h3><?php echo $subb4; ?></h3>
            <div class="texto_general"> 
                <?php echo $descb4; ?>
            </div>
        </article>
    </div>
    
    <figure class="separador"><img src="imagenes/index/separador.png" title="Separador" alt="separa los bloques"></figure>
    
    <div class="bloq2_2">
    	<article class="col-xl-4 col-mc-6 col-ch-12">
    		<h3><?php echo $titb5; ?></h3>
            <div class="texto_general">
                <?php echo $descb5; ?>
            </div>
    	</article>
        
        <figure class="col-xl-8 col-mc-6 col-ch-12"><img src="img/op/<?php echo $imgb5; ?>" title="<?php echo $tit_imgb5; ?>" alt="<?php echo $desc_imgb5; ?>" ></figure>
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
    		<a href="interiores/aviso.php"><?php echo $tita2; ?></a>
        </div>
        
        <div class="pie2">
        	<p><?php echo $tita1; ?></p>
             <a href="http://www.wwpc.eu.com/" target="_blank"><figure><img src="img/op/<?php echo $imga3; ?>" title="<?php echo $tit_imga3; ?>" alt="<?php echo $desc_imga3; ?>" ></figure></a>
        </div>
        
    </div>      
    </article>

</footer>
</body>
<!-- InstanceEnd -->