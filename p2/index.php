<?php require 'game_controller.php'; ?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Project 2</title>
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
	<h3>Example Game</h3>
	<p>
		Player A plays: <?php echo $playerA; ?>.
		Player B plays: <?php echo $playerB; ?>.

		The result is: <?php echo $winner; ?>.
	</p>

</body>
</html>
