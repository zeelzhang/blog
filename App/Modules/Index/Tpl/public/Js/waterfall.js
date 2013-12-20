/*
@版本日期: 版本日期: 2012年4月11日
@著作权所有: 1024 intelligence ( http://www.1024i.com )
//Download by http://www.codefans.net
获得使用本类库的许可, 您必须保留著作权声明信息.
报告漏洞，意见或建议, 请联系 Lou Barnes(iua1024@gmail.com)
*/
$(document).ready(function(){

	loadMore();
});	

$(window).scroll(function(){
	// 当滚动到最底部以上100像素时， 加载新内容

	if ($(document).height() - $(this).scrollTop() - $(this).height()<100){
		loadMore();
	}
});


function loadMore()
{
	$.ajax({
		url : '/Blog/Index/Water/load',
		dataType : 'json',
		success : function(json)
		{
			if(typeof json == 'object')
			{
				var oProduct, $row, iHeight, iTempHeight;
				for(var i=0, l=json.length; i<l; i++)
				{
					oProduct = json[i];
					
					// 找出当前高度最小的列, 新内容添加到该列
					iHeight = -1;
					$('#stage li').each(function(){
						iTempHeight = Number( $(this).height() );
						if(iHeight==-1 || iHeight>iTempHeight)
						{
							iHeight = iTempHeight;
							$row = $(this);
						}
					});
					$item = $('<div><img src="'+oProduct.image+'" border="0" ><br />'+oProduct.title+'</div>').hide();

			

					$row.append($item);
					$item.fadeIn();
				}
			}
		}
	});
}