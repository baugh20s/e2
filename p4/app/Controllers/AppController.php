<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {   
        $user_move = $this->app->old('user_move', null);
        $computer_move = $this->app->old('computer_move', null);
        $result = $this->app->old('result', null);
        $mostRecent = '';

        if($result) {
            $sql = 'SELECT MAX(id) AS id FROM past_games';
            $executed = $this->app->db()->run($sql);
            $mostRecent = $executed->fetchColumn();
        };
        
        return $this->app->view('index', [
            'user_move' => $user_move,
            'computer_move' => $computer_move,
            'result' => $result,
            'mostRecent' => $mostRecent,
            ]);
        
    }

    public function saveGame()
    {
        
        // create array with possible moves
        $moves = [
            'rock',
            'paper',
            'scissors',
        ];

        // create array of possible results
        $results = array (
            'UserWin' => 'Well played, you won this round.',
            'ComputerWin' => 'Nice try, but the computer won this round.',
            'Tie' => 'Good effort, you tied with the computer.',
        );
       
        // validation
        $this->app->validate([
            'user_move' => 'required',
            ]);

        // define array of moves and results
        $data = [
            'user_move' => $this->app->input('user_move'),
            'computer_move' => $moves[rand(0,2)],
        ];

        // assign to variables
        $user = $data['user_move'];
        $computer = $data['computer_move'];

        // Logic for determining result
        // Error is redefined as true, if there is an error
        if ($user == $computer) {
            $result = $results['Tie'];
        } elseif ($user == 'rock' AND $computer == 'paper') {
            $result = $results['ComputerWin'];
        } elseif ($user == 'rock' AND $computer == 'scissors') {
            $result = $results['UserWin'];
        } elseif ($user == 'paper' AND $computer == 'rock') {
            $result = $results['UserWin'];
        } elseif ($user == 'paper' AND $computer == 'scissors') {
            $result = $results['ComputerWin'];
        } elseif ($user == 'scissors' AND $computer == 'rock') {
            $result = $results['ComputerWin'];
        } elseif ($user == 'scissors' AND $computer == 'paper') {
            $result = $results['UserWin'];
        };

        // add result to data array
        $data['result'] = $result;

        // persist the data to the table
        $this->app->db()->insert('past_games', $data);

        // redirect
        $this->app->redirect('/', $data);

        
 
    }

    

}






