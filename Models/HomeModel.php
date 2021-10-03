<?php 
	require_once("CategoriasModel.php");
	class HomeModel extends Mysql
	{
		private $ObjCategoria;
		public function __construct()
		{
			parent::__construct();
			//$this->ObjCategoria = new CategoriasModel();
		}
		
		public function getCategoriasT(){
			//return $this->ObjCategoria->SelectCategorias();

		}
	}
 ?>