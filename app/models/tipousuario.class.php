<?php
class Tipousuario extends Validator{
    //Declaracion de proipedades 
    private $id = null;
    private $nombre = null;
    
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

    //metodos para el CRUD
    public function getTipousuarios(){
		$sql = "SELECT id_tipo, nombre_tipo FROM tipo_usuario ORDER BY nombre_tipo";
		$params = array(null);
		return Database::getRows($sql, $params);
    }
    public function searchTipousuario($value){
		$sql = "SELECT * FROM tipo_usuario WHERE nombre_tipo LIKE ?  ORDER BY nombre_tipo";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    public function createTipousuario(){
		$sql = "INSERT INTO tipo_usuario(nombre_tipo) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    public function readTipousuario(){
		$sql = "SELECT nombre_tipo FROM tipo_usuario WHERE id_tipo = ?";
		$params = array($this->id);
		$tipousuario = Database::getRow($sql, $params);
		if($tipousuario){
			$this->nombre = $tipousuario['nombre_tipo'];
			return true;
		}else{
			return null;
		}
    }
    public function updateTipousuario(){
		$sql = "UPDATE tipo_usuario SET nombre_tipo = ? WHERE id_tipo = ?";
		$params = array($this->nombre,  $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteTipousuario(){
		$sql = "DELETE FROM tipo_usuario WHERE id_tipo = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>
