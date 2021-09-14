<?php 

	class Clientes extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			//session_regenerate_id(true);
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			getPermisos(3);
			
		}

		public function Clientes()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_tag'] = "Clientes";
			$data['page_title'] = "CLIENTES <small>Tienda Virtual</small>";
			$data['page_name'] = "clientes";
			$data['page_functions_js'] = "functions_clientes.js";
			$this->views->getView($this,"clientes",$data);
		}
    }
?>