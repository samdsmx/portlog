<?php
function validarmail($mail)
{
	$patron_mail = '(([A-Za-z0-9]+[a-zA-Z0-9_.-]*[A-Za-z0-9]+)@([A-Za-z0-9]+[a-zA-Z0-9.-]*[A-Za-z0-9]+).([a-zA-Z]{2,6}))';
	return preg_match($patron_mail, $mail, $coincidencias);
	print_r($coincidencias);
}

function validartelefono($telefono)
{
	$patron_tel = '^\d{8,12}$^';
	return preg_match($patron_tel, $telefono, $coincidencias);
}

function validarnombre($nombre)
{
	$patron_nombre = '/^[A-Za-záéíóúñ]{2,}([\s][A-Za-záéíóúñ]{2,})+$/';
	return preg_match($patron_nombre, $nombre, $coincidencias);
}

function test_input($data)
{
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>