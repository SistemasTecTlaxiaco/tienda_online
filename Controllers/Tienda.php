<?php 
	require_once("Models/TCategoria.php");
	require_once("Models/TProducto.php");

	class Tienda extends Controllers{
		use TCategoria, TProducto;
		public function __construct()
		{
			parent::__construct();
		}

		public function tienda()
		{
			$data['page_tag'] = NOMBRE_EMPESA;
			$data['page_title'] = NOMBRE_EMPESA;
			$data['page_name'] = "tienda";
			$data['productos'] = $this->getProductosT();
			$this->views->getView($this,"tienda",$data);
		}

		public function categoria($params){
			if(empty($params)){
				header("Location:".base_url());
			}else{
				$arrParams = explode(",",$params);
				$idcategoria = intval($arrParams[0]);
				$ruta = strClean($arrParams[1]);
				$infoCategoria = $this->getProductosCategoriaT($idcategoria,$ruta);
				$categoria = strClean($params);
				$data['page_tag'] = NOMBRE_EMPESA." - ".$infoCategoria['categoria'];
				$data['page_title'] = $infoCategoria['categoria'];
				$data['page_name'] = "categoria";
				$data['productos'] = $infoCategoria['productos'];
				$this->views->getView($this,"categoria",$data);
			}
		}

		public function producto($params){
			if(empty($params)){
				header("Location:".base_url());
			}else{
				$arrParams = explode(',',$params);
				$idproducto = intval($arrParams[0]);
				$ruta = strClean($arrParams[1]);
				$infoProducto = $this->getProductoT($idproducto,$ruta);
				if(empty($infoProducto)){
					header("Location:".base_url());
				}
				$data['page_tag'] = NOMBRE_EMPESA." - ".$infoProducto['nombre'];
				$data['page_title'] = $infoProducto['nombre'];
				$data['page_name'] = "producto";
				$data['producto'] = $infoProducto;
				$data['productos'] = $this->getProductosRandom($infoProducto['categoriaid'],8,"r");
				$this->views->getView($this,"producto",$data);
			}
		}

	}
 ?>