<?php

include './src/controllers/controller.php';
include './src/models/model_users.php';

class ControllerReg extends Controller
{

  function action_index()
  {
    $this->registration();
    $this->view->generate('view_reg.php', 'view_template.php');
  }

  function registration()
  {
    if (!empty($_POST['surnameField']) &&
        !empty($_POST['nameField']) &&
        !empty($_POST['patronField']) &&
        !empty($_POST['divisionField']) &&
        !empty($_POST['positionField']) &&
        !empty($_POST['phoneField']) &&
        !empty($_POST['emailField']) &&
        !empty($_POST['passwordField'])
        )
    {
      $model = new ModelUsers();
      $regData = $model->getRegData();
      $found = false;
      foreach ($regData as $row) {
        if ($row['email'] == $_POST['emailField'])
        {
          $found = true;
        }
      }
      if (!$found) {
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
        $model->setRegData($data);
        header("Location: http://".$_SERVER['HTTP_HOST']);
        exit;
      }
    }
  }

}
