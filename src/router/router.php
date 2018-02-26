<?php

class Router
{

  static function route()
  {

    $controller_name = 'index';
    $action_name = 'index';

    $routes = explode('/', $_SERVER['REQUEST_URI']);

    if (!empty($routes[1])) {
      $controller_name = $routes[1];
    }

    if (!empty($routes[2])) {
      $action_name = $routes[2];
    }

    $controller_file =  './src/controllers/controller_' . strtolower($controller_name) . '.php';

    if (file_exists($controller_file))
		{
			include $controller_file;
		} else {
      Router::ErrorPage404();
    }

    $controller_name = 'Controller' . $controller_name;
    $controller = new $controller_name;
    $action = 'action_' . $action_name;

    if (method_exists($controller, $action)) {
      $controller -> $action();
    } else {
      Router::ErrorPage404();
    }

  }


  function ErrorPage404()
  {
    $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    header('HTTP/1.1 404 Not Found');
  	header("Status: 404 Not Found");
  	header('Location:' . $host . '404');
  }

}
