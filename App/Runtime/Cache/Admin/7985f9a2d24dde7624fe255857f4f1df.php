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
			<dt>个人作品链接</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Linksmanage/mylinksshow');?>" target="iframeR">作品列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Linksmanage/mylinkadd');?>" target="iframeR">添加作品</a></dd>
		</dl>
		
		<dl>
			<dt>Demo管理</dt>
			<dd><a href="" target="iframeR">Demo_List</a></dd>
			<dd><a href="" target="iframeR">Demo_Add</a></dd>
		</dl>

		<dl>
			<dt>友情链接管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Linksmanage/linksList');?>" target="iframeR">查看链接</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Linksmanage/linksadd');?>" target="iframeR">添加链接</a></dd>
		</dl>

		<dl>
			<dt>系统设置</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/System/verify');?>" target="iframeR">验证码设置</a></dd>
		</dl>
	</div>
</body>
</html>