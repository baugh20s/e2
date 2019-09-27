<!doctype html>
<html lang='en'>
<head>
	<title>Project 2</title>
	<meta charset='utf-8'>
</head>
<body>
	<h1>Rock, Paper, Scissors!</h1>
	<p>ADD INSTRUCTIONS</p>
	
	<?php

		//1 - set move variables
		$moves = [
			'rock',
			'paper',
			'scissors',
		];

		//2 - set random function for players' moves
		$rand_move = array_rand($moves, 1);

		//3 - set win/loss/tie


	?>
	<p>
		Player A plays: <?php echo $rand_move; ?>.
		Player B plays: <?php echo $rand_move; ?>.

		The result is: 
	</p>

</body>
</html>
