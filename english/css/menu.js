$(document).ready(main);
 
var contador = 1;
 
function main () {
$('.menu_bar').click(function(){
if (contador == 1) {
$('nav').animate({
right: '0'
});
contador = 0;
} else {
contador = 1;
$('nav').animate({
right: '-100%'
});
}
});
 
// Mostramos y ocultamos submenus
$('.submenu').click(function(){
$(this).children('.children').slideToggle();
});
}

$(document).ready(main2);
 
var contador = 1;
 
function main2 () {
$('.menu_bar2').click(function(){
if (contador == 1) {
		$('.menu_res').css("display", "block");
contador = 0;
} else {
	contador = 1;
	$('.menu_res').css("display", "none");
}
});
 
}
