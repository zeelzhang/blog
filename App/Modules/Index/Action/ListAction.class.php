<?php
	class ListAction extends Action{
		public function index()
		{
			import('ORG.Util.Page');
			import('Class.Category',APP_PATH);
			$id=(int)$_GET['id'];
			$cate=M('cate')->order('sort')->select();
		
			$cid=Category::getChildsId($cate,$id);
			$cid[]=$id;



			//若当前子导航是最低级，则使用它的上级子导航做子导航
			$parent=M('cate')->find($id);
			$pid=$parent['pid'];
			if($pid!=0){
				$id=$pid;
			}


			$cids=Category::getChildsId($cate,$id);
			$cids[]=$id;


			$secondcate=M('cate')->where(array('id'=>array('IN',$cids)))->select();
			$secondcate=Category::ulimitedForLevel($secondcate,'&nbsp;&nbsp;--');

			


			$where=array('cid'=>array('IN',$cid),'del'=>0);
			$count=M('blog')->where($where)->count();
			$page=new Page($count,15);
			$limit=$page->firstRow.','.$page->listRows;


			$this->secondcate=$secondcate;
			$this->blog=D('BlogView')->getAll($where,$limit);
			$this->page=$page->show();
			$this->display();
		}
	}
?>