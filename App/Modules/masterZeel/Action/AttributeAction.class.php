<?php
class AttributeAction extends CommonAction{
	/**
	 * 属性视图
	 */
	public function index()
	{
		$this->attr=M('attr')->select();
		$this->display();
	}
	//添加属性
	public function addAttr(){
		$this->type='添加';
		$this->display();
	}

	//执行添加属性
	public function runAddAttr(){
		if($_POST['type']=='添加'){
			if(M('attr')->add($_POST))
			{
				$this->success('添加成功',U(GROUP_NAME.'/Attribute/index'));
			}
			else
			{
				$this->error('添加失败');
			}
		}
		else if($_POST['type']=='编辑'){
			$attr=array();
			
			$attr['id']=$_POST['id'];
			$attr['name']=$_POST['name'];
			$attr['color']=$_POST['color'];
			if(M('attr')->save($attr)){
				$this->success('保存成功',U(GROUP_NAME.'/Attribute/index'));
			}
			else{
				$this->error('保存失败');
			}
		}
	}

	//执行删除属性
	public function deleteattr(){
		$id=$_GET['id'];
		if(M('attr')->where(array('id'=>$id))->delete()&&M('blog_attr')->where(array('aid'=>$id))->delete())
		{
			$this->success('删除属性成功',U(GROUP_NAME.'/Attribute/index'));
		}
		else{
			$this->error('属性删除失败');
		}
	}

	//修改编辑属性
	public function editattr(){
		$id=$_GET['id'];
		$attr=M('attr')->find($id);
		$this->type='编辑';
		$this->id=$id;
		$this->name=$attr['name'];
		$this->color=$attr['color'];
		$this->display('addAttr');

	}

}
?>