<?php

session_start();

if(isset($_SESSION['results'])) {
    $result = $_SESSION['results'];
    $showResults = true;
} else {
    $showResults = false;
}


