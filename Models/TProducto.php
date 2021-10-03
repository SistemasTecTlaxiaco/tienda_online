<?php
require_once("Libraries/Core/Mysql.php");
trait TProducto{
	private $con;
	private $strCategoria;
	private $intIdcategoria;
	private $strProducto;
	private $cant;
	private $option;
    public function getProductosT(){
		$this->con = new Mysql();
		$sql = "SELECT p.idproducto,
						p.codigo,
						p.nombre,
						p.descripcion,
						p.categoriaid,
						c.nombre as categoria,
						p.precio,
						p.ruta,
						p.stock
				FROM producto p 
				INNER JOIN categoria c
				ON p.categoriaid = c.idcategoria
				WHERE p.status != 0 ORDER BY p.idproducto DESC ";
				$request = $this->con->select_all($sql);
				if(count($request) > 0){
					for ($c=0; $c < count($request) ; $c++) { 
						$intIdProducto = $request[$c]['idproducto'];
						$sqlImg = "SELECT img
								FROM imagen
								WHERE productoid = $intIdProducto";
						$arrImg = $this->con->select_all($sqlImg);
						if(count($arrImg) > 0){
							for ($i=0; $i < count($arrImg); $i++) { 
								$arrImg[$i]['url_image'] = media().'/images/uploads/'.$arrImg[$i]['img'];
							}
						}
						$request[$c]['images'] = $arrImg;
					}
				}
		return $request;
	}

	public function getProductosCategoriaT(string $categoria){
		$this->strCategoria = $categoria;
		$this->con = new Mysql();
		$sql_cat = "SELECT idcategoria FROM categoria WHERE nombre = '{$this->strCategoria}'";
		$request = $this->con->select($sql_cat);

		if(!empty($request)){
			$this->intIdcategoria = $request['idcategoria'];
			$sql = "SELECT p.idproducto,
							p.codigo,
							p.nombre,
							p.descripcion,
							p.categoriaid,
							c.nombre as categoria,
							p.precio,
							p.stock
					FROM producto p 
					INNER JOIN categoria c
					ON p.categoriaid = c.idcategoria
					WHERE p.status != 0 AND p.categoriaid = $this->intIdcategoria ";
					$request = $this->con->select_all($sql);
					if(count($request) > 0){
						for ($c=0; $c < count($request) ; $c++) { 
							$intIdProducto = $request[$c]['idproducto'];
							$sqlImg = "SELECT img
									FROM imagen
									WHERE productoid = $intIdProducto";
							$arrImg = $this->con->select_all($sqlImg);
							if(count($arrImg) > 0){
								for ($i=0; $i < count($arrImg); $i++) { 
									$arrImg[$i]['url_image'] = media().'/images/uploads/'.$arrImg[$i]['img'];
								}
							}
							$request[$c]['images'] = $arrImg;
						}
					}

		}
		return $request;
	}

	public function getProductoT(string $producto){
		$this->con = new Mysql();
		$this->strProducto = $producto;
		$sql = "SELECT p.idproducto,
						p.codigo,
						p.nombre,
						p.descripcion,
						p.categoriaid,
						c.nombre as categoria,
						p.precio,
						p.stock
				FROM producto p 
				INNER JOIN categoria c
				ON p.categoriaid = c.idcategoria
				WHERE p.status != 0 AND p.nombre = '{$this->strProducto}' ";
				$request = $this->con->select($sql);
				if(!empty($request)){
					$intIdProducto = $request['idproducto'];
					$sqlImg = "SELECT img
							FROM imagen
							WHERE productoid = $intIdProducto";
					$arrImg = $this->con->select_all($sqlImg);
					if(count($arrImg) > 0){
						for ($i=0; $i < count($arrImg); $i++) { 
							$arrImg[$i]['url_image'] = media().'/images/uploads/'.$arrImg[$i]['img'];
						}
					}
					$request['images'] = $arrImg;
				}
		return $request;
	}

	public function getProductosRandom(int $idcategoria, int $cant, string $option){
		$this->intIdcategoria = $idcategoria;
		$this->cant = $cant;
		$this->option = $option;

		if($option == "r"){
			$this->option = " RAND() ";
		}else if($option == "a"){
			$this->option = " idproducto ASC ";
		}else{
			$this->option = " idproducto DESC ";
		}

		$this->con = new Mysql();
		$sql = "SELECT p.idproducto,
						p.codigo,
						p.nombre,
						p.descripcion,
						p.categoriaid,
						c.nombre as categoria,
						p.precio,
						p.stock
				FROM producto p 
				INNER JOIN categoria c
				ON p.categoriaid = c.idcategoria
				WHERE p.status != 0 AND p.categoriaid = $this->intIdcategoria
				ORDER BY $this->option LIMIT  $this->cant ";
				$request = $this->con->select_all($sql);
				if(count($request) > 0){
					for ($c=0; $c < count($request) ; $c++) { 
						$intIdProducto = $request[$c]['idproducto'];
						$sqlImg = "SELECT img
								FROM imagen
								WHERE productoid = $intIdProducto";
						$arrImg = $this->con->select_all($sqlImg);
						if(count($arrImg) > 0){
							for ($i=0; $i < count($arrImg); $i++) { 
								$arrImg[$i]['url_image'] = media().'/images/uploads/'.$arrImg[$i]['img'];
							}
						}
						$request[$c]['images'] = $arrImg;
					}
				}
		return $request;
	}	
}
?>
