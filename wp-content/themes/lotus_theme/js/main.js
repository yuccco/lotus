/*
---------------------------------------------------------
	SPナビ
---------------------------------------------------------
*/

//開ける
jQuery(function($) {
	$("#spNav_menu").click(function(){
		$("#spNavhead").fadeIn("fast");
	});
//閉じる
	$("#spNav_menu_op,#gNav a").click(function(){
		$("#spNavhead").fadeOut("fast");
	});
});

//開ける
jQuery(function($) {
	$(".spMenu_trigger").click(function(){
		$(this).prev("ul").fadeIn("fast");
	});
//閉じる
	$(".spMenu_nav a").click(function(){
		$(this).parent("li").parent("ul").fadeOut("fast");
	});
	$(".spMenu_op").click(function(){
		$(this).parent("ul").fadeOut("fast");
	});
});

//SP用アコーディオンナビ
//jQuery(function($) {
//	$(".spMenu_trigger").click(function(){
//		$(this).prev("ul").slideDown();
//	});
//});

//閉じる
//jQuery(function($) {
//	$(".spMenu_nav a").click(function(){
//		$(this).parent("li").parent("ul").slideUp();
//	});
//});
//jQuery(function($) {
//	$(".spMenu_op").click(function(){
//		$(this).parent("ul").slideUp();
//	});
//});

/*
---------------------------------------------------------
	ページスクロール
---------------------------------------------------------
*/
jQuery(function($) {
	$("[href^=#]").click(function(){
		var Hash = $(this.hash);
		var HashOffset = parseInt($(Hash).offset().top);
		$("html,body").animate({
			scrollTop: HashOffset
		}, 1000);
		return false;
	});
});

/*
---------------------------------------------------------
	slider
---------------------------------------------------------
*/
//$(window).load(function() {
jQuery(function($) {
	fr = new FilmRoll({
		container: '#film_roll',
		//height: 330
		animation: 400,
		//interval: 0,
		pager: false,
		resize: true,
		vertical_center : true,
		no_css: true,
		scroll: true,
		prev: '#film_roll_prev',
		next: '#film_roll_next'
	});
});
