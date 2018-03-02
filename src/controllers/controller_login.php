<?php

include './src/controllers/controller.php';
include './src/models/model_users.php';

class ControllerLogin extends Controller
{

  function action_index()
  {
    $this->login();
    $this->view->generate('view_login.php', 'view_template.php');
  }

  function login()
  {
    if (!empty($_POST['loginField']) && !empty($_POST['passwordField']))
    {
      $model = new ModelUsers();
      $authData = $model->getAuthData();
      foreach ($authData as $row) {
        if (($row['email'] == $_POST['loginField']) &&
            ($row['password'] == MD5($_POST['passwordField'])) &&
            ($row['verified'] == 1)
            )
        {
          $_SESSION['user_name'] = $row['name'];
          $_SESSION['user_id'] = $row['id'];
          $_SESSION['user_role'] = $row['role'];
          header("Location: http://".$_SERVER['HTTP_HOST']);
          exit;
        }
      }
    }
  }

}
