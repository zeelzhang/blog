<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>分类列表</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
</head>
<body>
<form action="<?php echo U(GROUP_NAME.'/Category/sortCate');?>" method="post">
<table class="table">
	<tr>
		<td>ID</td>
		<td>名称</td>
		<td>级别</td>
		<td>排序</td>
		<td>操作</td>
	</tr>
	<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
		<td><?php echo ($v["id"]); ?></td>
		<td><?php echo ($v["html"]); echo ($v["name"]); ?></td>
		<td><?php echo ($v["level"]); ?></td>
		<td>
			<input type="text" name=<?php echo ($v["id"]); ?> value='<?php echo ($v["sort"]); ?>'  />
		</td>
		<td>
			<a href="<?php echo U(GROUP_NAME.'/Category/addCate',array('pid'=>$v['id']));?>">[添加子分类]</a>
			<a href="<?php echo U(GROUP_NAME.'/Category/editCate',array('id'=>$v['id']));?>">[修改]</a>
			<a href="<?php echo U(GROUP_NAME.'/Category/deleteCate',array('id'=>$v['id']));?>">[删除]</a>
		</td>
	</tr><?php endforeach; endif; ?>
	<tr>
		<td colspan="5" align="center">
			<input type="submit" value="排序" />
		</td>
	</tr>
</table>
	</form>
</body>
</html>