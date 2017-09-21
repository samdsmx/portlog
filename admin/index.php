<?php require_once('../Connections/con_admin.php'); 
require_once('pass.php');
if (isset($_POST['entrar']))
{
	extract($_REQUEST);
	session_start();
	
	if (($usuario=="") || ($password==""))
	{
		echo "<script languaje='javascript'>alert('Faltan Datos')</script>";
		echo"<script language='javascript'>window.location='index.php'</script>";
	}
	else
	{
		$contra = hash_hmac('sha256', $password , $cve);
		//echo $contra;
		mysqli_select_db($con_admin, $database_con_admin);
		$qry = "SELECT id_usuario FROM usuario WHERE usuario='$usuario' and pass='$contra'";
		$r = mysqli_query($con_admin, $qry) or die(header('location:home.php'));
		if ( $r !== false && mysqli_num_rows($r) > 0 ) 
		{
			$a = mysqli_fetch_assoc($r);
			$id = stripslashes($a['id_usuario']);
			$_SESSION["id"] = $id;
			echo"<script language='javascript'>window.location='home.php'</script>";	
		}
		else
		{
			echo "<script languaje='javascript'>alert('Datos Incorrectos')</script>";
			echo"<script language='javascript'>window.location='index.php'</script>";
		}
	}
}

?>
<!-- InstanceBegin template="/Templates/indexadmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
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
<!--------------------------------CODIGO DE COMPATIBILIDAD-------------------------------->

<!--------------------------------TAGS Y METATAGS-------------------------------->
<!--<meta name="title" content="Central Salud" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="site" content="" />-->
<!--------------------------------TAGS Y METATAGS-------------------------------->
<!--------------------------------FUENTES GOOGLE-------------------------------->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,600,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
<!--------------------------------FUENTES GOOGLE-------------------------------->
<link href="css/main.css" rel="stylesheet" type="text/css" />
<!--------------------------------FAVICON-------------------------------->
<link type="image/x-icon" href="" rel="icon" /> 
<!--------------------------------FAVICON-------------------------------->

<!--------------------------------ESTILOS-------------------------------->
<link href="css/normalize.css" rel="stylesheet" type="text/css" />
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<link href="css/estilos_responsive.css" rel="stylesheet" type="text/css" />
<!--------------------------------ESTILOS-------------------------------->
<script src="menu/js/jquery-latest.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="menu/css/icomoon.css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'/>
<!--[if lt IE 9]>
	<script  type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script type="text/javascript" src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<!--[if IE 7]>
<link rel="stylesheet" href="css/font-awesome-ie7.min.css" />
<![endif]-->


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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.js"></script>
<script src="../placeholder/jquery.html5-placeholder-shim.js"></script>

<script>
$(function(){
	$.placeholder.shim();
});
</script>
<style>
#cont_index{
	background-image: url(imagenes/registro-2.jpg);
	background-repeat: repeat-x;
	background-position:bottom;
	border:1px solid #ddd;
	margin:0 auto 130px auto;
	width:425px;
	height: 250px;
}
#cont_head{
	background-image: url(imagenes/registro-1.jpg);
	background-repeat: repeat-y;
	background-position:left;
	text-align:center;
	padding:7px 0;
	margin:0 auto;
	width:425px;
}
#cont_head p{
	color:#fff;
	font-family: 'Open Sans', sans-serif;
	font-size:15px;
	margin:0;
	padding:0;
}
#usuario{
	background-image:url(imagenes/0usuario.png);
	background-position:left center;
	background-repeat:no-repeat;
	border:1px solid #ddd;
	display:inline-block;
	margin-top:30px;
	margin-bottom:30px;
	margin-left:25px;
	vertical-align:middle;
	height:28px;
	width:82%;
	padding-left:25px;
}
#password{
	background-image: url(imagenes/candado.png);
	background-position:left center;
	background-repeat:no-repeat;
	border:1px solid #ddd;
	display:inline-block;
	margin-bottom:30px;
	margin-left:25px;
	vertical-align:middle;
	height:28px;
	width:82%;
	padding-left:25px;
}	
#entrar{
 padding: 10px 20px; /* Tamaño del Boton */
 background: #c00; /* Aqui se cambia el color del fondo */
 color: #FFF;
 border:none;
 float:right;
 text-decoration: none;
 display: inline-block;
 text-align: center;
 cursor: pointer;
 line-height: 1;
	margin-right:25px;
 font-family: 'Open Sans', sans-serif;

}
</style>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="Scripts" -->
<!-- InstanceEndEditable -->


</head>

<body>
<!--*************************************** HEAD ***********************************************-->   

<header id="encabezado">
	
    
    <article id="datos-encabezado">
    	<div id="centro2">
    		<figure id="logo"><a href="index.php"><img src="imagenes/plantilla/admin-central-logotipo.png" width="100%" border="0"></a></figure>
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


    
    <center><div id="contenido"> 
	<!-- InstanceBeginEditable name="Contenido" -->
            <br /><br /><br /><br /><br /><br />
<div id="cont_index">
    <div id="cont_head">
    	<p><strong>Bienvenido | Ingresa tus Claves</strong></p>
    </div>
	<form id="form4" name="form4" method="POST" action="index.php">
	<input name="usuario" type="text" id="usuario" placeholder="Introduzca su nombre de usuario"/>
	<input name="password" type="password" id="password" placeholder="Introduzca su contraseña"/>
	<input name="entrar" type="submit"  id="entrar" value="Acceder" />
	</form>
</div>
<!-- InstanceEndEditable -->
    </div></center>
 
</div> 
 
 
 
 
  
<!--*************************************** PIE ***********************************************-->    
<footer id="footer">
 
</footer>
<!--*************************************** PIE ***********************************************--> 



</body>
<!-- InstanceEnd --></html>
<?php mysqli_close($con_admin);?>

