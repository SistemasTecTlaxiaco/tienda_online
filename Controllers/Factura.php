<?php 
	

	class Factura extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
		}

		public function generarFactura($idpedido)
		{
			if(is_numeric($idpedido)){
                $idpersona= "";
               $data = $this ->model->selectPedido($idpedido,$idpersona);
               dep($data);
			}else{
				echo "Dato no válido";
			}
		}

	}
 ?>
