<?php 

// Define a winner variable that is null to start with.
    $winner = null;

// Create an array with three values: rock, paper, scissors.
    $moves = [
        'rock',
        'paper',
        'scissors',
    ];


// Use rand function to pic random number between 0 and 2 and assign to player A and player B.
    $playerA = $moves[rand(0,2)];
    $playerB = $moves[rand(0,2)];

/* If they play the same move, it's a tie
   If Rock & Paper, winner is Paper
   If Rock & Scissors, winner is Rock
   If Paper & Scissors, winner is Scissors */

    if ($playerA == $playerB) {
        $winner = 'nobody - the players have tied';
    } elseif ($playerA == 'rock' AND $playerB == 'paper') {
        $winner = 'Player B';
    } elseif ($playerA == 'rock' AND $playerB == 'scissors') {
        $winner = 'Player A';
    } elseif ($playerA == 'paper' AND $playerB == 'rock') {
        $winner = 'Player A';
    } elseif ($playerA == 'paper' AND $playerB == 'scissors') {
        $winner = 'Player B';
    } elseif ($playerA == 'scissors' AND $playerB == 'rock') {
        $winner = 'Player B';
    } elseif ($playerA == 'scissors' AND $playerB == 'paper') {
        $winner = 'Player A';
    };

?>