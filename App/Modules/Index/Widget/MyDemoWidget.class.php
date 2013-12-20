<?php
	class MyDemoWidget extends Widget{
		public function render($data){
			//$limit=$data['limit'];
			$field=array('id','demoname','demourl');
			$data['mydemo']=M('mydemo')->field($field)->order('time DESC')->select();
			return $this->renderFile('',$data);
		}
	}

?>