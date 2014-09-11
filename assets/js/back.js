$(document).ready(function(){
	
});

function postError()
{
	var formData = $('#instruct').serializeArray();
	var URL = $('#instruct').attr('action');
	$.post(URL, formData, function(data, textStatus, jqXHR){

	}).fail(function(data, textStatus, error){});
	// alert(URL);
	// $.post("instructors/send_error");
}