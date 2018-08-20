<?php
class Tipousuario extends Validator{
    //Declaracion de proipedades 
    private $id = null;
		private $nombre = null;
		
		private $productos = null;
		private $categorias = null;
		private $proveedores = null;
		private $ventas = null;
		private $clientes = null;
		private $administradores = null;
		private $estadistica = null;

    
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
		
		// set y get de los diferentes campos de los permisos

		// ************PERMISOS DE PRODUCTOS**********
		public function set_pProductos($value){
			$this->productos = $value;
		}
		public function get_pProductos(){
			return $this->productos;
		}
		// ************PERMISOS DE CATEGORIAS****
		public function set_pCategorias($value){
			$this->categorias = $value;
		}
		public function get_pCategorias(){
			return $this->categorias;
		}
		// ****** PERMISOS DE PROVEEDORES****
		public function set_pProveedores($value){
			$this->proveedores = $value;
		}
		public function get_pProveedores(){
			return $this->proveedores;
		}

		// *********** PERMISOS DE VENTAS *****
		public function set_pVentas($value){
			$this->ventas = $value;
		}
		public function get_pVentas(){
			return $this->ventas;
		}
		// ***** PERMISOS DE CLIENTES *****
		public function set_pClientes($value){
			$this->clientes = $value;
		}
		public function get_pClientes(){
			return $this->clientes;
		}

		// ***** PERMISOS DE ADMINISTRADORES ****
		public function set_pAdministradores ($value){
			$this->administradores = $value;
		}
		public function get_pAdministradores(){
			return $this->administradores;
		}

		// *****PERMISOS DE ESTADISTICA*******
		public function set_pEstadistica ($value){
			$this->estadistica = $value;
		}
		public function get_pEstadistica(){
			return $this->estadistica;
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
		
		public function select_tipousuarios_e()
        {
            $sql = "SELECT id_tipo, nombre_tipo, Productos, Categorias, Proveedores, Ventas, Clientes, Administradores, Estadisticas	FROM tipo_usuario WHERE id_tipo = ?";
            $params = array($this->id);
            $resultado = Database::getRow($sql, $params);
            if($resultado)
            {
                $this->id = $resultado['id_tipo'];
                $this->nombre = $resultado['nombre_tipo'];
                $this->productos = $resultado['Productos'];
                $this->categorias = $resultado['Categorias'];
                $this->proveedores = $resultado['Proveedores'];
                $this->ventas = $resultado['Ventas'];
                $this->clientes = $resultado['Clientes'];
                $this->administradores = $resultado['Administradores'];
                $this->estadistica = $resultado['Estadisticas'];
                return true;
            }
            else
            {
                return null;
            }
				}
				

				public function modificar_permiso()
        {
            $sql = "UPDATE tipo_usuario SET Productos = ?, Categorias = ?, Proveedores = ?, Ventas = ?, Clientes = ?, Administradores = ?, Estadisticas = ? WHERE id_tipo = ?";
            $params = array($this->productos, $this->categorias, $this->proveedores, $this->ventas, $this->clientes, $this->administradores, $this->estadistica, $this->id);
            return Database::executeRow($sql, $params);
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
