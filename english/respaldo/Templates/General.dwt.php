<!DOCTYPE HTML>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

<!-- TemplateBeginEditable name="head" -->	

<?php 
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$index='inicio'; ?>
<!-- TemplateEndEditable -->
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
<!-- TemplateBeginEditable name="metas" -->	
<meta name="title" content="Portlog" />
<meta name="keywords" content="portlog, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL" />
<meta name="description" content=""/>
<meta name="site" content="">
<!-- TemplateEndEditable -->
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



<!-- TemplateBeginEditable name="doctitle" -->
<title>PORTLOG INTERNATIONAL</title>

<!-- TemplateEndEditable -->


</head>
<!-- oncontextmenu="return false" ondragstart="return false" onmousedown="return true" onselectstart="return false"-->
<body>
<header>
    <article class="head">
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
                            <li><a href="../interiores/clientes.php">Clients</a></li>
                            <li><a href="../interiores/galeria-proyectos.php">Project gallery </a></li>
                            <li><a href="../interiores/contacto.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
    </div>  
    </article>
</header>


<section>
<content>
<!-- TemplateBeginEditable name="Contenido" -->Contenido<!-- TemplateEndEditable -->
</content>
</section>

<footer>
	<article class="foot">
    <div class="wrapper">
    	
        <div class="pie1">
        	<p>PORTLOG INTERNATIONAL, S.A. DE C.V.  l  2015</p>
    		<a href="../interiores/aviso.php">Aviso de privacidad</a>
        </div>
        
        <div class="pie2">
        	<p>
Associated Company:</p>
            <a href="http://www.wwpc.eu.com/" target="_blank"><figure><img src="../imagenes/plantilla/WWWPC.png" title="Portlog empresa asociada" alt="empresa asociada Portlog" ></figure></a>
        </div>
        
    </div>      
    </article>

</footer>
</body>