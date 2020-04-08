<?php


class RulesController extends Controller
{
    protected $viewFileName = "rules";
    protected $loginRequired = true;


    public function run()
    {
        $this->view->title = "Rules";
        $this->view->username = $this->user->username;

    }

}
