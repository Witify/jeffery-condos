<?php

require 'vendor/autoload.php';

session_start();

if($_SERVER['REQUEST_URI'] == '/') {
    if(isset($_SESSION['lang']))
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/' . $_SESSION['lang'] . '/home');
    else
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/en/home');
}

function loadView($language, $name) {
    $trans = new App\Translate\Translate($language);
    include_once($name . '.php'); // include view
}

$router = new App\Router\Router($_SERVER['REQUEST_URI']);

$router->get('/home', function($language) {
    loadView($language, 'home');
});

$router->post('/contact', function($language) {
    loadView($language, 'contactengine');
});

try {
    $router->run();
} catch(App\Router\RouterException $e) {
    if(isset($_SESSION['lang']))
        $language = $_SESSION['lang'];
    else
        $language = 'en';
    loadView($language, '404');
}