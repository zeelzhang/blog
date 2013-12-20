<?php
	class IndexAction extends CommonAction{
		public function index()
		{
			$this->display();
		}

		public function logout()
		{
		session_unset();
		session_destroy();
		$this->redirect(GROUP_NAME.'/Login/index');
		}

		public function BlogManage()
		{
			$this->display();
		}
		public function WebsiteManage()
		{
			$this->display();
		}
	}
?>