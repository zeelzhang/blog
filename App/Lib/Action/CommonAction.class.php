<?php
/**
 * 公用控制器，给其他的控制器继承用
 */

class CommonAction extends Action{
    public function _initialize(){
    	if(!isset($_SESSION['uid']))
		{
			$this->redirect(GROUP_NAME.'/Login/index');
		}

       import('ORG.Util.Auth');//加载类库
       $auth=new Auth();
       if(!$auth->check(MODULE_NAME.'-'.ACTION_NAME,session('uid'))){
            $this->error('你没有权限');
       }
    }
 }
?>