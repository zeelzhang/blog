/*
@�汾����: �汾����: 2012��4��11��
@����Ȩ����: 1024 intelligence ( http://www.1024i.com )
//Download by http://www.codefans.net
���ʹ�ñ��������, �����뱣������Ȩ������Ϣ.
����©�����������, ����ϵ Lou Barnes(iua1024@gmail.com)
*/
$(document).ready(function(){

	loadMore();
});	

$(window).scroll(function(){
	// ����������ײ�����100����ʱ�� ����������

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
					
					// �ҳ���ǰ�߶���С����, ��������ӵ�����
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