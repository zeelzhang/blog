<?php
	class LinksWidget extends Widget{
		public function render($data){
			//$limit=$data['limit'];
			$field=array('id','wname','wurl');
			$data['links']=M('links')->field($field)->order('time DESC')->select();
			return $this->renderFile('',$data);
		}
	}

?>