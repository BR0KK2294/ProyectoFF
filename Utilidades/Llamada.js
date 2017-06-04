// JavaScript Document
var x;
x=$(document);
x.ready(inicializarEventos());

function inicializarEventos(){
	var bPro = $("#btnProd");
	bPro.click(llamarProducto);
	var bPed = $("#btnPed");
	bPed.click(llamarPedido);
	var bCom = $("#btnCombo") ;
	bCom.click(llamarCombo);
	var bPub = $("#btnPubli") ;
	bPub.click(llamarPublicidad);
	var bVen = $("#btnVenta") ;
	bVen.click(llamarVenta);
	
}

function llamarProducto(){
	$("#Contenido").html(" <iframe src='Vista/guiProducto.php'></iframe>");
}

function llamarPedido(){
	$("#Contenido").html(" <iframe src='Vista/guiPedido.php'></iframe>");
}

function llamarCombo(){
	$("#Contenido").html(" <iframe src='Vista/guiCombo.php'></iframe>");
}

function llamarPublicidad(){
	$("#Contenido").html(" <iframe src='Vista/guiPublicidad.php'></iframe>");
}

function llamarVenta(){
	$("#Contenido").html(" <iframe src='Vista/guiVenta.php'></iframe>");
}