<?php require_once('fuctions/functions.php'); ?>
<!DOCTYPE HTML>
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
<title>PORTLOG INTERNATIONAL | Contacto</title>

<script>
function validacion_registro()
{
	<!-- se agregan todos los campos del formulario -->
 	nombre = document.getElementById("nombre").value;
	telefono = document.getElementById("telefono").value;
	email = document.getElementById("email").value;
	comentarios = document.getElementById("mensaje").value;
	captcha = document.getElementById("recaptcha_response_field").value;
		
	if(nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) )
	{
		alert("Debe Ingresar su Nombre");
		return false;
	}
	if(telefono == null || telefono.length == 0)
	{
		alert("Debe Ingresar su Teléfono");
		return false;
	}
	if( isNaN(telefono) ) {
		alert("Debe Ingresar un Teléfono válido");
	  return false;
	}
	if(email == null || email.length == 0 || !(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email)))
	{
		alert("Debe Ingresar un Correo Electronico válido");
		return false;
	}	
	if(mensaje == null || comentarios.length == 0 || /^\s+$/.test(mensaje) )
	{
		alert("Debe Ingresar sus Comentarios");
		return false;
	}
	if(captcha == null || captcha.length == 0)
	{
		alert("Debe Ingresar datos del Captcha correctamente");
		return false;
	}
	return true;
}

</script>

<script src='https://www.google.com/recaptcha/api.js'></script>
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
<div id="contacto" class="wrapper">
<h1 class="titulos">Contact</h1>
<h5>Worth with the experts.</h5>

	<div class="cont_izq">
    	<figure class="img_contacto"><img src="../imagenes/contacto/contacto.jpg" title="Contacto" alt="Contacto Imagen" ></figure>
        
        <div class="imgagenes_contacto">
        	<figure> <a href="http://www.wwpc.eu.com/" target="_blank"><img src="../imagenes/contacto/wwpc.jpg" title="alianza" alt="alianza"></a></figure>
            <figure class="border_cont"><a href="#"><img src="../imagenes/contacto/amanac.jpg" title="alianza" alt="alianza"></a></figure>
            <figure><a href="#"><img src="../imagenes/contacto/iata.jpg" title="alianza" alt="alianza"></a></figure>
        </div>
    </div>
    
    <div class="cont_der">
    	<h2>(*) Required fields</h2>
        
        <form  name="form1" method="post" onsubmit="return validacion_registro();" >
        	<div class="btn_cont"><input name="nombre" placeholder="*Nombre:" type="text" class="fomrulario3" id="nombre"></div>
            
        	<div class="btn_cont2"><input name="apellidos" placeholder="*Apellidos:" type="text" class="fomrulario3" id="apellidos"></div>
            
            <div class="btn_cont"><input name="telefono" placeholder="*Teléfono:" type="text" class="fomrulario3" id="telefono"></div>
            
        	<div class="btn_cont2"><input name="email" placeholder="*Email:" type="text" class="fomrulario3" id="email"></div>
            
            <div class="btn_cont3"><textarea name="mensaje" id="mensaje" placeholder="Mensaje:" class="fomrulario4" cols="" rows=""></textarea></div>
            
            <div class="btn_cont4">
<?php
//se incluye el archivo del captcha
require_once('captcha/recaptchalib.php');

$publickey =  "6LdVLncUAAAAAL5QtjtgkQMiNkYk87aV_cM16fxM"; 
$privatekey =  "6LdVLncUAAAAAHOojbmg84-i-QRZqWPJG50k_TxA"; 
$resp = null;
$error = null;

if (isset($_POST["recaptcha_response_field"])) { 
	$resp = recaptcha_check_answer ($privatekey, 
            $_SERVER["REMOTE_ADDR"],
            $_POST["recaptcha_challenge_field"],
            $_POST["recaptcha_response_field"]); 
	if ($resp->is_valid) {
	
	extract($_REQUEST); 

//los campos deberan estar de la siguiente forma
$nombre = test_input($_POST['nombre']);
$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

//en el caso de telefono solo con una opcion
$telefono = test_input($_POST['telefono']); 

//en email cambia el valor FILTER_SANITIZE

$email = test_input($_POST['email']);
$email = filter_var($email, FILTER_SANITIZE_STRING);

$mensaje = test_input($_POST['mensaje']);
$mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);

//todos los demas campos de texto deberan contar con FILTER_SANITIZE_STRING

$para      = "mbuetler@portloginter.com";
$titulo    = 'Portlog';
$cabeceras = 'From: Portlog' . "\r\n" .
             'Cc: "'.$email.'"' . "\r\n" .
    		 'X-Mailer: PHP/' . phpversion();

$message = " 
Datos de Contacto / Nuevo Prospecto

Nombre: ".$nombre."\n

Télefono: ".$telefono."\n

E-mail: ".$email."\n

Comentarios: ".$mensaje."\n";  

//incluir estos para validar sea un correo correcto
if (validarmail($email)){
	$dominio = explode('@',$email);
	if(checkdnsrr($dominio[1])){
		if (mail(utf8_decode($para),utf8_decode($titulo),utf8_decode($message),utf8_decode($cabeceras)))
			echo"<script language='javascript'>window.location='gracias.php'</script>";
	}
	else {
		echo '<script>alert("Debe Ingresar un Correo valido");</script>';
		echo"<script language='javascript'>window.location='contacto.php'</script>";
	}
}
else {
	echo '<script>alert("Debe Ingresar un Correo valido");</script>';
	echo"<script language='javascript'>window.location='contacto.php'</script>";
}
	}else { //validacion captcha
		$error = $resp->error;
		echo '<script>alert("Validación captcha incorrecta");</script>';
	}
	
}
echo recaptcha_get_html($publickey, $error);
?> 
            </div>
            
            <div class="btn_enviar"><input name="enviar" type="submit" class="btn_enviar2" id="enviar" value="Enviar" /></div>
        </form>
    </div>
</div>

<div id="contato2">
<div class="wrapper">
	
    <div class="dato">
    	<h5><br>
    	  Address:</h5>
        <p>HQ in  México City Ixcateopan No. 245 Int. 2 Col. Santa Cruz Atoyac C.P. 03100 México, D.F.</p>
    </div>
    
    <div class="dato2">
    	<h5>Phone:</h5>
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
    	<h3>We have offices in:</h3>
        <div class="texto_general">
        <ul>
        	<li>Ciudad de México</li>
            <li>Querétaro</li>
            <li>Veracruz</li>
            <li>Manzanillo</li>
            <li>Lázaro Cárdenas</li>
            <li>Nuevo Laredo</li>
            <li>Altamira/Tampico</li>
            <li>Coatzacoalcos/Dos Bocas</li> 
            <li>Ensenada</li>
            <li>Salina Cruz</li>
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
