$(document).ready(function(){
	var menufix = $('#menu-soho-menu').children();
	var menufixlength = menufix.length + 1;
	for (var i=1;i<menufixlength;i++)
	{
		$('#menu-soho-menu > li:nth-child('+i+')').children('a').append('<span class="special-bar item-'+i+'"></span>');
		$('#menu-soho-menu > li:nth-child('+i+')').addClass('menu-item-piece-'+i);
	}

	$(function () {
		setInterval(
			function () {
				$('.slider-slides').find('li:last').animate({
					"opacity":  '0'
				}, 300, function () {
					$('.slider-slides li:first').before($('.slider-slides li:last'));
					$('.slider-slides li').css('opacity','1');        
			});
			// Set how long between changing slides
		},8000  
		);
	});

	$('#menu-soho-menu > li').hover(function(){
		$('.sub-menu').css('display','none');
		$(this).find('.special-bar').animate({'width':'200px'},300,function(){
			$(this).parent().parent().find('.sub-menu').css('display','block');
		});
		
	},
	function(){
		$(this).find('.sub-menu').css('display','none');
		$(this).find('.special-bar').animate({'width':'30px'},300);
	});
});