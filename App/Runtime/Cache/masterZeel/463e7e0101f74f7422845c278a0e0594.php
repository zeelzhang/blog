<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>验证码配置</title>
	
	<script type='text/javascript' src='__ROOT__/Public/js/jquery-1.8.2.min.js'></script>
	<link href="__ROOT__/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="__ROOT__/Public/js/bootstrap.min.js"></script>
</head>
<body>
<form action="<?php echo U(GROUP_NAME.'/System/updataVerify');?>" method="POST">
<table class='table table-hover' style="width:900px;" align="center">
<tr>
	<th colspan="2"><h2><p class="text-info">验证码修改</p></h1></th>
</tr>
<tr>
	<td align="right">验证码长度</td>
	<td>
		<input type="text" name="VERIFY_LENGTH" value="<?php echo (C("verify_length")); ?>" />
	</td>

</tr>
<tr>
	<td align="right">验证码图片宽度</td>
	<td>
		<input type="text" name="VERIFY_WIDTH" value="<?php echo (C("VERIFY_WIDTH")); ?>" />
	</td>

</tr>

<tr>
	<td align="right">验证码图片高度</td>
	<td>
		<input type="text" name="VERIFY_HEIGHT" value="<?php echo (C("VERIFY_HEIGHT")); ?>" />
	</td>

</tr>

<tr>
	<td align="right">验证码背影颜色</td>
	<td>
		<input type="text" name="VERIFY_BGCOLOR" value="<?php echo (C("VERIFY_BGCOLOR")); ?>" />
	</td>

</tr>


<tr>
	<td align="right">验证码种子</td>
	<td>
		<input type="text" name="VERIFY_SEED" value="<?php echo (C("VERIFY_SEED")); ?>" />
	</td>

</tr>

<tr>
	<td align="right">验证码字体文件</td>
	<td>
		<input type="text" name="VERIFY_FONTFILE" value="<?php echo (C("VERIFY_FONTFILE")); ?>" />
	</td>

</tr>
<tr>
	<td align="right">验证码字体大小</td>
	<td>
		<input type="text" name="VERIFY_SIZE" value="<?php echo (C("VERIFY_SIZE")); ?>" />
	</td>

</tr>
<tr>
	<td align="right">验证码字体颜色(16进制色值)</td>
	<td>
		<input type="text" name="VERIFY_COLOR" value="<?php echo (C("VERIFY_COLOR")); ?>" />
	</td>

</tr>
<tr>
	<td align="right">SESSION识别名称</td>
	<td>
		<input type="text" name="VERIFY_NAME" value="<?php echo (C("VERIFY_NAME")); ?>" />
	</td>

</tr>
<tr>
	<td align="right">存储验证码到SESSION时使用函数</td>
	<td>
		<input type="text" name="VERIFY_FUNC" value="<?php echo (C("VERIFY_FUNC")); ?>" />
	</td>

</tr>

<tr>
	<td colspan="2" align="center">
		<input type="submit" value="保存修改" />
	</td>
</tr>
</table>
</form>
</body>
</html>