<?php

include './src/controllers/controller.php';
include './src/models/model_users.php';

class ControllerUsers extends Controller
{
  function __construct()
  	{
  		$this->model = new ModelUsers();
  		$this->view = new View();
  	}

  	function action_index()
  	{
  		$data = $this->model->getAllData();
  		$this->view->generate('view_users.php', 'view_template.php', $data);
  	}

}
