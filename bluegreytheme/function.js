$(document).ready(function(){

	$('.control-left').click(function(){
		if ($('.featurecontainer-strip').css('margin-left') == "0px") {
		}
		else {
			$('.featurecontainer-strip').animate({'margin-left':'+=258px'});
		}
	});

	$('.control-right').click(function(){
		var count = $('.featurecontainer-strip').children().length;
		var count = 258 * (count - 1);
		var count = '-' + count + 'px';
		if ($('.featurecontainer-strip').css('margin-left') == count) {
		}
		else {
			$('.featurecontainer-strip').animate({'margin-left':'-=258px'});
		}
	});

	window.onresize = function(event) {
		resizesingle();
	}

	function resizesingle(){
		var vph = $('.featurecontainer').width();
		var vph = vph - 260;
		$(".featureitem-single-content").css({"width":vph+"px"});
	}

});