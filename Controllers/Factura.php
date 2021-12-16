<?php 
	require 'Libraries/dompdf/vendor/autoload.php';
	//use Spipu\Html2Pdf\Html2Pdf;
	use Dompdf\Dompdf ;
	
	class Factura extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			session_regenerate_id(true);
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
				die();
			}
			getPermisos(MPEDIDOS);
		}

		public function generarFactura($idpedido)
		{
			if($_SESSION['permisosMod']['r']){
				if(is_numeric($idpedido)){
					$idpersona = "";
					if($_SESSION['permisosMod']['r'] and $_SESSION['userData']['idrol'] == RCLIENTES){
						$idpersona = $_SESSION['userData']['idpersona'];
					}
					$data = $this->model->selectPedido($idpedido,$idpersona);
					if(empty($data)){
						echo "Datos no encontrados";
					}else{
						$idpedido = $data['orden']['idpedido'];
						ob_end_clean();
						$html = getFile("Template/Modals/comprobantePDF",$data);
						$domepdf = new Dompdf();
						$domepdf->loadHTML($html);
						$domepdf->setPaper('letter','portrait','es','true','UTF-8');
						$domepdf->render();
						$domepdf->stream('factura-'.$idpedido.'.pdf');
					}
				}else{
					echo "Dato no válido";
				}
			}else{
				header('Location: '.base_url().'/login');
				die();
			}
		}

	}
 ?>
