<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class IndexController extends Controller
{
	protected $viewFileName = "index"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "game";
		$this->view->username = $this->user->username;
        $this->checkForSaveScorePost();

	}

    private function checkForSaveScorePost()
    {
        if(isset($_POST['action']) && $_POST['action'] == 'saveScore')
        {
            $anz_zuege = $_POST['anz_zuege'];
            $gewonnen = $_POST['gewonnen'];
            $userid = $this->user->id;

            //now we need our Model to save the values
            ScoreboardModel::saveScore($userid, $anz_zuege, $gewonnen); //:: ist only working when we define a Method as static. That means one can use the method without instanciating an object

            $jsonResponse = new JSON();
            $jsonResponse->result = true; //this is important, as the frontend expects result true if everything was ok
            $jsonResponse->setMessage("Saved the values!"); //(optional)
            $jsonResponse->send();
        }
    }

}