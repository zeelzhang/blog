<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<script type='text/javascript' src='__ROOT__/Public/js/jquery-1.8.2.min.js'></script>
	<link href="__ROOT__/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="__ROOT__/Public/js/bootstrap.min.js"></script>
	<title>Document</title>
</head>
<body>
	<table class='table  table-hover' style="width:900px;" align="center">
		<thead>
		<tr>
			<th colspan="5"><h2><p class="text-success">作品网站列表</p></h1></th>
		</tr>
			<tr>
				<th width="10%">ID</th>
				<th width="40%">作品名称</th>
				<th>作品地址</th>
				<th>添加时间</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($links)): foreach($links as $key=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["wname"]); ?></td>
				<td><?php echo ($v["wurl"]); ?></td>
				<td><?php echo (date('y-m-d H:i',$v["time"])); ?></td>
				<td>
				<a href="<?php echo U(GROUP_NAME.'/Linksmanage/mylinkedit',array('id'=>$v['id']));?>">[修改]</a>
				<a href="<?php echo U(GROUP_NAME.'/Linksmanage/mylinkdelete',array('id'=>$v['id']));?>">[删除]</a>
				</td>
			</tr><?php endforeach; endif; ?>

			
		</tbody>
	</table>


</body>
</html>