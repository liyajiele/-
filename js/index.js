$(document).ready(function(){
//banner轮播
	function lunbo(){
		var bannerbox=$(".bannerbigbox");
		var imgs=$(".bannertop>ul>li");
		var wenzi=$(".circle li");
		var t1=setInterval(lunbo,2000);
		var num=0;
		var flag=true;
		function lunbo(){
			flag=false;
			num++;
			if(num==3){
				num=0;
			}
			imgs.animate({opacity:0},300);
			wenzi.removeClass("first");
			imgs.eq(num).animate({opacity:1},300,function(){
				flag=true;
			})
			wenzi.eq(num).addClass("first");
		}
		wenzi.mouseover(function(){
			if(flag&&($(this).index()!=num)){
				flag=false;
				imgs.animate({opacity:0},300);
				wenzi.removeClass("first");
				wenzi.eq($(this).index()).addClass("first");
				imgs.eq($(this).index()).animate({opacity:1},300,function(){
					flag=true;
				});
				num=$(this).index();
			}
			
		})
		bannerbox.mouseover(function(){
			clearInterval(t1);
		});
		bannerbox.mouseout(function(){
			t1=setInterval(lunbo,2000);
		})
	}
	lunbo();
	
	
//content移入事件
	function conmouseover(){
		var cons=$(".contentbigbox>ul>li");
		cons.mouseover(function(){
			$(this).removeClass().addClass("con"+($(this).index()+4)+"");
		})
		cons.mouseout(function(){
			$(this).removeClass().addClass("con"+($(this).index()+1)+"");
		})
	}
	conmouseover();
	
	
})
