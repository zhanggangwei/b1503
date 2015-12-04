
$().ready(function(){
	$(".nav_top .nav .dropdown").mouseover(function(){
		$(this).find(".f_nav_ul").css("display","block");
	});
	$(".nav_top .nav .dropdown").mouseout(function(){
		$(this).find(".f_nav_ul").css("display","none");
	});
	
	$(".goods_select .select ul li").mouseover(function(){
		$(this).find(".f_nav_ul").css("display","block");
	});
	$(".goods_select .select ul li").mouseout(function(){
		$(this).find(".f_nav_ul").css("display","none");
	});
	
	$(".goods_all").mouseover(function(){
		$(this).find(".f_nav_ul").css("display","block");
		
		$(".goods_all .f_nav_ul li").mouseover(function(){
			$(this).find(".f_nav_li").css("display","block");
		});
		$(".goods_all .f_nav_ul li").mouseout(function(){
			$(this).find(".f_nav_li").css("display","none");
		});
		
	});
	$(".goods_all").mouseout(function(){
		$(this).find(".f_nav_ul").css("display","none");
	});
});
