<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');


$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

$route['/scoreboard.php'] = array('controller' => 'ScoreboardController', 'uniqueName' => 'scoreboard.php');
$route['/scoreboard.php.html'] = array('controller' => 'ScoreboardController', 'uniqueName' => 'scoreboard.php');

$route['/anmelden'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/anmelden.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

