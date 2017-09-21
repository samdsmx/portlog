<?php

	// FICHERO DE CONFIGURACION
	
	/*
	 * aqui se configuran las rutas del directorio de imagenes
	 * BASE_RUTA es una ruta física y 
	 * BASE_RUTA_HTTP es una ruta web que es la que es guardara en el
	 * editor y por tanto en la base de datos
	 * Ejemplo:
	 * define(BASE_RUTA, '/home/www/miweb.com/uploads/');
	 * define(BASE_RUTA_HTTP, 'http://www.miweb.com/uploads/');
	*/
	
	define(BASE_RUTA, '/home/labiblio/public_html/img/uploads/');
	define(BASE_RUTA_HTTP, 'http://labibliotecaestelar.com/img/uploads/');
	
	//si no tienes clara la ruta fisica, descomenta esto y
	//usa el plugin, veras el inicio de la ruta que necesitas
	//echo $_SERVER['DOCUMENT_ROOT'];
    
?>
