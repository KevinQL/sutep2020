<?php 
class DB{
	var $conect;
  
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	
	function DB(){
		$this->BaseDatos = "dbsutea"; //ugelandahuaylas
		$this->Servidor = "localhost";		//localhost
		$this->Usuario = "suteandahuaylas";			//lenyn
		$this->Clave = "suteandahuaylas";				//LWcM#Mq@DI+j
	}

	 function conectar() {
         
		if(!($con=mysqli_connect($this->Servidor,$this->Usuario,$this->Clave))){
			echo"<h1> [:(] Error al conectar a la base de datos</h1>";	
			exit();
		}
		if (!mysqli_select_db($con, $this->BaseDatos)){
			echo "<h1> [:(] Error al seleccionar la base de datos</h1>";  
			exit();
		}
        $this->conect=$con;
        //echo "SE CONECTO!!";
		return $con;
         
	}
    
}

?>