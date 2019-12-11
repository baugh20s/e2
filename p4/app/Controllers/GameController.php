<?php
namespace App\Controllers;

class GameController extends Controller
{
    /**
     *
     */
    
     public function gameHistory()
    {
        return $this->app->view('gameHistory');
    }

    public function gameDetails()
    {
        return $this->app->view('gameDetails');
    }

}