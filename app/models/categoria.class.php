<?php
class Categoria extends Validator{
    //Declaracion de proipedades 
    private $id = null;
    private $nombre = null;
    private $descripcion = null;
    
    //mmetodos para poder llenar las propiedades
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
			if($this->validateAlphanumeric($value, 1, 100)){
				$this->nombre = $value;
				return true;
			}else{
				return false;
						}
    }
    public function getNombre(){
		return $this->nombre;
    }
    
	public function setDescripcion($value){
		if($value){
			if($this->validateAlphanumeric($value, 1, 200)){
				$this->descripcion = $value;
				return true;
			}else{
				return false;
			}
		}else{
			$this->descripcion = null;
			return true;
		}		
	}
	public function getDescripcion(){
		return $this->descripcion;
    }
    //metodos para el CRUD
    public function getCategorias(){
		$sql = "SELECT id_categoria, nombre_categoria, descripcion_categoria FROM categoria ORDER BY nombre_categoria";
		$params = array(null);
		return Database::getRows($sql, $params);
    }
    public function searchCategoria($value){
		$sql = "SELECT * FROM categoria WHERE nombre_categoria LIKE ? OR descripcion_categoria LIKE ? ORDER BY nombre_categoria";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    public function createCategoria(){
		$sql = "INSERT INTO categoria(nombre_categoria, descripcion_categoria) VALUES(?, ?)";
		$params = array($this->nombre, $this->descripcion);
		return Database::executeRow($sql, $params);
    }
    public function readCategoria(){
		$sql = "SELECT nombre_categoria, descripcion_categoria FROM categoria WHERE id_categoria = ?";
		$params = array($this->id);
		$categoria = Database::getRow($sql, $params);
		if($categoria){
			$this->nombre = $categoria['nombre_categoria'];
			$this->descripcion = $categoria['descripcion_categoria'];
			return true;
		}else{
			return null;
		}
    }
    public function updateCategoria(){
		$sql = "UPDATE categoria SET nombre_categoria = ?, descripcion_categoria = ? WHERE id_categoria = ?";
		$params = array($this->nombre, $this->descripcion, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteCategoria(){
		$sql = "DELETE FROM categoria WHERE id_categoria = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>