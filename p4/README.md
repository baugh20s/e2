# Project 4
+ By Sarah Baughman
+ Production URL: <p4.baugh20s.me>

## Game Planning and Execution Notes

* The players, the user and the computer, "throw" one of the following moves: rock, paper, or scissors
    * Create an array with three values: rock, paper, scissors.
    * For the user's play:
        * retrieve the user's input from the dropdown menu
    * For the computer's play:
        * Use the rand function to randomly choose a key: 0, 1, or 2.
        * Use that to extract 'rock', 'paper', or 'scissors'.
* Rock beats scissors, scissors beats paper, paper beats rock
    * Logic details
        * If Rock & Paper, winner is Paper
        * If Rock & Scissors, winner is Rock
        * If Paper & Scissors, winner is Scissors
        * If they play the same move, it's a tie
        * If the user doesn't select anything, tell them to select a play.
    * Execution
        * Define array containing possible results
        * Set logic for determining result, using criteria described above
        * Use session super global to store input
* Routes, Controllers, Methods, and Views
    * Home page: /, AppController, index method, index view
    * Round history: /game-history, GameController, gameHistory
    * Round details: /game-details, GameController, gameDetails
    * Another route for save-game, AppController, saveGame method
* Database
    * Commands are set up for migration and seed
    * Game results are written do the database when user makes a move
    * User can view game details and game history
* Misc Notes
    * Two controllers: AppController and GameController
    * I wanted to experiment more with multiple controllers, but in this case I could have had everything in the same one
