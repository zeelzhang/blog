<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
	<script type='text/javascript' src='__ROOT__/Public/js/jquery-1.8.2.min.js'></script>
	<title>Document</title>
</head>
<body>
	<table class='table'>
		<tr>
			
			<th>ID</th>
			<th>发布者</th>
			<th>内容</th>
			<th>所评博文</th>
			<th>回复ID</th>
			<th>发布时间</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($comment)): foreach($comment as $key=>$v): ?><tr>
		<td><?php echo ($v["id"]); ?></td>
		<td><?php echo ($v["user"]); ?></td>
		<td><?php echo (replace_pic($v["comment"])); ?></td>
		<td><?php echo ($v["bid"]); ?></td>
		<td><?php echo ($v["pid"]); ?></td>
		<td><?php echo (date('y-m-d H:i',$v["time"])); ?></td>
		<td>
		<!-- 注意在这里不能用点语法，要用原生的写法
		 -->
		<a href="<?php echo U(GROUP_NAME.'/Comment/delete',array('id'=>$v['id']));?>">删除</a></td>
		</tr><?php endforeach; endif; ?>
		<tr>
			<td colspan='7' align='center'>
				<?php echo ($page); ?>
			</td>
		</tr>
	</table>
</body>
</html>