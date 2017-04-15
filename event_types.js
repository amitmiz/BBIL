$(document).ready(function(){
	

	

	
})
var currentType;


	function openGallery(url,target) {
			$("#gallery").load("event_types_gallery.php?type=" +url);
			$("#gallery").addClass('galleryShown').fadeIn();
			$("body").css("overflow","hidden");
			 if (currentType) {
				 $(currentType).removeClass("selected");
			 }
			 currentType = target;
			 $(currentType).addClass("selected");
	}
	
	function closeGallery() {
		$("#gallery").removeClass('galleryShown').fadeOut();
		$("body").css("overflow","auto");
	}