<?php

session_start();

// Create an array with three values: rock, paper, scissors.
$moves = [
    'rock',
    'paper',
    'scissors',
];

// Define a user variable as the user's input.
$user = $_GET['userMove'];

// Define a computer variable using the rand function.
$computer = $moves[rand(0,2)];

// Define an array containing variables for the possible results
$results = array(
    'UserWin' => 'Well played, you won this round',
    'ComputerWin' => 'Nice try, but the computer won this round',
    'Tie' => 'Good effort, you tied with computer',
    'noSelect' => 'Select a move in order to play',
    'uknown' => 'Oops, something went wrong',
);

// Define error variable as false to start
$error = false;

// Logic for determining result
// Error is redefined as true, if there is an error
if ($user == 'select') {
    $result = $results['noSelect'];
    $error = true;
} elseif ($user == $computer) {
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
} else {
    $result = $results['unknown'];
    $error = true;
};

// save values for the session
$_SESSION['userMove'] = $user;
$_SESSION['computerMove'] = $computer;
$_SESSION['results'] = $result;
$_SESSION['error'] = $error;

header('Location: index.php');