<?php
class Proveedor extends Validator{
    //Declaracion de  propiedades
    private $id = null;
    private $nombre = null;
    private $correo = null;
    private $telefono = null;

    //metodos para llenar las propiedades 
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

    public function setCorreo($value){
		if($this->validateEmail($value)){
			$this->correo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCorreo(){
		return $this->correo;
    }
    public function setTelefono($value){
		if($this->validateNumeric($value, 1, 8)){
			$this->telefono = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTelefono(){
		return $this->telefono;
    }

    //manejar los SCRUD 
    public function getProveedores(){
        $sql = "SELECT id_proveedor,nombre_proveedor,correo,telefono FROM proveedor ORDER BY nombre_proveedor";
        $params = array(null);
        return Database::getRows($sql,$params);
    }

    public function getSuscripciones(){
        $sql = "SELECT id_suscripcion, suscripcion, descripcion, precio ,duracion  FROM suscripcion ORDER BY id_suscripcion";
		$params = array(null);
		return Database::getRows($sql, $params);
    }
    public function searchProveedores($value){
		$sql = "SELECT * FROM proveedor WHERE nombre_proveedor LIKE ?  ORDER BY nombre_proveedor";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
    }
    public function createProveedor(){
		$sql = "INSERT INTO proveedor(nombre_proveedor, correo ,telefono) VALUES(?, ?, ?)";
		$params = array($this->nombre, $this->correo, $this->telefono);
		return Database::executeRow($sql, $params);
    }
    public function readProveedor(){
        $sql = "SELECT nombre_proveedor, correo, telefono FROM proveedor WHERE id_proveedor = ?";
        $params = array($this->id);
        $proveedor = Database::getRow($sql,$params);
            if($proveedor){
                $this->nombre = $proveedor['nombre_proveedor'];
                $this->correo = $proveedor['correo'];
                $this->telefono = $proveedor['telefono'];
                return true;   
            }else{
                return null;
            }
    }
    public function updateProveedor(){
		$sql = "UPDATE proveedor SET nombre_proveedor = ?, correo = ?, telefono = ? WHERE id_proveedor = ?";
		$params = array($this->nombre, $this->correo,$this->telefono, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteProveedor(){
		$sql = "DELETE FROM proveedor WHERE id_proveedor = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}

}