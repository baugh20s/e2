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
        return $this->app->view('gameDetails');
    }

}