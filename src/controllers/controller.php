<?php

include './src/views/view.php';

class Controller
{

	public $model;
	public $view;

	function __construct()
	{
		$this->view = new View();
	}

	function action_index()
	{
	}

	function checkAdmin()
	{
		if (!(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin'))
		{
			header("Location: http://".$_SERVER['HTTP_HOST']);
	    exit;
		}
	}

	function checkAuthorized()
	{
		if (!isset($_SESSION['user_role']))
		{
			header("Location: http://".$_SERVER['HTTP_HOST']);
	    exit;
		}
	}

}
