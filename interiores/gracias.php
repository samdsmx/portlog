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
$index='contacto';
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
				  "contacto" => "b1",
				   "direccion" => "b2",
				   "telefono" => "b3",
				   "email" => "b4",
				   "contamos" => "b5",
				   
				    "formulario" => "f1",
				   
				   "cont_img' and id_op='18" => "i1",
				   "cont_img' and id_op='19" => "i2",
				   "cont_img' and id_op='20" => "i3"
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

<link type="image/x-icon" href="../img/favicon/favicon.ico" rel="icon" /> 

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
<div id="contacto" class="wrapper">
<h1 class="titulos"><?php echo $titb1; ?></h1>
<h5><?php echo $subb1; ?></h5>

	<div class="cont_izq">
    	<figure class="img_contacto"><img src="../img/op/<?php echo $imgb1; ?>" title="<?php echo $tit_imgb1; ?>" alt="<?php echo $desc_imgb1; ?>" ></figure>
        
        <div class="imgagenes_contacto">
        	<figure> <a href="http://www.wwpc.eu.com/" target="_blank"><img src="../img/op/<?php echo $imgi1; ?>" title="<?php echo $tit_imgi1; ?>" alt="<?php echo $desc_imgi1; ?>"></a></figure>
            <figure class="border_cont"><a href="#"><img src="../img/op/<?php echo $imgi2; ?>" title="<?php echo $tit_imgi2; ?>" alt="<?php echo $desc_imgi2; ?>"></a></figure>
            <figure><a href="#"><img src="../img/op/<?php echo $imgi3; ?>" title="<?php echo $tit_imgi3; ?>" alt="<?php echo $tit_imgi3; ?>"></a></figure>
        </div>
    </div>
    
    <div class="cont_der">        
        <div class="gracias">
        	<h2><?php echo $subf1; ?></h2>
            <?php echo $textf1; ?>
        </div>
    </div>
</div>

<div id="contato2">
<div class="wrapper">
	
    <div class="dato">
    	<h5><?php echo $titb2; ?>:</h5>
        <p><?php echo $descb2; ?></p>
    </div>
    
    <div class="dato2">
    	<h5><?php echo $titb3; ?>:</h5>
        <p><?php echo $descb3; ?></p>
    </div>
    
    <div class="dato3">
    	<h5><?php echo $titb4; ?>:</h5>
        <p><?php echo $descb4; ?></p>
    </div>
    
</div>	
</div>

<div id="contacto3" class="wrapper">
	
    <figure class="cont3_img"><img src="../img/op/<?php echo $imgb5; ?>" title="<?php echo $tit_imgb5; ?>" alt="<?php echo $desc_imgb5; ?>" ></figure>
    
    <article class="cont3_text">
    	<h3><?php echo $titb5; ?></h3>
        <div class="texto_general">
        <?php echo $descb5; ?>
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