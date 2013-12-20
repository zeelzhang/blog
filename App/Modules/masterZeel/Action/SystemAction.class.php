<?php
	class SystemAction extends CommonAction{
		public function verify()
		{
			$this->display();
		}

		public function updataVerify()
		{
			if(F('verify',$_POST,CONF_PATH))
			{
				$this->success('修改成功',U(GROUP_NAME.'/System/verify'));
			}
			else
			{
				$this->error('修改失败，请修改'.CONF_PATH.'verify.php权限');
			}
		}
	}

?>