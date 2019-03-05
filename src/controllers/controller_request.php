<?php

include './src/controllers/controller.php';
include './src/models/model_classes.php';
include './src/db/pdoconnection.php';

class ControllerRequest extends Controller
{

  public $info;
  public $connection;

  function __construct()
  	{
      $this->info = null;
      $this->view = new View();
      $this->connection = PDOConnection::getConnection();
  	}

  	function action_index()
  	{
      $this->checkAuthorized();
      $this->checkEvent();
  		$this->view->generate('view_request.php', 'view_template.php', $this->info);
  	}

    function checkEvent()
    {
      if (!empty($_POST['calendarField']) &&
          !empty($_POST['startHourField']) &&
          !empty($_POST['startMinuteField']) &&
          !empty($_POST['stopHourField']) &&
          !empty($_POST['stopMinuteField'])
          )
      {
        $date = $_POST['calendarField'];
        $model = new ModelClasses();
        $this->connection->exec("SET TRANSACTION ISOLATION LEVEL SERIALIZABLE;");
        $this->connection->beginTransaction();
        $data = $model->getCheckDataNew($this->connection, $date);
        $found = false;
        foreach ($data as $row)
        {
          if ($_POST['classField'] == $row['class'])
          {
            $startTimeDB = strtotime($row['day'] . ' ' . $row['time_start']);
            $stopTimeDB = strtotime($row['day'] . ' ' . $row['time_stop']);
            $startTimePOST = strtotime($_POST['calendarField'] . ' ' . $_POST['startHourField'] . ':' . $_POST['startMinuteField'] . ':01');
            $stopTimePOST = strtotime($_POST['calendarField'] . ' ' . $_POST['stopHourField'] . ':' . $_POST['stopMinuteField'] . ':01');
            if (($startTimePOST >= $startTimeDB && $startTimePOST <= $stopTimeDB) ||
                ($stopTimePOST >= $startTimeDB && $stopTimePOST <= $stopTimeDB) ||
                ($startTimeDB >= $startTimePOST && $startTimeDB <= $stopTimePOST) ||
                ($stopTimeDB >= $startTimePOST && $stopTimeDB <= $stopTimePOST)
                )
            {
              $found = true;
            }
          }
        }
        if ($found)
        {
          $this->info = 'decline';
        } else {
          $this->setEvent($model);
        }
        $this->connection->commit();
      }
    }

    function setEvent($model)
    {
      $data = array(
        0 => $_POST['classField'],
        1 => $_POST['calendarField'],
        2 => $_POST['startHourField'] . ':' . $_POST['startMinuteField'] . ':01',
        3 => $_POST['stopHourField'] . ':' . $_POST['stopMinuteField'] . ':00',
        4 => $_POST['nameField'],
        5 => $_SESSION['user_id'],
        6 => date('Y-m-d H:i:s'),
        7 => $_POST['commentField']
      );
      $model->setEventDataNew($this->connection, $data);
      $this->info = 'accept';
    }

}
