<?php
	class HotWidget extends Widget{
		public function render($data)
		{
			//热门博文
			$where=array('del'=>0);
			$data['blog']=M('blog')->field(array('id','title','click'))->where($where)->order('click DESC')->limit(5)->select();
			return $this->renderFile('',$data);
		}
	}
?>