@extends('templates.master')

@section('title')
    {{ $app->config('app.name') }}
@endsection

@section('content')

@if($app->errorsExist())
<ul class='error alert alert-danger'>
	@foreach($app->errors() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
@elseif($result)
<div class='alert alert-success'>
	{{ $result }}
</div>
@endif

	<h3>Rules</h3>
	<ul>
		<li>Players A and B "throw" one of the following moves: rock, paper, or scissors.</li>
		<li>Rock beats scissors, scissors beats paper, paper beats rock.</li>
		<li>If they play the same move, it's a tie.</li>
	</ul>

	<form method='POST' action='/save-game'>
	
	<h3>Play</h3>
	<select name='user_move' id='user_move'>
		<option value='' id='select'>Select One</option>
		<option value='rock' name='rock' id='rock'>Rock</option>
		<option value='paper' name='paper' id='paper'>Paper</option>
		<option value='scissors' name='scissors' id='scissors'>Scissors</option>
	</select>

	<button type='submit' class='btn btn-primary' role='button'>Play</button>

	</form>


@endsection