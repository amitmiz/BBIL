$(document).ready(function(){
	
	var location = $("#location");
	
	$("#alternativeLocation").change(function(){
		if (this.checked) {
			location.prop("disabled",false);
		} else {
			location.prop("disabled",true);
		}
	})
	
})