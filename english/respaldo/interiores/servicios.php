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
<meta name="keywords" content="portlog, portlog servicios, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, carga de proyecto, transporte martimo, transporte aereo, transporte terrestre, estrategias logisticas, importación, exportación " />
<meta name="description" content="Creamos soluciones de Transporte Aéreo de importación y exportación  que se adaptan a necesidades de urgencia o especialización de cada tipo de carga y ofrecemos:"/>
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
<title>PORTLOG INTERNATIONAL | Servicios</title>

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
<div class="wrapper"><h1 class="titulos">Services</h1></div>

	

<div class="servicios">
	<div class="servicios1">
    <div class="wrapper">
        <figure><img src="../imagenes/servicios/transporte-maritimo.png" title="Transporte Aéreo" alt="Transporte Aéreo de importación y exportación"></figure>
        <article>
            <h3>Sea Transportation</h3>
            <div class="texto_general">
                <p>We offer an extensive gamma of options with renowned sea shipping lines for import and export Maritime Transport services to and from any part of the world, and we also offer.</p>
                <ul>
                    <li>Maritime transport /NVOCC / FCL 20/40 BOX, HC, OT, FR, Reefer/ LCL</li>
                    <li>Leasing of ships and barges</li>
                    <li>Purchase and sale of shipping containers SOC</li>
                    <li>Consolidations and un-consolidations, truncated, port maneuvers</li>
                    <li>Customs offices in the main ports of the country.</li>
                    <li>Logistics service in origin and destination through our worldwide offices.</li>
                    <li>Storage/distribution centers</li>
                    <li>Advisory services in foreign commerce and customs services</li>
                    <li>International moving.</li>
                    <li>Refrigerated transport of perishable goods</li>
                </ul>
            </div>
        </article>
    </div>
    </div>
  
    <div class="servicios2">
    <div class="wrapper">
        <figure><img src="../imagenes/servicios/cargaproyecto1.jpg" title="Carga Proyecto" alt="Como líder en el mercado en carga sobredimensionada y pesada"></figure>
        <article>
            <h3>Cargo Projects</h3>
            <div class="texto_general">
                <p>As a leader in over-dimensioned and heavy cargo, we count with the support of experimented national and international service providers in naval and land transport with specialized equipment that, as a whole, provide solutions for cargo projects for your imports and exports to and from any part in the world, we also offer.</p>
                <ul>
                    <li>Specialized maritime equipment for industrial projects with over-dimensioned cargo. BreakBulk , Heavy lift, Ro-Ro, MAFI, Flat Rack, Open Top.</li>
                    <li>Land services with specialized equipment/over dimensioned-heavy, lowboy, semi-lowboy, modular, dolly.</li>
                    <li>Lift trucks, cargo rollers, hydraulic jacks, Pallet movers, installations and load lifting, industrial cranes 50, 100, 500, 1000 tons, sea cranes.</li>
                    <li>Consolidations and un-consolidations, truncated, port maneuvers</li>
                    <li>OFFSHORE maritime services.</li>
                    <li>Customs offices in the main ports, airports and borders of the country.</li>
                    <li>Logistics services in origin and destination through our specialized offices in cargo projects in the entire world.</li>
                    <li>Ship and barge leasing.</li>
                    <li>Purchase and sale of shipping containers SOC</li>
                    <li>Industrial packing/tags</li>
                    <li>Certified inspections SGS/Veritas</li>
                    <li>Route studies for cargo projects</li>
                </ul>
            </div>
        </article>
    </div>
    </div>
 
  
    <div class="servicios1">
    <div class="wrapper">
    
        <figure><img src="../imagenes/servicios/transporte-aereo.png" title="Transporte Aéreo" alt="Transporte Aéreo de importación y exportación"></figure>
        <article>
            <h3>Air Transportation</h3>
            <div class="texto_general">
                <p>We create Air Transportation solutions for imports and exports that are adapted to the urgent or specialized necessities of each kind of cargo.  We offer.</p>
                <ul>
                    <li>Direct IATA air transportation, consolidated and specialized services in air cargo charters.</li>
                    <li>Customs brokerage offices in the main airports of the country.</li>
                    <li>Hand carry</li>
                    <li>Logistic services in origin and destination through our worldwide offices. </li>
                    <li>Storage/distribution centers</li>
                    <li>Advisory services in foreign commerce and customs services</li>
                    <li>International moving.</li>
                    <li>Refrigerated transport of perishable goods</li>
                </ul>
            </div>    
        </article>
    </div>
    </div>
 
    
    
    <div class="servicios2">
    <div class="wrapper">
        <figure><img src="../imagenes/servicios/transporte-terrestre.png" title="Transporte Terrestre" alt="__"></figure>
        <article>
            <h3>Land Transportation</h3>
            <div class="texto_general">
                <p>We have a wide range of solutions for imports and exports, with service providers with standard units for any kind of cargo and specialized land equipment to and from Canada, the United States and Central America, we also offer:</p>
                <ul>
                    <li>National/international transport services for FTL/LTL, platform, and dry box.</li>
                    <li>Land services with specialized equipment/over dimensioned - heavy, lowboy, semi-lowboy, modular, dolly.</li>
                    <li>Customs offices in the main ports, airports and borders of the country.</li>
                    <li>International moving.</li>
                    <li>Refrigerated transport of perishable goods</li>
                </ul>
            </div>
        </article>
    </div>
    </div>
    
    
    
    <div class="servicios1">
    <div class="wrapper">
        <figure><img src="../imagenes/servicios/otros-servicios.png" title="Otros servicios" alt="Como soporte adicional a nuestros servicios marítimos, carga proyecto, terrestres y aéreos ofrecemos:"></figure>
        <article>
            <h3>Other services</h3>
            <div class="texto_general">
                <p>As an additional support to our maritime services, land, and air cargo projects, we offer:</p>
                <ul>
                    <li>Contracts/logistic strategies</li>
                    <li>Storage/distribution centers</li>
                    <li>Fiscal warehouse</li>
                    <li>Commerce services</li>
                    <li>Transport insurance, national and international</li>
                    <li>Any type of packaging</li>
                    <li>Handling and advisory for dangerous cargo.</li>
                </ul>
            </div>
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