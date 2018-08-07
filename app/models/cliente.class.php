<?php
class Cliente extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombres = null;
	private $apellidos = null;
	private $correo = null;
	private $clave = null;
    private $telefono = null;
    private $genero = null;
	private $estado = null;
	private $fecha_contrasena = null;
	private $fecha_bloqueo = null;

    

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

	public function setFecha_contrasena($value){
        if($this->validateDate($value)){
            $this->fecha_contrasena = $value;
            return true;
        }else{
            return false;
        }
    }

    public function getFecha_contrasena(){
        return $this->fecha_contrasena;
	}
	
	public function setFecha_bloqueo($value){
        if($this->validateDate($value)){
            $this->fecha_bloqueo = $value;
            return true;
        }else{
            return false;
        }
    }

    public function getFecha_bloqueo(){
        return $this->fecha_bloqueo;
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
		if($this->validateNumeric($value, 8, 10)){
			$this->telefono = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTelefono(){
		return $this->telefono;
    }
    public function setGenero($value){
		if($value == "1" || $value == "0"){
			$this->genero = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getGenero(){
		return $this->genero;
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
		$sql = "SELECT id_cliente FROM cliente WHERE correo = ? ";
		$params = array($this->correo);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['id_cliente'];
			return true;
		}else{
			return false;
		}
	}
	
	public function checkEstado(){
		$sql = "SELECT estado FROM cliente WHERE id_cliente = ? ";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->estado = $data['estado'];
			return true;
		}else{
			return false;
		}
	}
	
    public function checkNombre(){
		$sql = "SELECT nombre_cliente FROM cliente WHERE id_cliente = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->nombres = $data['nombre_cliente'];
			return true;
		}else{
			return false;
		}
	}
	public function checkPassword(){
		$sql = "SELECT contrasena FROM cliente WHERE id_cliente = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->clave, $data['contrasena'])){
			return true;
		}else{
			return false;
		}
	}
	
	public function checkfecha_contrasena(){
		$sql="SELECT DATEDIFF( CURDATE(),(SELECT cliente.fecha_contrasena)) AS fecha_dif FROM cliente WHERE cliente.id_cliente = ?";
		$params = array($this->id);
		$data2=Database::getRow($sql,$params);

		if($data2){
			$this->fecha_contrasena = $data2['fecha_dif'];
			return true;
		}else{
			return false;
		}
	}

	public function changefecha_blo(){
		$sql = "UPDATE cliente SET cliente.fecha_bloqueo = (SELECT DATE_ADD(CURDATE(), INTERVAL 1 DAY)) WHERE cliente.id_cliente = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}

	public function changefecha_bloqueo(){
		$sql = "UPDATE cliente SET cliente.fecha_bloqueo = (SELECT DATE_SUB(CURDATE(), INTERVAL 2 DAY)) WHERE cliente.id_cliente = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}

	public function checkfecha_bloqueo(){
		$sql="SELECT DATEDIFF( CURDATE(),(SELECT cliente.fecha_bloqueo)) AS fecha_blo FROM cliente WHERE cliente.id_cliente = ?";
		$params = array($this->id);
		$data2=Database::getRow($sql,$params);

		if($data2){
			$this->fecha_bloqueo = $data2['fecha_blo'];
			return true;
		}else{
			return false;
		}
	}

	public function changePassword(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "UPDATE cliente SET contrasena = ? , fecha_contrasena = CURDATE() WHERE id_cliente = ?";
		$params = array($hash, $this->id);
		return Database::executeRow($sql, $params);
	}

	
	public function logOut(){
		return session_destroy();
		$_SESSION['intentos'] = 0;
	}

	
	//Metodos para manejar el CRUD
	public function getClientes(){
		$sql = "SELECT id_cliente, nombre_cliente, apellido, correo, telefono ,genero,estado FROM cliente ORDER BY apellido ";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchCliente($value){
		$sql = "SELECT id_cliente, nombre_cliente, apellido, correo, telefono FROM cliente WHERE apellido LIKE ? OR nombre_cliente LIKE ? ORDER BY apellido";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	
	public function createCliente(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO cliente( nombre_cliente, apellido, correo, contrasena , telefono ,genero,estado,fecha_contrasena) VALUES(?,?, ?, ?, ?, ?, ?,CURDATE())";
		$params = array( $this->nombres, $this->apellidos, $this->correo, $hash ,$this->telefono,$this->genero, 0);
		return Database::executeRow($sql, $params);
	}
	public function readCliente(){
		$sql = "SELECT nombre_cliente, apellido, correo, telefono ,genero,estado FROM cliente WHERE id_cliente = ?";
		$params = array($this->id);
		$cliente = Database::getRow($sql, $params);
		if($cliente){
			$this->nombres = $cliente['nombre_cliente'];
			$this->apellidos = $cliente['apellido'];
			$this->correo = $cliente['correo'];
			$this->telefono = $cliente['telefono'];
			$this->genero = $cliente['genero'];
			$this->estado = $cliente['estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateCliente(){
		$sql = "UPDATE cliente SET   nombre_cliente = ?, apellido = ?, correo = ?, telefono = ? ,estado = ? WHERE id_cliente = ?";
		$params = array($this->nombres, $this->apellidos, $this->correo, $this->telefono, $this->estado, $this->id);
		return Database::executeRow($sql, $params);
	}

	public function updateUsuario(){
		$sql = "UPDATE administrador SET nombre = ?, apellido = ?, correo = ?, telefono = ?, id_tipousuario = ? WHERE id_admin = ?";
		$params = array($this->nombres, $this->apellidos, $this->correo, $this->telefono, $this->id_tipousuario,$this->id);
		return Database::executeRow($sql, $params);
	}
	
	

	public function deleteCliente(){
		$sql = "UPDATE cliente SET  WHERE id_cliente = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>

