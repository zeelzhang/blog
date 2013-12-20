<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<link rel="stylesheet" href="__ROOT__/App/public/css/bootstrap.min.css" />
	<script type="text/JavaScript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='__PUBLIC__/Js/common.js'></script>
	<script type="text/JavaScript" src='__ROOT__/App/public/js/bootstrap.min.js'></script>
	

<link rel="stylesheet" href="__PUBLIC__/Css/list.css" />
<script type="text/javascript" src="__PUBLIC__/Js/navi.js">
</script>
	</head>
<body>

<!--头顶部-->
	<div class='top-list-wrap'>
		<div  id="menu" style="top: 0px; position: fixed;" class="docked">
			<a href="">首页</a>
		<?php echo W('MyLinks');?>
		<?php echo W('MyDemo');?>
		</div>
	</div>

	<!-- logo部分 -->
	<div class='top-search-wrap'>
		<div class='top-search'>
			<a href="http://bbs.houdunwang.com" target='_blank' class='logo'>
				<img src="__PUBLIC__/Images/logo.png"/>
			</a>
				<img src="__PUBLIC__/Images/header.png" style="height: 80px;" />
			
			<div class='search-wrap'>
				<form action="<?php echo U(GROUP_NAME.'/Index/searchhandle');?>" method='post'>
					<input type="text" name='keyword' class='search-content'/>
					
				</form>
			</div>
		</div>
	</div>



	<div class='top-nav-wrap'>
		<ul class='nav-lv1'>
			<li class='nav-lv1-li'>
				<a href="__GROUP__" class='top-cate'>博客首页</a>
			</li>
		
<!-- 使用自定义标签库来自定义一个nav标签 -->
						<?php
 $_nav_cate=M('cate')->order(sort)->select(); import('Class.Category',APP_PATH); $_nav_cate=Category::unlimitedForLayer($_nav_cate); foreach ($_nav_cate as $_nav_cate_v): extract($_nav_cate_v); $url=U('/c_'.$id); ?><li class='nav-lv1-li'>
					<a href="<?php echo ($url); ?>" class='top-cate'><?php echo ($name); ?></a>
					<ul>
						<?php if(is_array($child)): foreach($child as $key=>$v): ?><li><a href="<?php echo U('/c_'.$v['id']);?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</li><?php endforeach; ?>

			
		</ul>
	</div>


<!-- 	回到顶部 -->
<p id="back-to-top" style="display: block;"><a href="#top" data-toggle="tooltip" title="回到顶部"><span></span></a></p>
<!--主体-->
	<div class='main'>
		<div class='main-left'>
		<?php if(is_array($blog)): foreach($blog as $key=>$v): ?><dl>
				<dt><?php echo ($v["name"]); ?></dt>
				<dd class='channel'><?php echo ($v["title"]); ?></dd>
				<dd class='info'>
					<span class='time'>发布于：<?php echo (date('Y年m月d日 H:i:s',$v["time"])); ?></span>
					<span class='click'>点击：<?php echo ($v["click"]); ?></span>
				</dd>
				<dd class='content'><?php echo ($v["summary"]); ?></dd>
				<dd class='read'>
					<a href="<?php echo U('/'.$v['id']);?>" target="_blank">阅读全文>></a>
				</dd>
			</dl><?php endforeach; endif; ?>
			<p><?php echo ($page); ?></p>
		</div>
	<!--主体右侧-->
	<!--列表右侧-->
		<div class='main-right'>
		<dl>
				
				<?php if(is_array($secondcate)): foreach($secondcate as $key=>$v): ?><dt>
					<a href="<?php echo U('/c_'.$v['id']);?>"><?php echo ($v["html"]); echo ($v["name"]); ?></a>
				</dt><?php endforeach; endif; ?>	
		</dl>
		<?php echo W('Hot');?>
			
		<?php echo W('New',array('limit'=>5));?>

		
		
	

		</div>
	</div>
<!--底部-->
		<div class='bottom'>

	<div class='top-list-wrap'>
		<div  id="bottommenu" >
		<?php echo W('Links');?>
		</div>
	</div>

		<div>
			
			
		</div>
	</div>
</body>
</html>