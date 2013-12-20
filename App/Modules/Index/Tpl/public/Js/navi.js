 (function () {
      	//作者不希望用ie访问该站点
        if (/Microsoft/.test(navigator.appName)) { return }

        window.onload = function () {
          var headers = document.querySelectorAll('#docs h2, #guide h1');
          var menu = document.getElementById('menu');
          var init = menu.offsetTop;
          var docked;

          /*for (var i = 0; i < headers.length; i++) {
            headers[i].id = '-' + headers[i].innerHTML.toLowerCase().replace(/ /g, '-');
          }*/

          window.onscroll = function () {
            if (!docked && (menu.offsetTop - scrollTop() < 0)) {
              menu.style.top = 0;
              menu.style.position = 'fixed';
              menu.className = 'docked';
              docked = true;
            } else if (docked && scrollTop() <= init) {
              menu.style.position = 'absolute';
              menu.style.top = init + 'px';
              menu.className = menu.className.replace('docked', '');
              docked = false;
            }
          };


          (function () {
            var link     = document.getElementById('guide-link'),
                menu     = document.getElementById('menu'),
                dropdown = document.getElementById('dropdown');

            link.onmouseover = function () {
              link.className = 'dark-red';
              dropdown.style.display = 'block';
            };
            link.onmouseout = function (e) {
              if (e.relatedTarget === dropdown) { return }
              link.className = link.className.replace('dark-red', '');
              hide ();
            };
       

            function hide() { dropdown.style.display = 'none' }
          })();
        };

        function scrollTop() {
          return document.body.scrollTop || document.documentElement.scrollTop;
        }
      })
();


$(document).ready(function(){   
  
//首先将#back-to-top隐藏   
  
 $("#back-to-top").hide();   
  
//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失   
  
$(function () {   
$(window).scroll(function(){   
if ($(window).scrollTop()>100){   
$("#back-to-top").fadeIn(500);
}   
else  
{   
$("#back-to-top").fadeOut(500);
}   
});   
  
//当点击跳转链接后，回到页面顶部位置   
  
$("#back-to-top").click(function(){   
$("body,html").animate({scrollTop:0},300);  
return false;   
});   
});   
});  
