$(document).ready(function(){
	$('#noofchoice').change(function(){
		var nochoice = $('#noofchoice').val();
		var newChoiceDiv = '';
		for (var i = 1; i <= nochoice; i++) {
			newChoiceDiv += '<div id = "ChoiceDiv' + i +'">';
			newChoiceDiv += ('<label>Choice '+ i + ' : </label>' +'<input type="text" name="setchoice[]" id="choice_' + i + '" value="" class = "choice_text" required> Answer? <input type = "radio" value = "choice_' + i + '" name = "setanswer"></div>');
		};
		$("#choices").html(newChoiceDiv);
	});
});