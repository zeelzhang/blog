<?php
return array(
	//'配置项'=>'配置值'
	'APP_GROUP_LIST'=>'Index,masterZeel',
	'DEFAULT_GROUP'=>'Index',
	'APP_GROUP_MODE'=>1,
	'APP_GROUP_PATH'=>'Modules',
	'LOAD_EXT_CONFIG'=>'verify,water',

	//数据库连接方式
	'DB_HOST'=>'localhost',
	'DB_USER'=>'root',
	'DB_PWD'=>'zhang',
	'DB_NAME'=>'db_blog',
	'DB_PREFIX'=>'bl_',

	'URL_MODEL'=>2,//路由重写以后记得要换地址解析模式

	//URL路由解析,再配上Apache重写，就可以让URL路径变的很短

	/**
	 * 正则表达式
	 */
	'URL_ROUTER_ON'=>true,
	'URL_ROUTE_RULES'=>array(
		'/^c_(\d+)$/'=>'Index/List/index?id=:1',//这样的正则以后‘c_’代表‘Index/List/index?id=’，后面带个数字表示id，可以理解为c_100，channel-100
		':id\d'=>'Index/Show/index',//这样就更简短了，一个数字表示一片文章

		),


);
?>