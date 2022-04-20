<?php
    class Raumentada extends Controllers{
        public function __construct()
		{
			parent::__construct();
		}
        
        public function raumentada()
		{
			$data['page_tag'] = NOMBRE_EMPESA;
			$data['page_title'] = NOMBRE_EMPESA;
			$data['page_name'] = "tienda";
			//$data['productos'] = $this->getProductosT();
			$this->views->getView($this,"raumentada",$data);
		}
    }
?>