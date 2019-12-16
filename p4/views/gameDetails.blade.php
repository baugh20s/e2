@extends('templates.master')

@section('title')
    Game Details
@endsection

@section('content')

<h2>Game Details</h2>
<div class='table-container'>
<table class='table table-striped table-bordered'>
    <tr>
        <th>Game Number</th><td>{{ $id }}</td>
    </tr>
    <tr>
        <th>User Move</th><td>{{ $user_move }}</td>
    </tr>
    <tr>
        <th>Computer Move</th><td>{{ $computer_move }}</td>
    </tr>
    <tr>
        <th>Result</th><td>{{ $result }}</td>
    </tr>
    <tr>
        <th>Date and Time</th><td>{{ $date_time }}</td>
    </tr>
</table>
</div>

        
@endsection