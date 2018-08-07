<?php
class Valoracion extends Validator{
    //Declaración de propiedades

    private $id = null;
    private $id_usuario = null;
    private $id_producto = null;
    private $valoracion= null;
    private $comentario = null;

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
    
    public function setId_usuario($value){
		if($this->validateId($value)){
			$this->id_usuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_usuario(){
		return $this->id_usuario;
    }
    
    public function setId_producto($value){
		if($this->validateId($value)){
			$this->id_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_producto(){
		return $this->id_producto;
    }
    
    
	public function setValoracion($value){
		if($this->validateNumeric($value, 1, 11)){
			$this->valoracion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getValoracion(){
		return $this->valoracion;
    }
    
    public function setComentario($value){
		if($this->validateAlphanumeric($value, 1, 200)){
			$this->comentario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getComentario(){
		return $this->comentario;
    }
    
    // metodos para manejar el crud
    public function checkValoraciones(){
        $sql = "SELECT round(AVG(valoracion),1) AS estrellas  FROM valoracion WHERE fk_id_producto = ?";
        $params = array($this->id_producto);
        $valoraciones = Database::getRow($sql, $params);
        if($valoraciones){
            $this->valoracion = $valoraciones['estrellas'];
            return true;
		}else{
			return null;
        }
	}

	public function getValoracionporproducto(){
		$sql = "SELECT valoracion.id_valoracion, cliente.nombre_cliente,  valoracion.valoracion, valoracion.comentario FROM valoracion
		INNER JOIN cliente ON valoracion.fk_id_usuario = cliente.id_cliente
		WHERE valoracion.fk_id_producto = ?";
		$params = array($this->id_producto);
		
		return Database::getRows($sql, $params);
	}
	public function readValoracion(){
		$sql = "SELECT fk_id_usuario,valoracion, comentario, fk_id_producto FROM valoracion WHERE id_valoracion = ?";
		$params = array($this->id);
		$valoracion = Database::getRow($sql, $params);
		if($valoracion){
			$this->id_usuario = $valoracion['fk_id_usuario'];
			$this->valoracion = $valoracion['valoracion'];
			$this->comentario = $valoracion['comentario'];
			$this->id_producto = $valoracion['fk_id_producto'];
			return true;
		}else{
			return null;
		}
	}
	
    public function mostrarComentarios(){
        $sql = "SELECT cliente.nombre_cliente,cliente.apellido,valoracion.comentario,valoracion.valoracion,valoracion.fecha_valoracion
        FROM valoracion 
        INNER JOIN cliente ON valoracion.fk_id_usuario = cliente.id_cliente
        WHERE fk_id_producto = ?";
        $params = array($this->id_producto);
        return Database::getRows($sql, $params);
    }

    public function createValoracion(){
        $sql = "INSERT INTO valoracion(fk_id_usuario, fk_id_producto    , valoracion, comentario) VALUES (?, ?, ?, ?)";
        $params = array($this->id_usuario,$this->id_producto,$this->valoracion,$this->comentario);
        return Database::executeRow($sql, $params);
	} 
	
	public function deleteValoracion(){
		$sql = "DELETE FROM valoracion WHERE id_valoracion = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>