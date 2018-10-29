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
$index='nosotros'; ?>
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
				  "nosotros" => "b1",
				   "mision" => "b2",
				   "vision" => "b3",
				   
				   "imagen' and id_op='9" => "i1",
				   "imagen' and id_op='10" => "i2",
				   "imagen' and id_op='11" => "i3"
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

<link type="image/x-icon" href="../imagenes/favicon.ico" rel="icon" /> 

<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../css/estilos_responsive.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="../css/menu.js"></script> 



<title><?php echo $meta_tit; ?></title>
<!-- InstanceBeginEditable name="doctitle" -->
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

    <div id="logotipo"><figure><a href="../index.php"><img src="../imagenes/plantilla/Portlong_Logotipo.jpg" alt="logotipo casa portlong" title="Logotipo casa portlong png" /></a></figure></div>
                    
                <div class="navegacion">
                    <div class="menu_bar">
                    <a class="bt-menu">Menú <span class="icon-menu"></span> </a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="nuestras-empresa.php">Our Company</a></li>
                            <li><a href="servicios.php">Services</a></li>
                            <li><a href="clientes.php">Customers</a></li>
                            <li><a href="galeria-proyectos.php">Project Gallery</a></li>
                            <li><a href="contacto.php">Contact</a></li>
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
    	<h3 class="titulos"><?php echo $titb1; ?></h3>
        <h4><?php echo $subb1; ?></h4>
        <?php echo $descb1; ?>
    </div>
    
    <div class="nos_der">
    	<div class="img_izq">
        	<figure><img src="../img/op/<?php echo $imgi1; ?>" title="<?php echo $titi1; ?>" alt="<?php echo $desc_imgi1; ?>" ></figure>
            <figure><img src="../img/op/<?php echo $imgi2; ?>" title="<?php echo $titi2; ?>" alt="<?php echo $desc_imgi2; ?>" ></figure>
        </div>
        
        <div class="img_der"><figure><img src="../img/op/<?php echo $imgi3; ?>" title="<?php echo $titi3; ?>" alt="<?php echo $desc_imgi3; ?>" ></figure></div>
        
    </div>
    
</div>

<div id="nosotros2">
<div class="wrapper">
	
    <div class="nos2_1">
    	<figure class="img_nos2"><img src="../img/op/<?php echo $imgb2; ?>" title="<?php echo $tit_imgb2; ?>" alt="<?php echo $desc_imgb2; ?>" ></figure>
        <article class="text_nos2">
        	<h2><?php echo $titb2; ?></h2>
           <div class="texto_general"> <?php echo $descb2; ?></div>
        </article>
    </div>
    
    <div class="separador_nos"><img src="../imagenes/index/separador.png" title="Separador" alt="separa los bloques" ></div>
    
    <div class="nos2_2">
    	<figure class="img_nos2"><img src="../img/op/<?php echo $imgb3; ?>" title="<?php echo $tit_imgb3; ?>" alt="<?php echo $desc_imgb3; ?>" ></figure>
        <article class="text_nos2">
        	<h2><?php echo $titb3; ?></h2>
            <div class="texto_general"> <?php echo $descb3; ?></div>
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
    		<a href="aviso.php"><?php echo $tita2; ?></a>
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