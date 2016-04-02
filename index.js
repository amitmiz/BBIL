$(document).ready(function () {
	var video = $("video").get(0);
	$(".play").click(function () {
		video.play();
		$(this).css("display", "none");
		$(".pause").css("display", "inline-block");
		$("#videoOverlay").removeClass("pause");
	});
	$(".pause").click(function () {
		video.pause();
		$(this).css("display", "none");
		$(".play").css("display", "inline-block");
		$("#videoOverlay").addClass("pause");
	});
	$(".mute").click(function () {
		video.muted = true;
		$(this).css("display", "none");
		$(".unmute").css("display", "inline-block");
	});
	$(".unmute").click(function () {
		video.muted = false;
		$(this).css("display", "none");
		$(".mute").css("display", "inline-block");
	});

	// get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
	var amountScrolled = 300;
	var backToTop = $('a.back-to-top');
	var handler = function () {
		if ($(window).scrollTop() > amountScrolled) {
			backToTop.fadeIn('slow');
		} else {
			backToTop.fadeOut('slow');
		}
	};

	// on scroll, 
	$(window).on('scroll', handler);

	$('a.back-to-top').click(function (event) {
		$('html, body').animate({
			scrollTop: 0
		}, 1000);

		event.preventDefault();
	});

});