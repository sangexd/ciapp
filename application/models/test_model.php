<?php 
	class Test_model extends CI_Model{
		
		public function cantidad(){
			echo "cantidad";
			$resultado=$this->db->query("SELECT NOW() as ahora ");
			$fila=$resultado->row_array();
			echo $fila['ahora'];
		}
	}
 ?>