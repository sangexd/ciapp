<?php 
	class Test extends CI_Controller{
		
		public function index(){
			//echo "test";
			$this->load->model('test_model');
			$this->test_model->cantidad();
		}
	}
 ?>