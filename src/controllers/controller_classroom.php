<?php

include './src/controllers/controller.php';
include './src/models/model_classes.php';

class ControllerClassroom extends Controller
{
  function __construct()
  	{
  		$this->model = new ModelClasses();
  		$this->view = new View();
  	}

  	function action_index()
  	{
      $data = $this->model->getAudWeekData(date('W') - 1);
      $data2 = $this->model->getAudWeekData(date('W'));
  		$this->view->generate('view_classroom.php', 'view_template.php', $data, $data2);
  	}
}
