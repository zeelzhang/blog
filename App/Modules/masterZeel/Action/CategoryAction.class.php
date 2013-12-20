<?php

/**
 * 无限级分类类
 *zeelzhang  2013年7月31日
 */
class CategoryAction extends CommonAction{
	public function index()
	{
		import ('Class.Category',APP_PATH);

		$cate=M('cate')->order('sort ASC')->select();
		$cate=Category::ulimitedForLevel($cate,'&nbsp;&nbsp;--');

		/*$cate=Category::unlimitedForLayer($cate);*/


	/*	$cate=Category::getParents($cate,12);*/
/*
		$cate=Category::getChilds($cate,4);


		p($cate);
		die;
*/
		$this->cate=$cate;
		$this->display();
	}
	public function addCate(){
		$this->pid=I('pid',0,'intval');
		$this->type='添加';
		$this->sort=100;
		$this->display();
	}
	public function runAddCate()
	{
		if($_POST['type']=='添加'){
			if(M('cate')->add($_POST))
			{
				$this->success('添加成功',U(GROUP_NAME.'/Category/index'));
			}
			else
			{
				$this->error('添加失败');
			}
		}
		else if($_POST['type']=='编辑'){
			$cate=array();
			$cate['id']=$_POST['id'];
			$cate['name']=$_POST['name'];
			$cate['sort']=$_POST['sort'];
			if(M('cate')->save($cate)){
				$this->success('保存成功',U(GROUP_NAME.'/Category/index'));
			}
			else
			{
				$this->error('保存失败');
			}
		}
		
	}
	public function sortCate()
	{
		$db=M('cate');
		foreach ($_POST as $id => $sort) {
			$db->where(array('id'=>$id))->setField('sort',$sort);
		}
		$this->redirect(GROUP_NAME.'/Category/index');

	}

	public function deleteCate(){
		import('Class.Category',APP_PATH);
		$id=I('id',0,'intval');
		$cate=M('cate')->order('sort ASC')->select();
		$childs=Category::getChildsId($cate,$id);
		$childs[]=$id;
		if(M('cate')->delete($id)){
			$this->success('删除成功',U(GROUP_NAME.'/Category/index'));
		}
		else
		{
			$this->error('，删除失败');
		}
	}

	//编辑分类栏目名称
	public function editCate(){
		$id=$_GET['id'];
		$cate=M('cate')->find($id);
		$this->type='编辑';
		$this->name=$cate['name'];
		$this->id=$cate['id'];
		$this->sort=$cate['sort'];
		$this->display('addCate');

	}
}
?>