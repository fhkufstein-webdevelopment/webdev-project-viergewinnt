<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');


$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

$route['/scoreboard'] = array('controller' => 'ScoreboardController', 'uniqueName' => 'scoreboard');
$route['/scoreboard.html'] = array('controller' => 'ScoreboardController', 'uniqueName' => 'scoreboard');

$route['/rules'] = array('controller' => 'RulesController', 'uniqueName' => 'rules');
$route['/rules.html'] = array('controller' => 'RulesController', 'uniqueName' => 'rules');

$route['/anmelden'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/anmelden.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

