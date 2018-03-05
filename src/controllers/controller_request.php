<?php

include './src/controllers/controller.php';
include './src/models/model_classes.php';

class ControllerRequest extends Controller
{
  function __construct()
  	{
  		$this->model = new ModelClasses();
  		$this->view = new View();
  	}

  	function action_index()
  	{
      $this->checkAuthorized();
      $data = $this->model->getAllData();
      echo date("h:i:s") . "<br>";
      echo time() . "<br>";
      echo strtotime("2018-03-05 15:39:00") . "<br>";
      echo $_POST['calendarField'];
      //$this->checkEvent($data);
  		$this->view->generate('view_request.php', 'view_template.php', $data);
  	}

    function checkEvent($data)
    {
      if (!empty($_POST['calendarField']) &&
          !empty($_POST['startHourField']) &&
          !empty($_POST['startMinuteField']) &&
          !empty($_POST['stopHourField']) &&
          !empty($_POST['stopMinuteField'])
          )
      {
        $date = $_POST['calendarField'];
        $startTime = $_POST['startHourField'] . ':' . $_POST['startMinuteField'] . ':00';
        $stopTime = $_POST['stopHourField'] . ':' . $_POST['stopMinuteField'] . ':00';
        foreach ($data as $row) {
          if ($row['day'])
          {

          }
        }
      }
    }

    function setEvent()
    {
      $data = array(
        0 => $_POST['surnameField'],
        1 => $_POST['nameField'],
        2 => $_POST['patronField'],
        3 => $_POST['divisionField'],
        4 => $_POST['positionField'],
        5 => $_POST['phoneField'],
        6 => $_POST['emailField'],
        7 => $_POST['passwordField']
      );
      return $data;
    }

}
