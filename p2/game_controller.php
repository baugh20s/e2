<?php 

// Define a winner variable that is null to start with.
    $winner = null;

// Create an array with three values: rock, paper, scissors.
    $moves = [
        'rock',
        'paper',
        'scissors',
    ];

// Use the rand function to randomly choose a key: 0, 1, or 2.
    $rand_move = array_rand($moves, 2);

// Use that to extract 'rock', 'paper', or 'scissors'.
    $playerA = $moves[$rand_move[0]];
    $playerB = $moves[$rand_move[1]];

// If they play the same move, it's a tie
// If Rock (0) & Paper (1), winner is Paper (1)
// If Rock (0) & Scissors (2), winner is Rock (0)
// If Paper (1) & Scissors (2), winner is Scissors (2)

    if ($playerA == $playerB) {
        $winner = 'The players have tied.';
    } elseif ($playerA == 0 AND $playerB == 1) {
        $winner = '$playerB.';
    } elseif ($playerA == 0 AND $playerB == 2) {
        $winner = '$playerA.';
    } elseif ($playerA == 1 AND $playerB == 0) {
        $winner = '$playerA.';
    } elseif ($playerA == 1 AND $playerB == 2) {
        $winner = '$playerB.';
    } elseif ($playerA == 2 AND $playerB == 0) {
        $winner = '$playerB.';
    } elseif ($playerA == 2 AND $playerB == 1) {
        $winner = '$playerA.';
    };

?>