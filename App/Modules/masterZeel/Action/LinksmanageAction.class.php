<?php
	class LinksmanageAction extends CommonAction{
		/**
		 * 友情链接部分
		 */
		//显示友情链接列表
		public function linksList(){
			$this->links=M('links')->order('time DESC')->select();
			$this->display();
		}

		//添加友情链接——显示
		public function linksadd(){
			$this->type='添加';
			$this->display();
		}

		//修改友情链接——显示
		public function linksedit(){
			$id=$_GET['id'];
			$this->data=M('links')->find($id);
			$this->type='修改';
			$this->display('linksadd');

		}
		//删除友情链接
		public function linksdelete(){
			$id=$_GET['id'];
			if(M('links')->delete($id))
			{
				$this->success('删除成功',U(GROUP_NAME.'/Linksmanage/linksList'));
			}
			else
			{
				$this->error('删除失败');
			}

		}
		
		//添加、修改友情链接处理
		public function linkaddhandle(){
			$type=$_POST['type'];
			if($type=='添加'){
				$data=array(
					'wname'=>$_POST['name'],
					'wurl'=>$_POST['url'],
					'time'=>time()
					);
				//p($data);die;

				if(M('links')->add($data)){
					$this->success('添加成功',U(GROUP_NAME.'/Linksmanage/linksList'));
				}else{
					$this->error('添加失败');
				}
			}else{
				$data=array(
					'id'=>$_POST['id'],
					'wname'=>$_POST['name'],
					'wurl'=>$_POST['url'],
					'time'=>time()
					);
				//p($data);die;

				if(M('links')->save($data)){
					$this->success('修改成功',U(GROUP_NAME.'/Linksmanage/linksList'));
				}else{
					$this->error('修改失败');
				}

			}
		}





		/**
		 * 个人作品链接部分
		 */

		public function mylinksshow(){
			$this->links=M('mylinks')->order('time DESC')->select();
			$this->display();
		}

		//添加个人作品链接——显示
		public function mylinkadd(){
			$this->type='添加';
			$this->display();
		}

		//修改个人作品链接——显示
		public function mylinkedit(){
			$id=$_GET['id'];
			$this->data=M('mylinks')->find($id);
			$this->type='修改';
			$this->display('mylinkadd');

		}
		//删除个人作品链接
		public function mylinkdelete(){
			$id=$_GET['id'];
			if(M('mylinks')->delete($id))
			{
				$this->success('删除成功',U(GROUP_NAME.'/Linksmanage/mylinksshow'));
			}
			else
			{
				$this->error('删除失败');
			}

		}
		
		//添加、修改个人作品链接处理
		public function mylinkaddhandle(){
			$type=$_POST['type'];
			if($type=='添加'){
				$data=array(
					'wname'=>$_POST['name'],
					'wurl'=>$_POST['url'],
					'time'=>time()
					);
				//p($data);die;

				if(M('mylinks')->add($data)){
					$this->success('添加成功',U(GROUP_NAME.'/Linksmanage/mylinksshow'));
				}else{
					$this->error('添加失败');
				}
			}else{
				$data=array(
					'id'=>$_POST['id'],
					'wname'=>$_POST['name'],
					'wurl'=>$_POST['url'],
					'time'=>time()
					);
				//p($data);die;

				if(M('mylinks')->save($data)){
					$this->success('修改成功',U(GROUP_NAME.'/Linksmanage/mylinksshow'));
				}else{
					$this->error('修改失败');
				}

			}
		}







	}


?>