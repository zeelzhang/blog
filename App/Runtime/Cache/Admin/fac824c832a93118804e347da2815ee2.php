<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
	<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
	<title>Document</title>
</head>
<body>
<div id="iframeleft">
	<dl>
			<dt>博文管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Blog/index');?>" target="iframeR">博文列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Blog/blog');?>" target="iframeR">添加博文</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Blog/trach');?>" target="iframeR">回收站</a></dd>
			
		</dl>
		<dl>
			<dt>属性管理</dt>
			<dd><a href="<?php echo U('Admin/Attribute/index');?>" target="iframeR">属性列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Attribute/addAttr');?>" target="iframeR">添加属性</a></dd>
		</dl>
		<dl>
			<dt>分类管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Category/index');?>" target="iframeR">分类列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Category/addCate');?>" target="iframeR">添加分类</a></dd>
		</dl>

		<dl>
			<dt>评论管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Comment/index');?>" target="iframeR">查看评论</a></dd>
		</dl>
</div>
</body>
</html>