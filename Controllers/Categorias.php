<?php
	class Categorias extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			session_regenerate_id(true);
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			getPermisos(6);
		}

		public function Categorias()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_tag'] = "Categorias";
			$data['page_title'] = "CATEGORIAS <small>Tienda Virtual</small>";
			$data['page_name'] = "categorias";
			$data['page_functions_js'] = "functions_categorias.js";
			$this->views->getView($this,"categorias",$data);
		}
    }   
?>