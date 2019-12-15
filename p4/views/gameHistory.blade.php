@extends('templates.master')

@section('title')
    Previous Games
@endsection

@section('content')

    <h2>Previous Games</h2>

<ul>
    
    @foreach($past_games as $past_game)
        <li>{{ $past_game['user_move'] }}</li>
    @endforeach
</ul>

@endsection