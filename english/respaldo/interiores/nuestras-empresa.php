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
<meta name="keywords" content="portlog, portlog nuestra empresa, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, importaciones, exportaciones, empresas de logistica, logistica internacional" />
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
<title>PORTLOG INTERNATIONAL | Nosotros</title>

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
<div id="nosotros" class="wrapper">
	
    <div class="nos_izq">
    	<h3 class="titulos">Our Company</h3>
        <h4>10 years of experience in international logistics.</h4>
        <p class="texto_general">Portlog is a company with more than 10 years of experience in international logistics, leader in maritime services and transportation and industrial projects with an optimal management of its imports and/or exports to and from any part of the world by being part of a network of renowned logistics companies worldwide and backed by more than 250 offices in 5 continents.</p>
    </div>
    
    <div class="nos_der">
    	<div class="img_izq">
        	<figure><img src="../imagenes/nuestra-empresa/logistica-internacional1.png" title="Imagen Nuestra empresa" alt="Imagen Nuestra empresa" ></figure>
            <figure><img src="../imagenes/nuestra-empresa/logistica-internacional2.png" title="Imagen Nuestra empresa" alt="Imagen Nuestra empresa" ></figure>
        </div>
        
        <div class="img_der"><figure><img src="../imagenes/nuestra-empresa/logistica-internacional.png" title="Imagen Nuestra empresa" alt="Imagen Nuestra empresa" ></figure></div>
        
    </div>
    
</div>

<div id="nosotros2">
<div class="wrapper">
	
    <div class="nos2_1">
    	<figure class="img_nos2"><img src="../imagenes/nuestra-empresa/mision.png" title="Misión" alt="Servir a nuestros clientes, proveedores y agentes " ></figure>
        <article class="text_nos2">
        	<h2>Mission</h2>
           <div class="texto_general"> <p>To serve our clients, service providers and international agents with professionalism, veracity and dedication; looking always towards excellence in service.</p></div>
        </article>
    </div>
    
    <div class="separador_nos"><img src="../imagenes/index/separador.png" title="Separador" alt="separa los bloques" ></div>
    
    <div class="nos2_2">
    	<figure class="img_nos2"><img src="../imagenes/nuestra-empresa/vision.png" title="Visión" alt="Supervisar de manera continua los requerimientos de logística" ></figure>
        <article class="text_nos2">
        	<h2>Vision</h2>
            <div class="texto_general"> <p>To supervise in a continuous manner the logistic requirements of our clients, thus assuring long term commercial relations through a process of ongoing improvement.</p></div>
        </article>
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