<?php
	class ShowAction extends Action{
		public function index()
		{
			import('Class.Category',APP_PATH);

			$id=$_GET['id'];

		
			$field=array('id','title','time','content','cid');
			$blog=M('blog')->where(array('id'=>$id))->field($field)->find();
			$cate=M('cate')->order('sort')->select();
			$this->parent=Category::getParents($cate,$blog[cid]);

			//提取之前的评论，在模板展示出来
			$comment=M('comment')->where(array('bid'=>$id))->order('time DESC')->limit(5)->select();
			//assign函数（传过模板后的名称，传递的参数）
			$this->comment=$comment;


			$this->blog=$blog;
			$this->display();
		}

		public function clickNum(){
			$id=(int)$_GET['id'];
			$click=M('blog')->where(array('id'=>$id))->getField('click');
			M('blog')->where(array('id'=>$id))->setInc('click');//每次读取，click字段加1
			echo 'document.write('.$click.')';
		}


		

		//异步处理评论提交表单
		public function commenthandle(){
			if(!IS_AJAX)
			{
				halt('页面不存在');
			}
			$data=array(
				'user'=>I('username'),
				'comment'=>I('content'),
				'bid'=>I('bid'),
				'pid'=>0,
				'time'=>time()
				);
			if($id = M('comment')->data($data)->add())
			{
				
				$data['comment']=replace_pic($data['comment']);
				$data['time']=date('y-m-d H:i',$data['time']);
				$data['status']=1;
				

				$comment=array(
					'id'=>$id,
					'content'=>$data['comment'],
					'time'=>$data['time'],
					'status'=>1,
					'username'=>$data['user']
					);
				$this->ajaxReturn($comment,'json');
			}
			else
			{
				//echo json_encode(array('status'=>0));这是普通的写法
				//thinkphp的写法：
				$this->ajaxReturn(array('status'=>0),'json');
			}
		}
	}
?>