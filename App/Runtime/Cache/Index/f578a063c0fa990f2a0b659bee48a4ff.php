<?php if (!defined('THINK_PATH')) exit();?><dl>
				<dt>最发布发</dt>
				<?php if(is_array($new)): foreach($new as $key=>$v): ?><dd>
					<a href="<?php echo U('/'.$v['id']);?>"  ><?php echo ($v["title"]); ?></a>
					<span>(<?php echo ($v["click"]); ?>)</span>
				</dd><?php endforeach; endif; ?>
				
			</dl>