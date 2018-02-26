<?php

include './src/controllers/controller.php';

class ControllerReg extends Controller
{

  function action_index()
  {
    $this->view->generate('view_reg.php', 'view_template.php');
  }

}
