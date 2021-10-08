<?php 
	
	//define("BASE_URL", "http://localhost/tienda_virtual/");
	const BASE_URL = "http://localhost/tienda_online";
	
	//Zona horaria
	date_default_timezone_set('America/Mexico_City');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost:3307";
	const DB_NAME = "db_tiendavirtual";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda virtual PC-BOX";
	const EMAIL_REMITENTE = "no-reply@empresa.com";
	const NOMBRE_EMPESA = "PC BOX";
	const WEB_EMPRESA = "https://tiendapcbox.herokuapp.com/";
	
	const CAT_SLIDER="1,2,3";
	const CAT_BANNER="4,5,6";

	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 50;
	
	


 ?>