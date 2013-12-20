<?php

/**
 * 后台模块独立配置文件
 */

return array(
		/*'RBAC_SUPERADMIN'=>'zhang',//超级管理员名称
		'ADMIN_AUTH_KEY'=>'superadmin',//超级管理员识别号
		'USER_AUTH_ON'=>true,//是否开启验证
		'USER_AUTH_TYPE'=>1,//1表示登陆验证，2表示实时验证
		'USER_AUTH_KEY'=>'uid',//用户认证识别号
		'NOT_AUTH_MODULE'=>'Index',//无需验证的控制器
		'NOT_AUTH_ACTION'=>'addRoleHandle,addUserHandle,addNodeHandle',//无需验证的动作方法
		'RBAC_ROLE_TABLE'=>'wish_role',//角色表
		'RBAC_USER_TABLE'=>'wish_role_user',//角色和用户的中间表
		'RBAC_ACCESS_TABLE'=>'wish_access',//权限表
		'RBAC_NODE_TABLE'=>'wish_node',//节点表
*/
		'AUTH_ON' => true, //认证开关
        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
        'AUTH_GROUP' => 'auth_group', //用户组数据表名
        'AUTH_GROUP_ACCESS' => 'auth_group_access', //用户组明细表
        'AUTH_RULE' => 'auth_rule', //权限规则表
        'AUTH_USER' => 'user',//用户信息表
        'USER_AUTH_KEY'=>'uid',//用户认证识别号
        'NOT_AUTH_MODULE'=>'Login,Index',//无需验证的控制器
		'NOT_AUTH_ACTION'=>'',//无需验证的动作方法
//指定后台模板样式目录
		'TMPL_PARSE_STRING'=>array(
				'__PUBLIC__'=>__ROOT__.'/'.APP_NAME.'/Modules/'.GROUP_NAME.'/Tpl/public',
				),

		'URL_HTML_SUFFIX'=>'',
		'SHOW_PAGE_TRACE'=>true,
		);

?>