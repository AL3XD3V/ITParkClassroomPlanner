<?php

include './src/controllers/controller.php';
include './src/models/model_classes.php';

class ControllerRequests extends Controller
{
  function __construct()
  	{
  		$this->model = new ModelClasses();
  		$this->view = new View();
  	}

  	function action_index()
  	{
      $this->checkAdmin();
  		$this->verify();
      $data = $this->model->getAllData();
  		$this->view->generate('view_requests.php', 'view_template.php', $data);
  	}

    function verify()
    {
      if (!empty($_POST['regField']) && !empty($_POST['userField']))
      {
        $data[0] = $_POST['regField'];
        $data[1] = $_POST['userField'];
        $this->model->setVerifyData($data);
      }
    }

}
