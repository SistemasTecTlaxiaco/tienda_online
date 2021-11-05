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
	const CURRENCY = "MXN";
	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "ATS72wM3WjOfZvUi8-oL-OBMVSXCPznR1DpcFbd7Fey88zlyrDxH4bP4tESkFiDhXmsYopwYCI_fvYtI";
	const SECRET = "EMDQG74peeJDzc7bUq53-UP_bWQh8-rsOZrBf0xB2i0kunfL6wsH7giEwnlEDkimj4Nx91x58Ff5cPxb";
	//LIVE PAYPAL
	//const IDCLIENTE = "AfU4S4oxwAgOOr9RbobckdPX_PwxN5fTS3QJUVgdW2ll_O0druKAiGZXzDj22qwALAyUL89MRSv3H_N1";
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const SECRET = "EJwastBF0ibEYzPwNFCJp_cLjPc44aCx4XdXxlq9t1diQ48WtkbXUDOc7KSE95MWPElymVWlGIvqTAZk";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda virtual PC-BOX";
	const EMAIL_REMITENTE = "no-reply@empresa.com";
	const NOMBRE_EMPESA = "PC BOX";
	const WEB_EMPRESA = "https://tiendapcbox.herokuapp.com/";

	//Datos Empresa
	const DIRECCION = "Avenida las Américas Zona 13, Oaxaca";
	const TELEMPRESA = "+(502)78787845";
	const EMAIL_EMPRESA = "pcbox_store@gmail.com";
	const EMAIL_PEDIDOS = "pcbox_store@gmail.com";
	
	const CAT_SLIDER="1,2,3";
	const CAT_BANNER="4,5,6";

	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 10;
	
	


 ?>
