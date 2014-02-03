$(document).ready(function(){
	//modalWindow();
	startEasing();
	//createTooltip();
	mobileMenu();
});

function mobileMenu() {
	$('span.mobile-button').click(function() {
		$('nav#navbar ul').slideToggle('fast');
	$('nav#navbar ul li').click(function(){
		$('nav#navbar ul').slideUp('fast');
	});
	});
}

//function modalWindow() {
	//if($('body').hasClass('front')) {
  		//$('div#openModal').addClass('open');
	//} else {
		//$('div#openModal').hide();	
	//}
	
	//$('a.close-box').click(function() {
		//$('div#openModal').removeClass('open').addClass('close');	
	//});
//}

function startEasing() {

	if($(window).width() <= 760){

	$('div.sun').css({'visibility':'visible', 'opacity':'1', 'position':'relative'});
	
	}else{	

	    $('div.sun').waypoint(function(event, direction) {

		   $('div.sun').css({'visibility':'visible', 'bottom': '130px'}).stop().animate({'opacity':'1', 'bottom':'30px'}, 5000, 'easeOutExpo');

		}, {
		   offset: '90%',
		   triggerOnce: true
		});
	}
}

//function createTooltip() {
	//if($(window).width() > 760){
		//$('body.front div#block-views-signposts-block_1 div.views-row-1 a').addClass('tt').append('<span class="tt">This is a signpost</span>').wrap('<ul class="tt-wrapper"><li></li></ul>');
	//}
//}