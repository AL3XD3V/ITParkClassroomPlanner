<?php

include './src/controllers/controller.php';

class ControllerLogout extends Controller
{

  function action_index()
  {
    session_start();
    session_destroy();
    header("Location: http://".$_SERVER['HTTP_HOST']);
    exit;
  }

}
