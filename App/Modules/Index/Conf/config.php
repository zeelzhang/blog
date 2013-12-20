<?php

/**
 * 
 */

return array(
		

		'TMPL_PARSE_STRING'=>array(
				'__PUBLIC__'=>__ROOT__.'/'.APP_NAME.'/Modules/'.GROUP_NAME.'/Tpl/public',
				),

		'URL_HTML_SUFFIX'=>'',
		//'SHOW_PAGE_TRACE'=>true,
		//开启自定义标签库的使用
		'APP_AUTOLOAD_PATH'=>'@.TagLib',
		'TAGLIB_BUILD_IN'=>'Cx,Bl',




		//开启静态缓存,开启静态缓存后，再设定生成规则，要在哪个应用，哪个控制器方法生成，生成的有效时间是多长（0表示缓存时间永久存在，可以在文章的展示页面生成）
		'HTML_CACHE_ON'=>true,
		'HTML_CACHE_RULES'=>array(
			'Show:index'=>array('{:module}_{:action}_{id}',10),
			),




			//文件缓存
			'DATA_CACHE_TYPE'=>'File',
			//动态缓存
			//'DATA_CACHE_TYPE'=>'Memcache',//要用的话电脑上面要有装memcache的服务器，我的没装
		);


?>