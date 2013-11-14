$(document).ready(function(){
	fixheights();
        
        window.onresize = function(event) {
		fixheights();
	}

	function fixheights() {
                $('.sidemenubar').css('height','auto');
                $('#mainarea').css('height','auto');
		var leftheight = $('.sidemenubar').height();
		var rightheight = $('#mainarea').height();
                var rightheight = rightheight + 60;
                alert(leftheight + ':' + rightheight);
		if (leftheight > rightheight) {
			leftheight = leftheight - (3/100) * leftheight;
			$('#mainarea').css('height',leftheight);
		}
		else {
			$('.sidemenubar').css('height',rightheight);
		}
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

        $(".social-tab-single").click(function(){
             var tab = $(this).attr("class").split(" ").slice(-1);
             $(".social-tab").css("z-index",1);
             $(this).parent().parent().find(".social-tab."+tab).css("z-index",1000);
        });
});