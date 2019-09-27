<?php 

    //Define a winner variable that is null to start with
    $winner = null;

    //Create an array with three values: rock, paper, scissors.

    $moves = [
        'rock',
        'paper',
        'scissors',
    ];

    //Use the rand function to randomly choose a key: 0, 1, or 2.
    $rand_move = array_rand($moves, 2);

    //Use that to extract 'rock', 'paper', or 'scissors'.*/
    $playerA = $moves[$rand_move[0]];
    $playerB = $moves[$rand_move[1]];

    var_dump($playerA);
    var_dump($playerB);

/*Rock beats scissors, scissors beats paper, paper beats rock
    * If Rock & Paper, winner is Paper
    * If Rock & Scissors, winner is Rock
    * If Paper & Scissors, winner is Scissors*/


/*If they play the same move, it's a tie
    * Use boolean to see if Player A's choice matches Player B's choice.*/

?>