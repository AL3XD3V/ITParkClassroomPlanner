<?php

include './src/controllers/controller.php';
include './src/models/model_users.php';

class ControllerProfile extends Controller
{
  function __construct()
  	{
  		$this->model = new ModelUsers();
  		$this->view = new View();
  	}

  	function action_index()
  	{
      $id = $this->checkUser();
      $data = $this->model->getUser($id);
  		$this->view->generate('view_profile.php', 'view_template.php', $data);
  	}

    function checkUser()
    {
      if (!isset($_SESSION['user_id']))
      {
        header("Location: http://".$_SERVER['HTTP_HOST']);
        exit;
      }
      return $_SESSION['user_id'];
    }

}
