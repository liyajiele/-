$(document).ready(function(){
//nav移入
	function navmouseover(){
		var nav=$(".topnavright1>a");
		nav.mouseover(function(){
			$(".topnavright1>a>li").eq($(this).index()).removeClass().addClass("navn"+($(this).index()+1)+"")
		})
		nav.mouseout(function(){
			$(".topnavright1>a>li").eq($(this).index()).removeClass().addClass("nav"+($(this).index()+1)+"")
		})
	}
	navmouseover();
	
})
