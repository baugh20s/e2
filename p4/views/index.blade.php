@extends('templates.master')

@section('title')
    {{ $app->config('app.name') }}
@endsection

@section('content')
    
<h1>Rock, Paper, Scissors!</h1>
	<h3>Rules</h3>
	<ul>
		<li>Players A and B "throw" one of the following moves: rock, paper, or scissors.</li>
		<li>Rock beats scissors, scissors beats paper, paper beats rock.</li>
		<li>If they play the same move, it's a tie.</li>
	</ul>

	<form method='POST' action='process.php'>
	
	<select name='userMove'>
		<option value='select' id='select'>Select One</option>
		<option value='rock' id='rock'>Rock</option>
		<option value='paper' id='paper'>Paper</option>
		<option value='scissors' id='scissors'>Scissors</option>
	</select>

	<button type='submit'>Play</button>

	</form>

	
	<h3>Results</h3>

    <?php //if there are errors, display them, otherwise display the results ?>

	<p>
		You played X.
		The computer played Y.
		__ won or there was a tie.
	</p>


@endsection