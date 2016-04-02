$(document).ready(function () {
	var stick = 80;
	var nav = $('#navbar');
	var handler = function () {
		var stop = Math.round($(window).scrollTop());
		if (stop > stick) {
			nav.addClass('past');
		} else {
			nav.removeClass('past');
		}
	};

	// on scroll, 
	$(window).on('scroll', handler);

	$("#navToggle").click(function () {
		$("#navbarList").slideToggle();
		$(".toggleLine").toggleClass("linesClosed");
	});
});