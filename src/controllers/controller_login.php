<?php

include './src/controllers/controller.php';

class ControllerLogin extends Controller
{

  function action_index()
  {
    $this->view->generate('view_login.php', 'view_template.php');
  }

}
