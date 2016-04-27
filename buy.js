$(document).ready(function(){
	
	var submit = $("#submit");
	
	$("#policy").change(function(){
		submit.prop('disabled', !this.checked);
	})
	
})