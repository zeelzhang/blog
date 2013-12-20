<?php
	class BlogRelationModel extends RelationModel{
		protected $tableName='blog';
		protected $_link=array(
			'attr'=>array(
				'mapping_type'=>MANY_TO_MANY,
				'mapping_name'=>'attr',
				'foreign_key'=>'bid',
				'relation_foreign_key'=>'aid',
				'relation_table'=>'bl_blog_attr',
				),
			'cate'=>array(
				'mapping_type'=>BELONGS_TO,
				'foreign_key'=>'cid',
				'mapping_fields'=>'name',//只提取name字段
				'as_fields'=>'name:cate'//将提取的一个字段拿到外面来，不要嵌套在数组里面。
				),
			);


		public function getBlogs($type=0){
			$where=array('del'=>$type);
			//这里可以选择主表要读取的字段,但是注意，关联要用到的字段一定要
			$field=array('id','title','content','time','click','cid'
				);
			//这里的relation(true)表示要关联  模型里面的全部的副表，如果不想全部关联的话可以改成relation('cate')之类的写法
			return $this->field($field)->where($where)->relation(true)->select();
		}
	}
?>