<?php require 'index_controller.php'; ?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Project 3</title>
	<meta charset='utf-8'>
</head>
<body>	
	<h1>Rock, Paper, Scissors!</h1>
	<h3>Rules</h3>
	<ul>
		<li>Players A and B "throw" one of the following moves: rock, paper, or scissors.</li>
		<li>Rock beats scissors, scissors beats paper, paper beats rock.</li>
		<li>If they play the same move, it's a tie.</li>
	</ul>

	<form method='GET' action='process.php'>
	
	<select name="move">
		<option value='rock' id='rock'>Rock</option>
		<option value='paper' id='paper'>Paper</option>
		<option value='scissors' id='scissors'>Scissors</option>
	</select>

	<button type='submit'>Play</button>

	</form>


	<!--<h3>Example Game</h3>
	<p>
		You played <?php //echo $user; ?>.
		The computer played <?php //echo $computer; ?>.
		The winner is <?php //echo $winner; ?>.
	</p>-->

</body>
</html>
