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

        $('.single-service h2').click(function(){
           if ($(this).parent().find('.services-information').css('display') == 'none') {
             $(this).parent().find('.services-information').fadeIn(500);
           }
           else {
              $(this).parent().find('.services-information').fadeOut(500); 
           }
        });

        $('.image-gallery-left').click(function(){
                $('.image-gallery-wrapper').animate({'margin-left':'+=170px'},300);
        });

        $('.image-gallery-right').click(function(){
                $('.image-gallery-wrapper').animate({'margin-left':'-=170px'},300);
        });

        $('.portfolio-image-container img').click(function(){
             var source = $(this).attr('src');
             $(this).parent().parent().parent().parent().children('img').attr('src',source);
        });
});