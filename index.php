<?php

declare(strict_types=1);

session_start();

// REQUIRE
require "./views/header_view.php";

$url = parse_url($_SERVER["REQUEST_URI"]);
$path = $url["path"] ?? "/";

switch($path){
    // HOME PAGE
    case "/php/quizz/":
        break;
    
    // ALL THE QUIZZES
    case "/php/quizz/quizzes":
        require "./views/quizzes_view.php";
        break;

    // CREATE QUIZ
    case "/php/quizz/create-quiz":
        require "./views/create_quiz_view.php";
        break;

    // NOT FOUND
    default:
        break;
}

// Footer
// require "./views/quizzes_view.php";
require "./views/footer_view.php";