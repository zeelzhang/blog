<?php if (!defined('THINK_PATH')) exit();?>
		友情连接

		<?php if(is_array($links)): foreach($links as $key=>$v): ?><a href="<?php echo ($v["wurl"]); ?>" target="_blanks"><?php echo ($v["wname"]); ?></a><?php endforeach; endif; ?>