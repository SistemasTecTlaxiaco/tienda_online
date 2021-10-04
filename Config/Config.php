<?php 
	//define('BASE_URL', 'http://localhost/tienda_virtual/');
	define ('BASE_URL', 'https://tiendapcbox.herokuapp.com/');
	
	//Zona horaria
	date_default_timezone_set('America/Mexico_City');

	//Datos de conexión a Base de Datos
	define ('DB_HOST', 'dfkpczjgmpvkugnb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
	define ('DB_NAME', 'xs74953pb0hvmidl');
	define ('DB_USER', 'y0k79cxzb1n7lj9r');
	define ('DB_PASSWORD', 'gk6clc7wdkfdevfw');
	define ('DB_CHARSET', 'utf8');
	//define("BASE_URL", "http://localhost/tienda_virtual/");

	//Deliminadores decimal y millar Ej. 24,1989.00
	define ('SPD',".");
	define ('SPM',",");

	//Simbolo de moneda
	define ('SMONEY',"$");

	//Datos envio de correo
	define NOMBRE_REMITENTE = "Tienda virtual PC-BOX";
	define EMAIL_REMITENTE = "no-reply@empresa.com";
	define NOMBRE_EMPESA = "PC BOX";
	define WEB_EMPRESA = "https://tiendapcbox.herokuapp.com/";
	


 ?>
