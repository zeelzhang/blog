<?php if (!defined('THINK_PATH')) exit();?><div class="dropdown" style="float:right;margin-right: 80px;">
                <a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#">Demo<b class="caret"></b></a>
                <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">

                <?php if(is_array($mydemo)): foreach($mydemo as $key=>$v): ?><li role="presentation">
                  	<a role="menuitem" tabindex="-1" href="<?php echo ($v["demourl"]); ?>" style="display: block;" target="_blanks"><?php echo ($v["demoname"]); ?></a>
                  </li><?php endforeach; endif; ?>
                </ul>
</div>