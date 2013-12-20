<?php
	class WaterAction extends Action{
		public function index(){
			$this->display();	
		}


		public function load(){
			$fields=array('image','title');
			$data=M('water_content')->field($fields)->select();



			$keys = array_rand($data, 10);

			$json = array();
			foreach($keys as $key)
			{
				$json[] = $data[$key];
			}

			echo json_encode( $json );
		}



	}








?>