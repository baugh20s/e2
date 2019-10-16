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
	
	<?php // purposefully left the menu to reset when a play is submitted since it's printed in the results and they can play again.?>
	<select name='userMove'>
		<option value='select' id='select'>Select One</option>
		<option value='rock' id='rock'>Rock</option>
		<option value='paper' id='paper'>Paper</option>
		<option value='scissors' id='scissors'>Scissors</option>
	</select>

	<button type='submit'>Play</button>

	</form>

	<?php if($showResults) {?>
	
	<h3>Results</h3>

	<?php 	if($_SESSION['error']) {?>
	
	<p>
		<?php echo $_SESSION['error']; ?>.
	</p>

	<?php 	} else { ?>

	<p>
		You played <?php echo $_SESSION['userMove']; ?>.
		The computer played <?php echo $_SESSION['computerMove']; ?>.
		<?php echo $_SESSION['results']; ?>.
	</p>
	<?php 	} ?>

	<?php } ?>


</body>
</html>
