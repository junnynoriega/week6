<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// start a session
session_start();

// Require the autoload file
require_once('vendor/autoload.php');

// create an instance of the Base class
$f3 = Base::instance();
// Java equivalent -> Base f3 = new Base();

// Define a default route (328/week6)
$f3->route('GET /', function () {
      $view = new Template();
      echo $view->render('views/info.html.html');
});

// Run Fat-Free
$f3->run();