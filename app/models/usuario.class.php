<?php
class Usuario extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombres = null;
	private $apellidos = null;
	private $correo = null;
	private $clave = null;
    private $telefono = null;
    private $id_tipousuario = null;
    private $estado = null;
    

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
	
	public function setNombres($value){
		if($this->validateAlphabetic($value, 1, 100)){
			$this->nombres = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombres(){
		return $this->nombres;
	}

	public function setApellidos($value){
		if($this->validateAlphabetic($value, 1, 100)){
			$this->apellidos = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getApellidos(){
		return $this->apellidos;
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
    
    public function setClave($value){
		if($this->validatePassword($value)){
			$this->clave = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getClave(){
		return $this->clave;
	}

	public function setTelefono($value){
		if($this->validateNumeric($value, 1, 10)){
			$this->telefono = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTelefono(){
		return $this->telefono;
    }
    public function setTipousuario($value){
		if($this->validateId($value)){
			$this->id_tipousuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipousuario(){
		return $this->id_tipousuario;
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

	
	//manejar la sesion en el sistema
	public function checkCorreo(){
		$sql = "SELECT id_usuario FROM usuario WHERE correo = ?";
		$params = array($this->correo);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['id_usuario'];
			return true;
		}else{
			return false;
		}
    }
    public function checkNombre(){
		$sql = "SELECT nombre FROM usuario WHERE id_usuario = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->nombres = $data['nombre'];
			return true;
		}else{
			return false;
		}
	}
	public function checkPassword(){
		$sql = "SELECT contraseña FROM usuario WHERE id_usuario = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->clave, $data['contraseña'])){
			return true;
		}else{
			return false;
		}
	}
	public function changePassword(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "UPDATE usuario SET contraseña = ? WHERE id_usuario = ?";
		$params = array($hash, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function logOut(){
		return session_destroy();
	}

	//Metodos para manejar el CRUD
	public function getUsuarios(){
		$sql = "SELECT id_usuario, nombre, apellido, correo, telefono FROM usuario ORDER BY apellido";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchUsuario($value){
		$sql = "SELECT id_usuario, nombre, apellido, correo, telefono FROM usuario WHERE apellido LIKE ? OR nombre LIKE ? ORDER BY apellido";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function getTipos(){
		$sql = "SELECT id_tipo, nombre_tipo FROM tipo_usuario";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function createUsuario(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO usuario(fk_id_tipousuario, nombre, apellido, correo, contraseña , telefono ,estado) VALUES(?,?, ?, ?, ?, ?, ?)";
		$params = array($this->id_tipousuario, $this->nombres, $this->apellidos, $this->correo, $hash ,$this->telefono, $this->estado);
		return Database::executeRow($sql, $params);
	}
	public function readUsuario(){
		$sql = "SELECT fk_id_tipousuario,nombre, apellido, correo, telefono ,estado FROM usuario WHERE id_usuario = ?";
		$params = array($this->id);
		$usuario = Database::getRow($sql, $params);
		if($usuario){
			$this->id_tipousuario = $usuario['fk_id_tipousuario'];
			$this->nombres = $usuario['nombre'];
			$this->apellidos = $usuario['apellido'];
			$this->correo = $usuario['correo'];
			$this->telefono = $usuario['telefono'];
			$this->estado = $usuario['estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateUsuario(){
		$sql = "UPDATE usuario SET fk_id_tipousuario = ?, nombre = ?, apellido = ?, correo = ?, telefono = ? ,estado = ? WHERE id_usuario = ?";
		$params = array($this->id_tipousuario,$this->nombres, $this->apellidos, $this->correo, $this->telefono, $this->estado, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteUsuario(){
		$sql = "DELETE FROM usuario WHERE id_usuario = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>

