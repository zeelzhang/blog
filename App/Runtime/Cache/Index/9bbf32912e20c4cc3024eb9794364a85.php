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
	



<link rel="stylesheet" href="__PUBLIC__/Css/comment.css" />
<link rel="stylesheet" href="__PUBLIC__/Css/show.css" />
<link rel="stylesheet" href="__ROOT__/Data/Ueditor/third-party/SyntaxHighlighter/shCoreDefault.css">
<script type="text/javascript" src="__PUBLIC__/Js/comment.js"></script>
<script type="text/javascript" src="__ROOT__/Data/Ueditor/third-party/SyntaxHighlighter/shCore.js"></script>
<script type="text/javascript">
	SyntaxHighlighter.all();
	var handleurl='<?php echo U("Index/Show/commenthandle",'','');?>';
</script>
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
			<div class='location'>
				<a href="<?php echo U('/');?>">首页</a>>
				<?php $last=count($parent)-1; ?>
				<?php if(is_array($parent)): foreach($parent as $key=>$v): ?><a href="<?php echo U('/c_'.$v['id']);?>"><?php echo ($v["name"]); ?></a>
				<?php if($key != $last): ?>><?php endif; endforeach; endif; ?>
			</div>
			<div class="title">
				<p><?php echo ($blog["title"]); ?></p>
				<div>
					<span class='fl'>发布于：<?php echo (date('Y月m月d日',$blog["time"])); ?></span>
					<span class='fr'>已被阅读<script type="text/javascript" src="<?php echo U(GROUP_NAME.'/Show/clickNum',array('id'=>$blog["id"]));?>"></script>次</span>
				</div>
			</div>
			<div class='content' style='word-break:break-all'>
				<?php echo ($blog["content"]); ?>
			</div>
		</div>
		
	<!--主体右侧-->
		<!--主体右侧-->
		<div class='main-right'>
		<?php echo W('Hot');?>
			
		<?php echo W('New',array('limit'=>5));?>

		

		</div>

		<div class='main-left' style="margin-top: 20px;">
			<div class="location">
				<p>评论墙</p>
			</div>
			<div id='main'>
				
				<?php if(is_array($comment)): foreach($comment as $key=>$v): ?><dl class='paper a<?php echo mt_rand(1,5);?>'>
						<dt>
							<span class='username'><?php echo ($v["user"]); ?></span>
							<span class='num'>No.<?php echo ($v["id"]); ?></span>
						</dt>
						<dd class='content'><?php echo (replace_pic($v["comment"])); ?></dd>
						<dd class='bottom'>
							<span class='time'><?php echo (date('y-M-d H:I',$v["time"])); ?></span>
							<a href="" class='close'></a>
						</dd>
					</dl><?php endforeach; endif; ?>
			</div>
			<div>
				<span id='send'>我有话说</span>
			</div>

			<div id='send-form'>
				<p class='title'><span>尽情宣泄吧</span><a href="" id='close'></a></p>
				<form action="" name='wish'>
					<p>
						<label for="username">昵称：</label>
						<input type="text" name='username' id='username'/>
					</p>
					<p>
						<label for="content">内容：(您还可以输入&nbsp;<span id='font-num'>255</span>&nbsp;个字)</label>
						<textarea name="content" id='content'></textarea>
						<div id='phiz'>
							<img src="__PUBLIC__/Images/comment/pic/zhuakuang.gif" alt="抓狂" />
							<img src="__PUBLIC__/Images/comment/pic/baobao.gif" alt="抱抱" />
							<img src="__PUBLIC__/Images/comment/pic/haixiu.gif" alt="害羞" />
							<img src="__PUBLIC__/Images/comment/pic/ku.gif" alt="酷" />
							<img src="__PUBLIC__/Images/comment/pic/xixi.gif" alt="嘻嘻" />
							<img src="__PUBLIC__/Images/comment/pic/taikaixin.gif" alt="太开心" />
							<img src="__PUBLIC__/Images/comment/pic/touxiao.gif" alt="偷笑" />
							<img src="__PUBLIC__/Images/comment/pic/qian.gif" alt="钱" />
							<img src="__PUBLIC__/Images/comment/pic/huaxin.gif" alt="花心" />
							<img src="__PUBLIC__/Images/comment/pic/jiyan.gif" alt="挤眼" />
						</div>
					</p>
					<input type="hidden" name="bid" id="bid" value="<?php echo ($blog["id"]); ?>">
					<span id='send-btn'></span>
				</form>
			</div>

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