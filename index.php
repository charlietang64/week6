<?php
/*
 * Charlie Tang
 * 4/18/2023
 * 328/diner/index.php
 * Controller for diner project
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

// create an F3 (Fat-Free Framework) object
$F3 = Base::instance();

// Define a default route
$F3->route('GET /', function () {
    // Display a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

$F3->run();
