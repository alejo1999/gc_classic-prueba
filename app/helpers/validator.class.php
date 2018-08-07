<?php
class Validator{
	private $imageName = null;
	private $imageError = null;

	public function getImageName(){
		return $this->imageName;
	}
	public function getImageError(){
		switch($this->imageError){
			case 1:
				$error = "No se puede guardar la imagen";
				break;
			case 2:
				$error = "El tipo de la imagen debe ser gif, jpg o png";
				break;
			case 3:
				$error = "La dimensión de la imagen debe ser 500x500 pixeles";
				break;
			case 4:
				$error = "El tamaño de la imagen debe ser menor a 2MB";
				break;
			default:
				$error = "Ocurrió un problema con la imagen";
		}
		return $error;
	}

	public function validateForm($fields){
		foreach($fields as $index => $value){
			$value = strip_tags(trim($value));
			$fields[$index] = $value;
		}
		return $fields;
	}

	public function validateId($value){
		if(filter_var($value, FILTER_VALIDATE_INT, array('min_range' => 1))){
			return true;
		}else{
			return false;
		}
	}

	public function validateImage($file, $value, $path, $max_width, $max_heigth){
     	if($file['size'] <= 2097152){
	    	list($width, $height, $type) = getimagesize($file['tmp_name']);
			if($width <= $max_width && $height <= $max_heigth){
				if($type == 1 || $type == 2 || $type == 3){
					if($value){
						$image = $value;
					}
					else{
						$extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
						$image = uniqid().".".$extension;
					}
					$url = $path.$image;
					if(move_uploaded_file($file['tmp_name'], $url)){
						$this->imageName = $image;
						return true;
					}
					else{
						$this->imageError = 1;
						return false;
					}
				}else{
					$this->imageError = 2;
					return false;
				}
			}
			else{
				$this->imageError = 3;
				return false;
			}
		 }
		 
		 else{
			$this->imageError = 4;
			return false;
     	}
	}

	public function validateEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			return true;
		}else{
			return false;
		}
	}

	public function validateAlphabetic($value, $minimum, $maximum){
		if(preg_match("/^[a-zA-ZñÑáÁéÉíÍóÓúÚ\s]{".$minimum.",".$maximum."}$/", $value)){
			return true;
		}else{
			return false;
		}
	}

	public function validateAlphanumeric($value, $minimum, $maximum){
		if(preg_match("/^[a-zA-Z0-9ñÑáÁéÉíÍóÓúÚ\s\.]{".$minimum.",".$maximum."}$/", $value)){
			return true;
		}else{
			return false;
		}
    }
    
    public function validateNumeric($value,$minimum,$maximum) {
        if(preg_match("/^[0-9]{".$minimum.",".$maximum."}$/", $value)){
            return true;
        }else{
            return false;
        }

    }

	public function validateMoney($value){
		if(preg_match("/^[0-9]+(?:\.[0-9]{1,2})?$/", $value)){
			return true;
		}else{
			return false;
		}
	}
	public function validateMoney2($value){
		if(preg_match("/^[0-9]+(?:\.[0-9]{1,2})?$/", $value)){
			return true;
		}else{
			return false;
		}
	}

	public function validateDate($value){
		if(preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$value)){
			return true;
		}else{
			return false;
		}
	}

	public function validatePassword($value){
		if(strlen($value) >= 8){
			return true;
		}else{
			return false;
		}
	}

	
	public function backupDatabaseTables($dbHost,$dbUsername,$dbPassword,$dbName){
		//connect & select the database
		$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 

		//get all of the tables
		if($tables == '*'){
			$tables = array();
			$result = $db->query("SHOW TABLES");
			while($row = $result->fetch_row()){
				$tables[] = $row[0];
			}
		}else{
			$tables = is_array($tables)?$tables:explode(',',$tables);
		}

		//loop through the tables
		foreach($tables as $table){
			$result = $db->query("SELECT * FROM $table");
			$numColumns = $result->field_count;

			$return .= "DROP TABLE $table;";

			$result2 = $db->query("SHOW CREATE TABLE $table");
			$row2 = $result2->fetch_row();

			$return .= "\n\n".$row2[1].";\n\n";

			for($i = 0; $i < $numColumns; $i++){
				while($row = $result->fetch_row()){
					$return .= "INSERT INTO $table VALUES(";
					for($j=0; $j < $numColumns; $j++){
						$row[$j] = addslashes($row[$j]);
						$row[$j] = ereg_replace("\n","\\n",$row[$j]);
						if (isset($row[$j])) { $return .= '"'.$row[$j].'"' ; } else { $return .= '""'; }
						if ($j < ($numColumns-1)) { $return.= ','; }
					}
					$return .= ");\n";
				}
			}

			$return .= "\n\n\n";
		}

		//save file
		$handle = fopen('db-backup-'.time().'.sql','w+');
		fwrite($handle,$return);
		fclose($handle);
	}

}
?>
