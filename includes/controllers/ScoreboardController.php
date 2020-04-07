<?php

class ScoreboardController extends Controller
{
    protected $viewFileName = "scoreboard";
    protected $loginRequired = true;


    public function run()
    {
        $this->view->title = "Scoreboard";
        $this->view->username = $this->user->username;
        $this->view->scores = ScoreboardModel::getScoreBoard();
    }

}