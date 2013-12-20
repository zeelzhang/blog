<?php
/**
 * 无限级分层类
 */
	class Category{
		/**
		 * 一维数组组合的无限级分层
		 *将其子元素调为父元素后面的一个，只是调整了数组的排序
		 */
		Static public function ulimitedForLevel($cate,$html='--',$pid=0,$level=0)
		{
			$arr=array();
			foreach ($cate as $v ) {
				if($v['pid']==$pid)
				{
					$v['level']=$level+1;
					$v['html']=str_repeat($html, $level);
					$arr[]=$v;//可以理解为将$v压到数组$arr里面
					$arr=array_merge($arr,self::ulimitedForLevel($cate,$html,$v['id'],$level+1));
				}
			}
			return $arr;

		}


		/**
		 * 多维数组组合的无限级分类
		 *将其子类合并成一个数组，当做父栏目的子数组
		 */
		Static public function unlimitedForLayer($cate,$name='child',$pid=0)
		{
			$arr=array();
			foreach ($cate as $v) {
				if($v['pid']==$pid){
					$v[$name]=self::unlimitedForLayer($cate,$name,$v['id']);
					$arr[]=$v;
				}
				
			}
			return $arr;
		}

		/**
		*传递一个子分类ID，返回所有的父子分类
		 * 查找无限级分类里面一个子节点的所有老爸
		 */
		Static public function getParents($cate,$id)
		{
			$arr=array();
			foreach ($cate as $v) {
				if($v['id']==$id)
				{
					$arr[]=$v;
					$arr=array_merge(self::getParents($cate,$v['pid']),$arr);
				}
			}
			return $arr;

		}

	


		/**
		 * 传递一个父级分类ID，返回所有子分类ID
		 */
		Static public function getChildsId($cate,$pid)
		{
			$arr=array();
			foreach ($cate as $v) {
				if($v['pid']==$pid)
				{
					$arr[]=$v['id'];
					$arr=array_merge($arr,self::getChilds($cate,$v['id']));
				}
			}
			return $arr;

		}


		/**
		 * 传递一个父级分类ID，返回所有子分类
		 */
		Static public function getChilds($cate,$pid)
		{
			$arr=array();
			foreach ($cate as $v) {
				if($v['pid']==$pid)
				{
					$arr[]=$v;//把整个$v都压进去
					$arr=array_merge($arr,self::getChilds($cate,$v['id']));
				}
			}
			return $arr;

		}


	}
?>