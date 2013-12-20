<?php
	class NewWidget extends Widget{
		public function render($data){
			//$limit=$data['limit'];
			$field=array('id','title','click');
			$where=array('del'=>0);
			$data['new']=M('blog')->field($field)->where($where)->order('time DESC')->limit(5)->select();
			return $this->renderFile('',$data);
		}
	}

?>