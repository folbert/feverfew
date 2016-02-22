<?php

require 'vendor/autoload.php';

require_once('functions.php');

$router = new AltoRouter();

/**
 * Create your routes below
 */

$router->map('GET', '/', function () {

    require(__DIR__ . '/lib/blade.php');
    echo $blade->view()->make('index')->render();

});

$router->map('GET', '/page-2', function () {

    require(__DIR__ . '/lib/blade.php');
    echo $blade->view()->make('example-page.index')->render();

});

/**
 * Done creating routes
 */

$match = $router->match();

// call closure or throw 404 status
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
