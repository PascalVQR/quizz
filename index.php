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
    
    // NOT FOUND
    default:
        break;
}

// Footer
require "./views/footer_view.php";