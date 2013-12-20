<?php
	class MyLinksWidget extends Widget{
		public function render($data){
			//$limit=$data['limit'];
			$field=array('id','wname','wurl');
			$data['mylinks']=M('mylinks')->field($field)->order('time DESC')->select();
			return $this->renderFile('',$data);
		}
	}

?>