<?php
	/**
	 * 评论管理控制器
	 */
	class CommentAction extends CommonAction{
		//评论列表视图
		public function index(){
			/**
			 * 引入think的分页类
			 */
			import('ORG.Util.Page');
			$count=M('comment')->count();
			$page=new Page($count,10);
			$limit=$page->firstRow.','.$page->listRows;
			$comment=M('comment')->order('time DESC')->limit($limit)->select();

			$this->comment=$comment;
			$this->page=$page->show();
			$this->display();

		}

		//删除评论处理
		public function delete(){
			$id=$_GET['id'];
			if(M('comment')->where(array('id'=>$id))->delete())
			{
				M('comment')->where(array('pid'=>$id))->delete();
				$this->success('删除成功',U(GROUP_NAME.'/Comment/index'));
			}
			else{
				$this->error('删除失败');
			}
		}
	}

?>