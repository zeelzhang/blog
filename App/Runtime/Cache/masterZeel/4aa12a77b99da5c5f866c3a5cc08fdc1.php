<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo ($type); ?>博文属性</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
</head>
<body>
<form action="<?php echo U(GROUP_NAME.'/Attribute/runAddAttr');?>" method="post">
	<table class="table">
		<tr>
			<td colspan="2">
				<?php echo ($type); ?>博文属性
			</td>
		</tr> 
		<tr>
			<td align="right">属性名称</td>
			<td>
				<input type="text" name="name" value="<?php echo ($name); ?>" />
			</td>
		</tr>
		<tr>
			<td align="right">标题颜色</td>
			<td>
				<input type="text" name="color" value="<?php echo ($color); ?>" />
				<input type="hidden" name="id" value="<?php echo ($id); ?>" />
				<input type="hidden" name="type" value="<?php echo ($type); ?>" />
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="保存<?php echo ($type); ?>" />
			</td>
		</tr>
	</table>
</form>
	
</body>
</html>