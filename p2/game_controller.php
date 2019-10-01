<?php 

// Define a winner variable that is null to start with.
    $winner = null;

// Create an array with three values: rock, paper, scissors.
    $moves = [
        'rock',
        'paper',
        'scissors',
    ];

// Use the rand function to randomly choose two keys: 0, 1, or 2.
    //$rand_moveA = array_rand($moves, 1);
    //$rand_moveB = array_rand($moves, 1);

// Use that to extract 'rock', 'paper', or 'scissors'.
    $playerA = $moves[rand(0,2)];
    $playerB = $moves[rand(0,2)];

// If they play the same move, it's a tie
// If Rock (0) & Paper (1), winner is Paper (1)
// If Rock (0) & Scissors (2), winner is Rock (0)
// If Paper (1) & Scissors (2), winner is Scissors (2)

    if ($playerA == $playerB) {
        $winner = 'The players have tied.';
    } elseif ($playerA == 'rock' AND $playerB == 'paper') {
        $winner = '$playerB.';
    } elseif ($playerA == 'rock' AND $playerB == 'scissors') {
        $winner = '$playerA.';
    } elseif ($playerA == 'paper' AND $playerB == 'rock') {
        $winner = '$playerA.';
    } elseif ($playerA == 'paper' AND $playerB == 'scissors') {
        $winner = '$playerB.';
    } elseif ($playerA == 'scissors' AND $playerB == 'rock') {
        $winner = '$playerB.';
    } elseif ($playerA == 'scissors' AND $playerB == 'paper') {
        $winner = '$playerA.';
    };

    var_dump($playerA);
    var_dump($playerB);
    var_dump($winner);
?>