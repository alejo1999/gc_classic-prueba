<?php
class Producto extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $id_proveedor = null;
	private $id_categoria = null;
	private $nombre = null;
	private $descripcion = null;
	private $descuento = null;
	private $imagen = null;
	private $estado = null;
	private $precio = null;
	private $existencia = null;
	
	
	

	//Métodos para sobrecarga de propiedades
	public function setId($value){
		if($this->validateId($value)){
			$this->id = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
		return $this->id;
	}
	
	public function setNombre($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->nombre = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre(){
		return $this->nombre;
	}


	
	public function setExistencia($value){
		if($this->validateNumeric($value, 1, 11)){
			$this->existencia = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getExistencia(){
		return $this->existencia;
	}

	public function setDescripcion($value){
		if($this->validateAlphanumeric($value, 1, 200)){
			$this->descripcion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setPrecio($value){
		if($this->validateMoney($value)){
			$this->precio = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPrecio(){
		return $this->precio;
	}

	public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/productos/", 500, 500)){
			$this->imagen = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getImagen(){
		return $this->imagen;
	}
	public function unsetImagen(){
		if(unlink("../../web/img/productos/".$this->imagen)){
			$this->imagen = null;
			return true;
		}else{
			return false;
		}
	}

	public function setProveedor($value){
		if($this->validateId($value)){
			$this->id_proveedor = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getProveedor(){
		return $this->id_proveedor;
	}
	public function setCategoria($value){
		if($this->validateId($value)){
			$this->id_categoria = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCategoria(){
		return $this->id_categoria;
	}

	public function setEstado($value){
		if($value == "1" || $value == "0"){
			$this->estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstado(){
		return $this->estado;
	}

	public function setDescuento($value){
		if($this->validateMoney($value)){
			$this->descuento = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDescuento(){
		return $this->descuento;
	}

	

	//Metodos para el manejo del CRUD
	public function getCategoriaProductos(){
		$sql = "SELECT categoria.nombre_categoria, productos.id_producto,productos.imagen, productos.nombre, productos.descripcion, productos.precio FROM productos 
		INNER JOIN categoria ON productos.fk_id_categoria = categoria.id_categoria
		WHERE id_categoria = ? AND estado = 1 ORDER BY nombre";
		$params = array($this->id_categoria);
		return Database::getRows($sql, $params);
	}
	
	public function getProductos(){
		$sql = "SELECT productos.id_producto, productos.imagen, productos.nombre, categoria.nombre_categoria,proveedor.nombre_proveedor, productos.precio,productos.descuento, productos.existencia,productos.estado 
		FROM productos 
		INNER JOIN categoria ON productos.fk_id_categoria = categoria.id_categoria 
		INNER JOIN proveedor ON productos.fk_id_proveedor = proveedor.id_proveedor
		ORDER BY nombre";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	
	public function getCategoriaProductos2($empieza, $por_pagina){
		$query = "SELECT categoria.nombre_categoria, productos.id_producto,productos.imagen, productos.nombre, productos.descripcion, productos.precio FROM productos 
		INNER JOIN categoria ON productos.fk_id_categoria = categoria.id_categoria
		WHERE id_categoria = ? AND estado = 1 
		ORDER BY nombre
		LIMIT $empieza, $por_pagina";
		$params = array($this->id_categoria);
		return Database::getRows($query, $params);
	}
	public function searchProducto($value){
		$sql = "SELECT productos.id_producto, productos.imagen, productos.nombre, categoria.nombre_categoria,proveedor.nombre_proveedor, productos.precio,productos.descuento, productos.existencia,productos.estado 
		FROM productos 
		INNER JOIN categoria ON productos.fk_id_categoria = categoria.id_categoria 
		INNER JOIN proveedor ON productos.fk_id_proveedor = proveedor.id_proveedor
		WHERE nombre LIKE ? OR nombre_categoria LIKE ? OR nombre_proveedor LIKE ? ORDER BY nombre";
		$params = array("%$value%", "%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function getCategorias(){
		$sql = "SELECT id_categoria, nombre_categoria FROM categoria";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getProveedores(){
		$sql = "SELECT id_proveedor, nombre_proveedor FROM proveedor";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function createProducto(){
		$sql = "INSERT INTO productos( fk_id_proveedor,fk_id_categoria, nombre, descripcion, precio, existencia, descuento, imagen, estado) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->id_proveedor, $this->id_categoria, $this->nombre, $this->descripcion, $this->precio, $this->existencia, $this->descuento, $this->imagen, $this->estado);
		return Database::executeRow($sql, $params);
	}
	public function readProducto(){
		$sql = "SELECT nombre, descripcion, precio, imagen, fk_id_categoria,fk_id_proveedor, estado,existencia,descuento FROM productos WHERE id_producto = ?";
		$params = array($this->id);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['nombre'];
			$this->descripcion = $producto['descripcion'];
			$this->precio = $producto['precio'];
			$this->imagen = $producto['imagen'];
			$this->id_categoria = $producto['fk_id_categoria'];
			$this->estado = $producto['estado'];
			$this->id_proveedor = $producto['fk_id_proveedor'];
			$this->existencia = $producto['existencia'];
			$this->descuento = $producto['descuento'];
			return true;
		}else{
			return null;
		}
	}
	public function updateProducto(){
		$sql = "UPDATE productos SET fk_id_proveedor = ? , fk_id_categoria = ? , nombre = ?, descripcion = ?, precio = ?,existencia = ? ,descuento = ?, imagen = ?, estado = ? WHERE id_producto = ?";
		$params = array($this->id_proveedor,$this->id_categoria,$this->nombre, $this->descripcion, $this->precio, $this->existencia,$this->descuento,$this->imagen, $this->estado, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteProducto(){
		$sql = "DELETE FROM productos WHERE id_producto = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>