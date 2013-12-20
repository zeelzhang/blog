<?php
	class IndexAction extends Action{
		public function index()
		{
				if (!$list=S('index_list')) {
					$list=M('cate')->where(array('pid'=>0))->order('sort')->select();
					import('Class.Category',APP_PATH);
					$cate=M('cate')->order('sort')->select();
					$db=M('blog');
					$field=array('id','title','time');
					
					foreach ($list as $k=>$v) {
						$cids=Category::getChildsId($cate,$v['id']);
						$cids[]=$v['id'];
						$where=array('cid'=>array('IN',$cids),'del'=>0);
						$list[$k]['blog']=$db->field($field)->where($where)->order('time DESC')->select();
				}
				S('index_list',$list,10);//定义缓存时间为…………………………
			}
				$this->cate=$list;
				$this->display();
		}

		public function searchhandle(){
			$key='%'.$_POST['keyword'].'%';
			$list=M('cate')->where(array('pid'=>0))->order('sort')->select();
			import('Class.Category',APP_PATH);
			$cate=M('cate')->order('sort')->select();
			$db=M('blog');
			$field=array('id','title','time');

			foreach ($list as $k=>$v) {
						$cids=Category::getChildsId($cate,$v['id']);
						$cids[]=$v['id'];
						$where=array('cid'=>array('IN',$cids),'del'=>0,'content'=> array ("LIKE", $key ));
						
						$list[$k]['blog']=$db->field($field)->where($where)->order('time DESC')->select();
				}
			$this->cate=$list;
			$this->display('index');
		}
	}
?>