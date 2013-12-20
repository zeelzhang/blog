<?php
	class BlogAction extends CommonAction{
		//博文列表
		public function index()
		{
			$this->blog=D('BlogRelation')->getBlogs(0);
			$this->display();
		}

		//删除到回收站，或者还原
		public function toTrach(){
			$type=(int)$_GET['type'];
			$msg=$type?'删除':'还原';
			$update=array(
				//这里的id字段可在M方法中当做条件where来使用
				'id'=>(int)$_GET['id'],
				'del'=>$type
				);
			if(M('blog')->save($update))
			{
				$this->success($msg.'成功',U(GROUP_NAME.'/Blog/index'));
			}
			else
			{
				$this->error($msg.'失败');
			}
		}

		//回收站
		public function trach(){
			$this->blog=D('BlogRelation')->getBlogs(1);
			$this->display('index');
			
		}

		//彻底删除
		public function delete()
		{
			$id=$_GET['id'];
			if(M('blog')->delete($id))
			{
				M('blog_attr')->where(array('bid'=>$id))->delete();
				$this->success('删除成功',U(GROUP_NAME.'/Blog/trach'));
			}
			else
			{
				$this->error('删除失败');
			}
		}



		//添加博文界面
		public function blog()
		{
			//博文所属分类
			$cate=M('cate')->order('sort')->select();

			import('Class.Category',APP_PATH);
			$this->cate=Category::ulimitedForLevel($cate);

			//博文属性
			$this->attr=M('attr')->select();
			$this->display();
		}



		//添加博文表单处理
		public function addBlog()
		{
			
			$data=array(
				'title'=>$_POST['title'],
				'content'=>$_POST['content'],
				'time'=>time(),
				'click'=>(int)$_POST['click'],
				'cid'=>(int)$_POST['cid'],
				'summary'=>$_POST['summary']
				);
			

			if($bid=M('blog')->add($data)){
				if (isset($_POST['aid'])) {
					$sql='insert into '.C(DB_PREFIX).'blog_attr (bid,aid) values ';

					foreach ($_POST['aid'] as $v) {
						$sql.='('.$bid.','.$v.'),';
					}
					$sql=rtrim($sql,',');

					M('blog_attr')->query($sql);
				}
				
				$this->success('添加成功',U(GROUP_NAME.'/Blog/index'));
			}else
			{
				$this->error('添加失败');
			}
			/*if (isset($_POST['aid'])) {
				foreach ($_POST['aid'] as $v) {
					$data['attr'][]=$v;
				}
			}
			//p($data);
			D('BlogRelation')->relation(true)->add($data);*/
			

		}

		//修改编辑博文
		function edit(){
			$id=$_GET['id'];
			$blog=M('blog')->where(array('id'=>$id))->select();
			$attr=M('blog_attr')->where(array('bid'=>$id))->select();
			p($blog);
			p($attr);
			die;
		}



		//上传图片处理
		public function upload()
		{
			import('ORG.Net.UploadFile');

			$upload=new UploadFile();
			$upload->autoSub=true;
			$upload->subType='date';
			$upload->dataFormat='Ym';

			if($upload->upload('./Uploads/'))
			{
				$info=$upload->getUploadFileInfo();
				/*import('ORG.Util.Image');
				Image::water('./Uploads/'.$info[0]['savename'],'./Data/logo.png');*/
				import('Class.Image',APP_PATH);
				Image::water('./Uploads/'.$info[0]['savename']);



				echo json_encode(array(
					'url'=>$info[0]['savename'],
					'title'=>htmlspecialchars($_POST['pictitle'], ENT_QUOTES),
					'original'=>$info[0][name],
					'state'=>'SUCCESS'
					));
			}
			else
			{
				echo json_encode(array(
					'state'=>$upload->getErrorMsg(),
					));
			

			}

		
		}
	}
?>