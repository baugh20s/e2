@extends('templates.master')

@section('title')
    Previous Games
@endsection

@section('content')

<h2>Previous Games</h2>
<div class='table-container'>
<table class='table table-striped table-bordered'>
    <thead>
    <tr>
        <th>Game Number</th>
        <th>Date and Time</th>
    </tr>
    </thead>
    <tbody>
    @foreach($past_games as $past_game)
    <tr>
        <td>{{ $past_game['id'] }}</td>
        <td><a href='/game-details?id={{ $past_game["id"] }}'>{{ $past_game['date_time'] }}<a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>

@endsection