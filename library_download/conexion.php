<?php 
class DB{
	var $conect;
  
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	
	function DB(){
		$this->BaseDatos = "ugelandahuaylas";
		$this->Servidor = "localhost";
		$this->Usuario = "root";
		$this->Clave = "cardenas";
	}

	 function conectar() {
         
		if(!($con=mysqli_connect($this->Servidor,$this->Usuario,$this->Clave))){
			echo"<h1> [:(] Error al conectar a la base de datos</h1>";	
			$mysqli->set_charset("utf8");
			exit();
		}
		if (!mysqli_select_db($con, $this->BaseDatos)){
			echo "<h1> [:(] Error al seleccionar la base de datos</h1>";  
			exit();
		}
		$this->conect=$con;
		return true;
         
	}
    
}

?>
