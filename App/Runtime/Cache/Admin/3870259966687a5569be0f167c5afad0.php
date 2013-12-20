<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
</head>
<body>
<table class="table">
	<tr>
		<td>ID</td>
		<td>属性名称</td>
		<td>颜色</td>
		<td>操作</td>
	</tr>
	<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><tr>
		<td><?php echo ($v["id"]); ?></td>
		<td><?php echo ($v["name"]); ?></td>
		<td>
			<div style='width:20px;height:20px; background:<?php echo ($v["color"]); ?>'></div>
		</td>
		<td><a href="<?php echo U(GROUP_NAME.'/Attribute/editattr',array('id'=>$v['id']));?>">[修改]</a>
		<a href="<?php echo U(GROUP_NAME.'/Attribute/deleteattr',array('id'=>$v['id']));?>">[删除]</a></td>
	</tr><?php endforeach; endif; ?>
</table>
	
</body>
</html>