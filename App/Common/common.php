<?php
/**
 * 格式化打印数组
 * @param unknown_type $array
 */

function p($array)
{
	dump($array,1,'<pre>',0);
}
/**
 * 发布内容表情替换
 * @param unknown_type $content
 */
function replace_pic($content)
{
	preg_match_all('/\[.*?\]/is',$content,$arr);
	
	if($arr[0])
	{
		$pic=F('pic','','./Data/');
		//p($pic);
		foreach ($arr[0] as $v)
		{
			foreach ($pic as $key=>$value)
			{
				if($v=='['.$value.']')
				{
					$content=str_replace($v,'<img src="'.__ROOT__.'/App/Modules/Index/Tpl/public/Images/comment/pic/'.$key.'.gif"/>',$content);
					break;
				}
				
			}
		}
	}
	return $content;
}




//防止双重转义
if (get_magic_quotes_gpc()) {
 function stripslashes_deep($value){
  $value = is_array($value) ?
  array_map('stripslashes_deep', $value) :
  stripslashes($value);
  return $value;
 }
 $_POST = array_map('stripslashes_deep', $_POST);
 $_GET = array_map('stripslashes_deep', $_GET);
 $_COOKIE = array_map('stripslashes_deep', $_COOKIE);
}


?>