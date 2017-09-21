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
<meta name="keywords" content="portlog, logista, portlog contacto, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, importaciones, exportaciones, empresas de logistica, logistica internacional" />
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
<title>PORTLOG INTERNATIONAL</title>

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
<div id="contacto" class="wrapper">
<h1 class="titulos">Contacto</h1>


	<div class="cont_izq">
    	<figure class="img_contacto"><img src="../imagenes/contacto/cambio1.jpg" title="Contacto" alt="Contacto Imagen" ></figure>
        
        <div class="imgagenes_contacto">
        	<figure><a href="#"><img src="../imagenes/contacto/wwpc.jpg" title="alianza" alt="alianza"></a></figure>
            <figure class="border_cont"><a href="#"><img src="../imagenes/contacto/amanac.jpg" title="alianza" alt="alianza"></a></figure>
            <figure><a href="#"><img src="../imagenes/contacto/iata.jpg" title="alianza" alt="alianza"></a></figure>
        </div>
    </div>
    
    <div class="cont_der">
    	<h2>(*) Campos obligatorios</h2>
        
        <div class="gracias">
        	<h2>Gracias</h2>
            <p>Pronto recibirás un correo por parte de nuestro equipo </p>
        </div>
    </div>
</div>
<div id="contacto" class="wrapper">
<h5>"WORK WITH THE EXPERTS"</h5>
</div>

<div id="contato2">
<div class="wrapper">
	
    <div class="dato">
    	<h5>Dirección:</h5>
        <p>HQ en Cd. De México, Ixcateopan No. 245 Int. 2, Col. Santa Cruz Atoyac
C.P. 03100 México, D.F.</p>
    </div>
    
    <div class="dato2">
    	<h5>Teléfono:</h5>
        <p>5605-6647 <br> 5605-8353</p>
    </div>
    
    <div class="dato3">
    	<h5>Email:</h5>
        <p>mbuetler@portloginter.com <br> operaciones@portloginter.com</p>
    </div>
    
</div>	
</div>

<div id="contacto3" class="wrapper">
	
    <figure class="cont3_img"><img src="../imagenes/contacto/mapa-cobertura.jpg" title="Contamos con cobertura" alt="Contamos con cobertura" ></figure>
    
    <article class="cont3_text">
    	<h3>Contamos con cobertura en:</h3>
        <div class="texto_general">
        <ul>
        	<li>Ciudad de México</li>
            <li>Querétaro</li>
            <li>Veracruz,</li>
            <li>Manzanillo</li>
            <li>Lázaro Cárdenas,</li>
            <li>Nuevo Laredo</li>
            <li>Altamira/Tampico</li>
            <li>Coatzacoalcos/Dos Bocas,</li> 
            <li>Ensenada</li>
            <li>Salina Cruz.</li>
        </ul>
        </div>
    </article>

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