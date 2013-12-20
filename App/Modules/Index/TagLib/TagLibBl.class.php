<?php

import ('TagLib');
/**
 * 自定义标签库
 */
	class TagLibBl extends TagLib{
		protected $tags=array(
			'nav'=>array('attr'=>'limit,order','close'=>1),
			);

		public function _nav($attr,$content){
			$attr=$this->parseXmlAttr($attr);
			$str= <<<str
			<?php
			\$_nav_cate=M('cate')->order({$attr['order']})->select();
			import('Class.Category',APP_PATH);
			\$_nav_cate=Category::unlimitedForLayer(\$_nav_cate);
			foreach (\$_nav_cate as \$_nav_cate_v):
				extract(\$_nav_cate_v);

			\$url=U('/c_'.\$id);


			?>
str;
			$str.=$content;
			$str.='<?php endforeach; ?>';
			return $str;


			//这里的——\$url=U('/c_'.\$id);——为什么就能直接用$id呢，因为前面我们用extract(\$_nav_cate_v);这个函数将$_nav_cate_v.id的前半部分都省去了
		}
	}

?>