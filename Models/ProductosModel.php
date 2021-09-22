<?php 

	class ProductosModel extends Mysql
	{
        private $intIdProducto;
		private $strNombre;
		private $strDescripcion;
		private $intCodigo;
		private $intCategoriaId;
		private $intPrecio;
		private $intStock;
		private $intStatus;

		public function __construct()
		{
			parent::__construct();
		}	

        public function selectProductos(){
			$sql = "SELECT p.idproducto,
							p.codigo,
							p.nombre,
							p.descripcion,
							p.categoriaid,
							c.nombre as categoria,
							p.precio,
							p.stock,
							p.status 
					FROM producto p 
					INNER JOIN categoria c
					ON p.categoriaid = c.idcategoria
					WHERE p.status != 0 ";
					$request = $this->select_all($sql);
			return $request;
		}	
	}
 ?>