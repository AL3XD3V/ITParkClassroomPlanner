<?php

include './src/controllers/controller.php';

class ControllerIndex extends Controller
{

  function action_index()
  {
    $this->view->generate('view_index.php', 'view_template.php');
  }

}
