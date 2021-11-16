<?php 
	
	//define('BASE_URL', 'http://localhost/tienda_virtual/');
	define ('BASE_URL', 'https://tiendapcbox.herokuapp.com');
	
	//Zona horaria
	date_default_timezone_set('America/Mexico_City');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_tiendavirtual";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Deliminadores decimal y millar Ej. 24,1989.00
	define ('SPD',".");
	define ('SPM',",");

	//Simbolo de moneda
	define ('SMONEY',"$");
	define ('CURRENCY',"MXN");

	//Api PayPal
	//SANDBOX PAYPAL
	define ('URLPAYPAL',"https://api-m.sandbox.paypal.com");
	define ('IDCLIENTE',"ATS72wM3WjOfZvUi8-oL-OBMVSXCPznR1DpcFbd7Fey88zlyrDxH4bP4tESkFiDhXmsYopwYCI_fvYtI");
	define ('SECRET',"EMDQG74peeJDzc7bUq53-UP_bWQh8-rsOZrBf0xB2i0kunfL6wsH7giEwnlEDkimj4Nx91x58Ff5cPxb");
	//LIVE PAYPAL
	//const IDCLIENTE = "AfU4S4oxwAgOOr9RbobckdPX_PwxN5fTS3QJUVgdW2ll_O0druKAiGZXzDj22qwALAyUL89MRSv3H_N1";
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const SECRET = "EJwastBF0ibEYzPwNFCJp_cLjPc44aCx4XdXxlq9t1diQ48WtkbXUDOc7KSE95MWPElymVWlGIvqTAZk";

	//Datos envio de correo
	define ('NOMBRE_REMITENTE',"Tienda virtual PC-BOX");
	define ('EMAIL_REMITENTE',"no-reply@empresa.com");
	define ('NOMBRE_EMPESA',"PC BOX");
	define ('WEB_EMPRESA',"https://tiendapcbox.herokuapp.com/");

	//Datos Empresa
	define ('DIRECCION',"Avenida las Américas Zona 13, Oaxaca");
	define ('TELEMPRESA',"+(502)78787845");
	define ('EMAIL_EMPRESA',"pcbox_store@gmail.com");
	define ('EMAIL_PEDIDOS',"pcbox_store@gmail.com");
	
	define ('CAT_SLIDER',"1,2,3");
	define ('CAT_BANNER',"4,5,6");

	//Datos para Encriptar / Desencriptar
	define ('KEY','abelosh';
	define ('METHODENCRIPT', "AES-128-ECB");

	//Envío
	define ('COSTOENVIO', "10");
	
	


 ?>
