
<?php
class Alumno{


	private $id_alumno;
	private $id_persona;
	private $No_Ctrl;

	function get_id_alumno(){
		return $this->id_alumno;
	}

	function get_id_persona(){
		return $this->id_persona;
	}

	function get_NoCtrl(){
		return $this->No_Ctrl;
	}
	//----------------------------------------------



	// *Asignar Valores
	function set_id_alumno( $valor ){
                $this->id_alumno = $valor;
        }

        function set_id_persona( $valor ){
                $this->id_persona = $valor;
        }

	function set_NoCtrl( $valor ){
		$this->No_Ctrl = $valor;
	}
}
?>


