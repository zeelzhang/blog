<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type='text/javascript' src='__ROOT__/Public/js/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src="__PUBLIC__/Js/index.js"></script>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<head>
</head>
<body>
	<div id="top">
		<div class="menu">
			<a href="<?php echo U(GROUP_NAME.'/Index/BlogManage');?>" target="iframeL">博客管理</a>
			<a href="<?php echo U(GROUP_NAME.'/Index/WebsiteManage');?>" target="iframeL">网站管理</a>
			<a href="#">待定</a>
			<a href="#">待定</a>
			<a href="#">待定</a>
		</div>
		<div class="exit">
			<a href="<?php echo U(GROUP_NAME.'/Index/logout');?>" target="_self">退出</a>
			<a href="" target="_blank">获得帮助</a>
			
		</div>
	</div>
	<div id="left">
		<iframe name="iframeL" src="<?php echo U(GROUP_NAME.'/Index/BlogManage');?>"></iframe>
	</div>
	<div id="right">
		<iframe name="iframeR" src="<?php echo U(GROUP_NAME.'/Blog/index');?>"></iframe>
	</div>
</body>
</html>