$(document).ready(function(){
	$('#result-alert').hide();
	$('#un').click(function(){
		$("#upload_notes").modal('show');
	});
	$('#sendError').click(function(){
	        // console.log('button clicked');
	    var form = document.getElementById('instruct');
	    var r = document.getElementById('result');
	    console.log(r);
	    // alert(form);
	    form.onsubmit = function(event) {
	    event.preventDefault();

	    r.innerHTML = '<i class = "fa fa-spinner fa-spin"></i> Working...';

	    var data = $('#instruct :input').serializeArray();
	    // console.log(data);
	    $.post($('#instruct').attr('action'), data, function(info){
	    	$("#result").html(info);
	    });
	}
	});
});

function getMessage(id)
{
	console.log(id);
}


