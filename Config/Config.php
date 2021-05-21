<?php 
	
	//define("BASE_URL", "http://localhost/tienda_virtual/");
	//const BASE_URL = "https://abelosh.com/store";
	const BASE_URL = "http://localhost/tienda_virtual";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_tiendavirtual";
	const DB_USER = "root";
	const DB_PASSWORD = "houston77.";
	const DB_CHARSET = "utf8";

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "AYcF2p8R-9gV_iUQ1AGdOz_6vOAc_jwwUSfCC4FQr6bWLT_7_d4mbDFrv1ulNnelVZcicrJwgwVwJIRF";
	const SECRET = "EIhyWpvOuPhIBhTKG54dyTJ2HtFc-EbegpQgsyqQkHKqRzZTu0zzdHr9_M7A7u25hNG0o_NySx8wBuCt";
	//LIVE PAYPAL
	//const IDCLIENTE = "AWBtVubwv1loCQFkpbwVdxw3GN9v4wj8ieLQPCpm8i8v0iwHSO_wc1_fWPNqldrcrPh1RqQ1bIcZPKWD";
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const SECRET = "ELCYtuxTFft8kEuAhcg8jE7_Bi31BnMd8E4DilpsnnsgXnZRUA8AKiXHwOVSPVu7xFIDZYw_6AjXulyC";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@abelosh.com";
	const NOMBRE_EMPESA = "Tienda Virtual";
	const WEB_EMPRESA = "www.abelosh.com";

	//Datos Empresa
	const DIRECCION = "Avenida las Américas Zona 13, Guatemala";
	const TELEMPRESA = "+(502)78787845";
	const EMAIL_EMPRESA = "info@abelosh.com";
	const EMAIL_PEDIDOS = "info@abelosh.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";

	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 50;

	//Módulos
	const MCLIENTES = 3;
	const MPEDIDOS = 5;

	//Roles
	const RADMINISTRADOR = 1;
	const RCLIENTES = 7;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');
	

 ?>