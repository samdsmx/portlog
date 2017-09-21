<?php session_start();?>
<!DOCTYPE html><html lang="es"><!-- InstanceBegin template="/Templates/General_admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<?php
include('function/functions.php');
require_once('../Connections/con_admin.php');
require_once('../admin/paginacion/paginator.class.php');
extract($_REQUEST);
if (isset($_SESSION["id"])) {
	$id=$_SESSION["id"];
} else {
	echo"<script language='javascript'>window.location='index.php'</script>";
}
?><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Always force latest IE rendering engine & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="cleartype" content="on">
<!-- Responsive and mobile friendly stuff -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<!--------------------------------CODIGO DE COMPATIBILIDAD-------------------------------->
<meta http-equiv="X-UA-Compatible" content="IE=8"/>
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
<!--------------------------------CODIGO DE COMPATIBILIDAD-------------------------------->
<!--------------------------------FUENTES GOOGLE-------------------------------->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,600,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
<!--------------------------------FUENTES GOOGLE-------------------------------->
<link href="css/main.css" rel="stylesheet" type="text/css" />
<!--------------------------------FAVICON-------------------------------->
<link type="image/x-icon" href="imagenes/plantilla/favicon.ico" rel="icon" /> 
<!--------------------------------FAVICON-------------------------------->
<!--------------------------------ESTILOS-------------------------------->
<link href="css/normalize.css" rel="stylesheet" type="text/css" />
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_responsive.css" rel="stylesheet" type="text/css" />
<link href="paginacion/paginacion.css" rel="stylesheet" type="text/css" />
<!--------------------------------ESTILOS-------------------------------->
<script src="menu/js/jquery-latest.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="menu/css/icomoon.css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'/>
<style type="text/css">
/* body	*/
html, body {
	margin: 0 auto;
	padding: 0;
	height: 100%;
	font-family: "Open Sans", Helvetica, sans-serif;
}
/* body	*/
</style>
<script type="text/javascript">
eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('$(o).i(4(){$("p").q(\'<r t="u" m="9/3-6-0.9"/>\');s a="";$("#3-0").c(4(){$("#3-6-0 #0").g()});$(h).f(4(){$("#3-6-0 #0").j("k")});$("#0 a.l").c(4(){d(a!=""){$("#"+a).n("a").e("7");$("#"+a).b("8")};d(a==$(1).5("2")){$("#"+$(1).5("2")).b("8");$(1).e("7");a=""}v{$("#"+$(1).5("2")).w("8");a=$(1).5("2");$(1).x("7")};y z})});',36,36,'menu|this|name|responsive|function|attr|admin|downarrow|fast|css||slideUp|click|if|removeClass|resize|slideToggle|window|ready|removeAttr|style|submenu|href|prev|document|head|append|link|var|rel|stylesheet|else|slideDown|addClass|return|false'.split('|'),0,{}))
</script>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Admin Central</title>
<?php
$sec="redes";

?>
<script type="text/javascript">
function goBack(){
	location.href="posicionamento.php";
}
</script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="Scripts" -->
<!-- InstanceEndEditable -->


</head>

<body>
<!--*************************************** HEAD ***********************************************-->   

<header id="encabezado">
	<article id="back-negro">
    	<div id="centro">
      		<div id="boton-sesion"><a href="logout.php">Cerrar Sesión</a></div>
        </div>    
    </article>
    
    <article id="datos-encabezado">
    	<div id="centro2">
    		<figure id="logo"><a href="cms.php"><img src="imagenes/plantilla/admin-central-logotipo.png" width="100%" border="0"></a></figure>
        	<div id="telefono">
					<h2>Soporte Técnico</h2>
            		<p>01 (55) 5870 3956</p>
                </div>    
        	</div>
         </div>   
    </article>
</header>   
<!--*************************************** HEAD ***********************************************-->  

