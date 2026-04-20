<?php

class Router
{
	private $routes = [];

	public function addRoute($route, $file)
	{
		$this->routes[$route] = $file;
	}

	public function dispatch()
	{
		$url = $_SERVER['REQUEST_URI'] ?? '/';
		if (isset($this->routes[$url]))
		{
			require_once $this->routes[$url];
		} else {
			http_response_code(404);
			echo "Page not found";
		}
	}
}
