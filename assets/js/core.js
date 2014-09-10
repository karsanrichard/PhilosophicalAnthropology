var pos = 0, test, test_status, question,choice, correct = 0;
var question_data= '';
window.addEventListener("load", runQuestions, false);
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

function runQuestions()
{
	var obj;
	$.ajax({
        url: 'questions/public_questions',
        beforeSend: function(xhr) {
            xhr.overrideMimeType("text/plain; charset=x-user-defined");
        },
        success: function(data) {
        	console.log(data);
            obj = jQuery.parseJSON(data);
            console.log(obj);
            smile(obj);
        }
    });
}

function smile(data)
{
	console.log(data);
	question_data = data;
	test = _("test");
	if (pos >= question_data.length)
	{
		test.innerHTML = "<h2>You got " + correct + " of " + question_data.length + " questions correct";
		_("test_status").innerHTML = ("Test Completed");
		
		pos = 0;
		correct = 0;
		return false;
	}
	var choices = question_data[pos]['choices'];
	choices = choices.split(';');
	var noofchoices = choices.length;
	var formedchoice = '';
	var actualvalue = 0;
	for (var i = 0; i < noofchoices; i++) {
		actualvalue++;
		formedchoice += '<input type = "radio" name = answeredfreedom_'+ (pos+1) + ' value = "choice_'+actualvalue+'"><label>'+choices[i]+'</label><br/>';
	};
	_("test_status").innerHTML = "Question"+(pos+1)+" of " + question_data.length;
	question = question_data[pos].question;
	test.innerHTML = "<h3>"+question+"</h3>";
	test.innerHTML += formedchoice;
	test.innerHTML += '<button class = "btn btn-info" onclick = "checkanswer()">Submit Answers</button>';

	console.log(question);

}

function checkanswer()
{
	var choices = document.getElementsByName('answeredfreedom_'+(pos+1));
	for (var i = 0; i < choices.length; i++) {
		if (choices[i].checked) {
			choice = choices[i].value;
		}
	}

	if (choice == question_data[pos]['answer']) {correct++; console.log(correct);}
	pos++;
	runQuestions();
	// console.log(choice);
}
function _(x)
{
	return document.getElementById(x);
}
