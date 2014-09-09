<!DOCTYPE html>
<html>
	<head>
		<title>HUMAN SEXUALITY AND FREEDON</title>
	</head>
	<body>
		<h2>Set Questions</h2>
		<h4>Choose a category that you would like to set the questions:</h4>

		<form method = "POST" action = "add_questions">
			<select name = "setcategory" required>
				<option value="">Select a Category</option>
				<option value="freedom">Human Freedom</option>
				<option value="sexuality">Human Sexuality</option>
			</select>
			<label for = "question">Question: </label>
			<input type = "text" name = "setquestion" placeholder = "Enter the question here" required/>
			<label for = "choices">No of choices: </label>
			<input type = "number" name = "choices" id = "noofchoice" required>
			<div id = "choices"></div>
			<label for = "setanswer">Suggested answer</label>
			<button type = "submit" name = "savequestion">Add Question</button>
		</form>
		<script type="text/javascript" src = "<?php echo base_url() . 'assets/js/jquery.js'?>"></script>
		<script type="text/javascript" src = "<?php echo base_url() . 'assets/js/core.js'?>"></script>
	</body>
</html>