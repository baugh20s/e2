# Project 2
+ By Sarah Baughman
+ Production URL: <p2.baugh20s.me>

## Game Planning

* Define a winner variable that is null to start with
* Players A and B "throw" one of the following moves: rock, paper, or scissors
    * Create an array with three values: rock, paper, scissors.
    * Use the rand function to randomly choose a key: 0, 1, or 2.
    * Use that to extract 'rock', 'paper', or 'scissors'.
* Rock beats scissors, scissors beats paper, paper beats rock
    * If Rock & Paper, winner is Paper
    * If Rock & Scissors, winner is Rock
    * If Paper & Scissors, winner is Scissors
* If they play the same move, it's a tie
    * Use boolean to see if Player A's choice matches Player B's choice.