<div id="centro3">     
<div id="responsive-admin-menu">
	<div id="responsive-menu">Menú
		<div class="menuicon">&equiv;</div>
	</div>
	


	<!--Menu-->
	<div id="menu">
    	<a href="home.php" title="Inicio"><i class="icon-home"></i><span>Inicio</span></a>
		<a href="" title="Configuración" class="submenu" name="configuracion-sub"><i class="icon-gear"></i><span>Configuración</span></a>
        	<!-- Media Sub Menu -->
		  <div id="configuracion-sub">
				<a href="logo_editar.php?sec=cms" title="Video Gallery"><i class="icon-film"></i><span>Logotipo</span></a>
<a href="favicon_editar.php?sec=cms" title="Photo Gallery"><i class="icon-picture"></i><span>Favicon</span></a></div>
			<!-- Media Sub Menu END -->
		<a href="" title="Redes Sociales" class="submenu" name="redes-sub"><i class="icon-share2"></i><span>Redes Sociales</span></a>
        	<!-- Media Sub Menu -->
            <div id="redes-sub">
<?php
 /*?>$redes = array (	
				   "red1" => "r1"
				   );
				   
foreach($redes as $seccion_redes => $nombre){		
mysqli_select_db($con_admin, $database_con_admin);
$qry2 =("SELECT * FROM op4 WHERE seccion='$seccion_redes'");
$r2=mysqli_query($con_admin, $qry2) or die(header('location:../admin/home.php'));
if ( $r2 !== false && mysqli_num_rows($r2) > 0 ) 
{
	$a2 = mysqli_fetch_assoc($r2);
   			${'id_op'.$nombre} = test_input($a2['id_op']);
			${'tit'.$nombre} = test_input($a2['titulo']);
}
}
<?php */?>

				<!--<a href="editar_tv.php?ids=<?php echo $id_opr1; ?>&sec=redes" title="Video Gallery"><i class="icon-film"></i><span><?php echo $titr1; ?></span></a>-->
			</div>
			<!-- Media Sub Menu END -->
		<a href="" title="Posicionamiento" class="submenu" name="posicionamiento-sub"><i class="icon-bars"></i><span>Posicionamiento</span></a>
        	<!-- Media Sub Menu -->
			<div id="posicionamiento-sub">
				<a href="sem.php" title="Photo Gallery"><i class="icon-picture"></i><span>SEM</span></a>
                <a href="seo.php" title="Photo Gallery"><i class="icon-picture"></i><span>SEO</span></a>
<!--                <a href="redes.php" title="Photo Gallery"><i class="icon-picture"></i><span>Redes Sociales</span></a>
-->			</div>
			<!-- Media Sub Menu END -->
		<a href="" title="Administrador de Contenidos" class="submenu" name="conteidos-sub"><i class="icon-display"></i><span>Administrador de Contenidos</span></a>
			<!-- Media Sub Menu -->
			<div id="conteidos-sub">
<?php
$botonera = array ("inicio.php" => "Inicio",
				   "nosotros.php" => "Nuestra empresa",
				   "servicios.php" => "Servicios",
				   "galeria.php" => "Galería de proyectos",
				   );
				   
				   
foreach($botonera as $file => $text){				   
?>				
                <a href="<?php echo $file;?>" title="Photo Gallery"><i class="icon-picture"></i><span><?php echo $text;?></span></a>
<?php } ?>               
			</div>
			<!-- Media Sub Menu END -->
		<a href="" title="Administrador de usuarios" class="submenu" name="usuarios-sub"><i class="icon-users"></i><span>Administrador de Usuarios</span></a>
        	<!-- Media Sub Menu -->
			<div id="usuarios-sub">
				<a href="#" title="Video Gallery"><i class="icon-film"></i><span>Agregar</span></a>
                <a href="#" title="Photo Gallery"><i class="icon-picture"></i><span>Visualizar</span></a>
			</div>
			<!-- Media Sub Menu END -->
		<a href="" title="Contacto" class="submenu" name="contacto-sub"><i class="icon-phone"></i><span>Contacto</span></a>
        	
            <!-- Media Sub Menu -->
			<div id="contacto-sub">
<?php
$contacto = array (	
				   "aviso" => "a1",
				   "contacto" => "c1",
				   "direccion" => "c3",
				   "telefono" => "c4",
				   "email" => "c5",
				   "contamos" => "c6",
				   "formulario" => "f1");
				   
