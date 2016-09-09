<!DOCTYPE HTML>
<?php
include('../../admin/function/functions.php');
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
<meta name="keywords" content="portlog, logista, portlog inicio, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, servicios aereos, servicios terrestres, servicios maritimos, importacion, exportacion, servicios logisticos" />
<meta name="description" content="Para servir a nuestros Clientes, Proveedores y Agentes Contamos con cobertura y asesoria en los principales puertos de nuestro país"/>
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

<link type="image/x-icon" href="../imagenes/favicon.ico" rel="icon" /> 

<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../css/estilos_responsive.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="../css/menu.js"></script> 



<title><?php echo $meta_tit; ?></title>
<!-- InstanceBeginEditable name="doctitle" -->
<title>PORTLOG INTERNATIONAL | Inicio</title>

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
        	<a href="http://www.portloginter.com">Español</a> | <a href="http://en.portloginter.com/">English</a>
        </div>
    </div>
    
	<div class="wrapper">

    <div id="logotipo"><figure><a href="../index.php"><img src="../imagenes/plantilla/Portlong_Logotipo.jpg" alt="logotipo casa portlong" title="Logotipo casa portlong png" /></a></figure></div>
                    
                <div class="navegacion">
                    <div class="menu_bar">
                    <a class="bt-menu">Menú <span class="icon-menu"></span> </a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="../interiores/nuestras-empresa.php">Our Company</a></li>
                            <li><a href="../interiores/servicios.php">Services</a></li>
                            <li><a href="../interiores/clientes.php">Customers</a></li>
                            <li><a href="../interiores/galeria-proyectos.php">Project Gallery</a></li>
                            <li><a href="../interiores/contacto.php">Contact</a></li>
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
        	<figure class="img_banner"><img src="imagenes/banner/b1.jpg" ><div class="tit_banner"><h3>Proyectos Industriales</h3><p>Siempre sus productos viajaran sin riesgo, seguros y a tiempo</p></div></figure>
            <figure class="img_banner"><img src="imagenes/banner/b2.jpg" ><div class="tit_banner"><h3>Transportación aérea</h3><p>Siempre sus productos viajaran sin riesgo, seguros y a tiempo</p></div></figure>
            <figure class="img_banner"><img src="imagenes/banner/b3.jpg" ><div class="tit_banner"><h3>TRANSPORTACIÓN MARÍTIMA</h3><p>Con la mejor calidad y la experiencia que siempre nos a distinguido</p></div></figure>
            <figure class="img_banner"><img src="imagenes/banner/b4.jpg" ><div class="tit_banner"><h3>Transporte Terrestre</h3><p>Con la mejor calidad y experiencia que siempre nos han distinguido</p></div></figure>
		</div>
    </div>
</div>

<div id="bloque1" class="wrapper">
<div class="slider responsive">

	<div class="bloq1">
    	<figure><img src="imagenes/index/servicios-aereos.png" title="" alt=""></figure>
        <h4>Servicios Aéreos</h4>
        <p>Servicio de Charters para carga Aérea.</p>
    </div>
    
    <div class="bloq1">
    	<figure><img src="imagenes/index/servicios-terrestres.png" title="" alt=""></figure>
        <h4>Servicios Terrestres</h4>
        <p>Contamos con unidades especializadas.</p>
    </div>
    
    <div class="bloq1">
    	<figure><img src="imagenes/index/servicios-maritimos.png" title="" alt=""></figure>
        <h4>Servicios Marítimos</h4>
        <p>Representados por 250 oficinas.</p>
    </div>
    
</div>
</div>

<div id="bloque2">
<div class="wrapper">	
    
    <div class="bloq2_1">
    	<figure class="col-xl-4"><img src="imagenes/index/clientes-provedores-agentes-portlog.png" title="Clientes, Proveedores" alt="Contamos con cobertura y asesoria en los principales puertos de nuestro país" ></figure>
        
        <article class="col-xl-8 col-mc-12">
        	<h5>Para servir a nuestros</h5>
            <h3>Clientes, Proveedores y Agentes </h3>
            <div class="texto_general"> 
                <p>Contamos con cobertura y asesoria en los principales puertos de nuestro país:</p>
                <ul>
                    <li>Ciudad deMéxico</li>
                    <li>Manzanillo</li>
                    <li>Coatzacoalcos</li>
                    <li>Querétaro</li>
                    <li>LázaroCárdenas</li>
                    <li>Ensenada</li>
                    <li>Veracruz</li>
                    <li>Nuevo Laredo </li>
                    <li>Salina Cruz </li>
                    <li>Guadalajara </li>
                    <li>Altamira</li>
                </ul>
            </div>
        </article>
    </div>
    
    <figure class="separador"><img src="imagenes/index/separador.png" title="Separador" alt="separa los bloques"></figure>
    
    <div class="bloq2_2">
    	<article class="col-xl-4 col-mc-6 col-ch-12">
    		<h3>Experiencia en: </h3>
            <div class="texto_general">
                <ul>
                    <li>Proyectos Industriales</li>
                    <li>Importación</li>
                    <li>Exportación</li>
                    <li>Servicios logisticos</li>
                </ul>
            </div>
    	</article>
        
        <figure class="col-xl-8 col-mc-6 col-ch-12"><img src="imagenes/index/importacion-exportacion.png" title="Experiencia" alt="Importación, Exportación, Servicios logisticos" ></figure>
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
    		<a href="../interiores/aviso.php"><?php echo $tita2; ?></a>
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