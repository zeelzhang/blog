<?php
class LoginAction extends Action{
	//后台主页视图
	public function index()
	{
		$this->display();
	}
	public function login(){
		if(!IS_POST) halt('页面不存在');
		if(I('code','','strtolower')!=session('verify'))
		{
			$this->error('验证码错误！');
		}

		$db=M('user');
		$user=$db->where(array('username'=>I('username')))->find();

		if(!$user||$user['password']!=I('password','','md5'))
		{
			$this->error('账户名或密码错误');
		}
		//获取登录时间，登录的ip，登录用户的id
		$data=array(
			'uid'=>$user['uid'],
			logintime=>time(),
			loginip=>get_client_ip(),
			);
		//更新最后登陆时间与IP
		$db->save($data);

		session('uid',$user['uid']);
		session('username',$user['username']);
		session('logintime',date('Y-m-d H:i:s',$user['logintime']));
		session('loginip',$user['loginip']);


		redirect(__GROUP__);





	}



	public function verify()
	{
		import('class.Image',APP_PATH);
		Image::verify();
	}
}
?>