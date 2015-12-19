$(function() {
	$("img").on('dragstart', function (e) {e.preventDefault();});

	var unslider = $('#banner').unslider({
		speed: 500,               //  The speed to animate each slide (in milliseconds)
		delay: 3000,              //  The delay between slide animations (in milliseconds)
		complete: function() {},  //  A function that gets called after every slide animation
		keys: true,               //  Enable keyboard (left, right) arrow shortcuts
		dots: true,               //  Display dot navigation
		pause: true,              //  pause on hover
		fluid: true               //  Support responsive design. May break non-responsive designs
	});

	$('.unslider-arrow').click(function() {
		var fn = this.className.split(' ')[1];

		unslider.data('unslider')[fn]();

		return false;
	});

	$("#banner").swipe( {
		swipe:function(event, direction) {
			if(direction == "right"){
				unslider.data('unslider').prev();
			}else if(direction == "left"){
				unslider.data('unslider').next();
			}
		}, threshold:0, allowPageScroll:"auto"
	});

	// Search box
	$("#wrapper #container header #search #searchicon").click(function(){
		if($(this).parent().css("width") == "30px"){
			$(this).parent().animate({
				width: "180px"
			}, 500 );
		}else if($(this).parent().css("width") == "180px"){
			$(this).parent().animate({
				width: "30px"
			}, 500 );
		}
	});

		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-60166861-1', 'auto');
		ga('send', 'pageview');
});