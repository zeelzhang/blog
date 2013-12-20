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
	

	<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
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
			<p>分享交流</p>
			
			<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><dl>
				<dt><?php echo ($v["name"]); ?><a href="<?php echo U('/c_'.$v[id]);?>">更多>></a></dt>
				<?php if(is_array($v["blog"])): foreach($v["blog"] as $key=>$value): ?><dd>
						<a href="<?php echo U('/'.$value[id]);?>" target="_blank"><?php echo ($value["title"]); ?></a>
						<span><?php echo (date('m/d',$value["time"])); ?></span>
					</dd><?php endforeach; endif; ?>
			</dl><?php endforeach; endif; ?>
			
			
		</div>
	

	<!--主体右侧-->
		<div class='main-right'>
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