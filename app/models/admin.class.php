<?php
class Administrador extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombres = null;
	private $apellidos = null;
	private $correo = null;
	private $clave = null;
	private $telefono = null;
	private $id_tipousuario = null;
    

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
    
    
	//manejar la sesion en el sistema
	public function checkCorreo(){
		$sql = "SELECT id_admin FROM administrador WHERE correo = ?";
		$params = array($this->correo);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['id_admin'];
			return true;
		}else{
			return false;
		}
    }
    public function checkNombre(){
		$sql = "SELECT nombre FROM administrador WHERE id_admin = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->nombres = $data['nombre'];
			return true;
		}else{
			return false;
		}
	}
	public function checkTipo(){
		$sql = "SELECT id_tipousuario FROM administrador 
		WHERE id_admin = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id_tipousuario = $data['id_tipousuario'];
			return true;
		}else{
			return false;
		}
	}
	public function checkPassword(){
		$sql = "SELECT contraseña FROM administrador WHERE id_admin = ?";
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
		$sql = "UPDATE administrador SET contraseña = ? WHERE id_admin = ?";
		$params = array($hash, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function logOut(){
		return session_destroy();
	}

	//Metodos para manejar el CRUD
	public function getUsuarios(){
		$sql = "SELECT administrador.id_admin, administrador.nombre, administrador.apellido, administrador.correo, administrador.telefono , tipo_usuario.nombre_tipo 
		FROM administrador 
		INNER JOIN tipo_usuario ON administrador.id_tipousuario = tipo_usuario.id_tipo
		WHERE tipo_usuario.nombre_tipo = 'Empleado'
		ORDER BY apellido";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getTipos(){
		$sql = "SELECT id_tipo, nombre_tipo FROM tipo_usuario";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchUsuario($value){
		$sql = "SELECT id_admin, nombre, apellido, correo, telefono , FROM administrador WHERE apellido LIKE ? OR nombre LIKE ? ORDER BY apellido";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createUsuario(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO administrador(nombre, apellido, correo, contraseña , telefono , id_tipousuario) VALUES(?, ?, ?, ?, ?, ?)";
		$params = array($this->nombres, $this->apellidos, $this->correo, $hash ,$this->telefono, $this->id_tipousuario);
		return Database::executeRow($sql, $params);
	}
	public function readUsuario(){
		$sql = "SELECT nombre, apellido, correo, telefono, id_tipousuario FROM administrador WHERE id_admin = ?";
		$params = array($this->id);
		$admin = Database::getRow($sql, $params);
		if($admin){
			$this->nombres = $admin['nombre'];
			$this->apellidos = $admin['apellido'];
			$this->correo = $admin['correo'];
			$this->telefono = $admin['telefono'];
			$this->id_tipousuario = $admin['id_tipousuario'];
			return true;
		}else{
			return null;
		}
	}
	public function updateUsuario(){
		$sql = "UPDATE administrador SET nombre = ?, apellido = ?, correo = ?, telefono = ?, id_tipousuario = ? WHERE id_admin = ?";
		$params = array($this->nombres, $this->apellidos, $this->correo, $this->telefono, $this->id_tipousuario,$this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteUsuario(){
		$sql = "DELETE FROM administrador WHERE id_admin = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>