foreach($contacto as $seccion_cont => $nombre){		
mysqli_select_db($con_admin, $database_con_admin);
$qry2 =("SELECT * FROM op4 WHERE seccion='$seccion_cont'");
$r2=mysqli_query($con_admin, $qry2) or die(header('location:../admin/home.php'));
if ( $r2 !== false && mysqli_num_rows($r2) > 0 ) 
{
	$a2 = mysqli_fetch_assoc($r2);
   			${'id_op'.$nombre} = test_input($a2['id_op']);
			${'tit'.$nombre} = test_input($a2['titulo']);
}
}
?>
                <a href="editar_td.php?ids=<?php echo $id_opa1;?>&sec=contacto" title="Video Gallery"><i class="icon-film"></i><span><?php echo $tita1; ?></span></a>
                 <a href="editar_tsi.php?ids=<?php echo $id_opc1;?>&sec=contacto" title="Video Gallery"><i class="icon-film"></i><span><?php echo $titc1; ?></span></a>
                  <a href="editar_tv2.php?ids=0&sec=contacto" title="Video Gallery"><i class="icon-film"></i><span>Imágenes contacto</span></a>
                 <a href="editar_td2.php?ids=<?php echo $id_opc3;?>&sec=contacto" title="Video Gallery"><i class="icon-film"></i><span><?php echo $titc3; ?></span></a>
                 <a href="editar_td2.php?ids=<?php echo $id_opc4;?>&sec=contacto" title="Video Gallery"><i class="icon-film"></i><span><?php echo $titc4; ?></span></a>
                 <a href="editar_td2.php?ids=<?php echo $id_opc5;?>&sec=contacto" title="Video Gallery"><i class="icon-film"></i><span><?php echo $titc5; ?></span></a>
                 <a href="editar_tdi.php?ids=<?php echo $id_opc6;?>&sec=contacto" title="Video Gallery"><i class="icon-film"></i><span><?php echo $titc6; ?></span></a>
                <a href="editar_tcorreo.php?ids=<?php echo $id_opf1;?>&sec=contacto" title="Video Gallery"><i class="icon-film"></i><span><?php echo $titf1; ?></span></a>
			</div>
			<!-- Media Sub Menu END -->
	</div>
	<!--Menu-->


</div>


    
    <div id="contenido">
	<!-- InstanceBeginEditable name="Contenido" -->
    <section id="contenido2">
        	<h1 class="h2"><img src="imagenes/interiores/icono-casa.jpg" width="35" height="24">Redes Sociales</h1>
     <article id="contenido-admin">
       <form action="" method="post" enctype="multipart/form-data" name="formulario" id="formulario" onReset="return goBack();">
            
         <article id="contenido-admin2">
        			<input name="cancelar" type="reset" class="cancelar" id="enviar" value="Cancelar" />
          </article>
            </form>    
      </article>

<?php              
mysqli_select_db($con_admin, $database_con_admin);
$qry = "SELECT * FROM op4 where seccion='red1'";
$r = mysqli_query($con_admin, $qry) or die(header('location:home.php'));
if ( $r !== false && mysqli_num_rows($r) > 0 ) 
{
	while ($a = mysqli_fetch_assoc($r))
	{
		$id_sec_2 = test_input($a['id_op']);  
		$tit_sec_2 = test_input($a['titulo']);
		$subtit_sec_2 = test_input($a['subtitulo']);
?>	        
        <article id="contenido-admin3">
        	<h2 class="subtitulos"><?php echo $tit_sec_2;?></h2>
            <div id="bton" class="modificar"><p><a href="editar_tv.php?ids=<?php echo $id_sec_2;?>&sec=<?php echo $sec;?>">Modificar</a></p></div>
        </article>
        <br>
<?php
	}
}
?>


    </section>
	
	<!-- InstanceEndEditable -->
    </div>
 
</div> 
 
 
 
 
  
<!--*************************************** PIE ***********************************************-->    
<footer id="footer">
 
</footer>
<!--*************************************** PIE ***********************************************--> 



</body>
<!-- InstanceEnd --></html>
<?php mysqli_close($con_admin);?>