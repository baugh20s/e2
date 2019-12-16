<?php
namespace App\Controllers;

class GameController extends Controller
{
    /**
     *
     */
    
     public function gameHistory()
    {
        $gameHistory = $this->app->db()->all('past_games');

        return $this->app->view('gameHistory', ['past_games' => $gameHistory]);
    }

    public function gameDetails()
    {
        // get the 'id' route paramter
        $id = $this->app->param('id');

        // load the game details based on id
        $game = $this->app->db()->findById('past_games', $id);

        // set parameters to values grabbed from db
        return $this->app->view('gameDetails', [
            'id' => $game['id'],
            'user_move' => $game['user_move'],
            'computer_move' => $game['computer_move'],
            'result' => $game['result'],
            'date_time' => $game['date_time']
        ]);
    }

}