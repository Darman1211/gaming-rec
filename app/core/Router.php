<?php

class Router
{
    public function dispatch()
    {
        $basePath = trim(parse_url(BASE_URL, PHP_URL_PATH), '/');
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        if ($basePath && strpos($uri, $basePath) === 0) {
            $uri = trim(substr($uri, strlen($basePath)), '/');
        }


        $segments = explode('/', $uri);

        // Default controller
        $controllerName = 'HomeController';
        $method = 'index';

        if (!empty($segments[0])) {
            if ($segments[0] === 'admin') {
                $controllerName = 'AdminController';
                $method = $segments[1] ?? 'index';
            } else {
                $method = $segments[0];
            }
        }

        require_once "../app/controllers/{$controllerName}.php";
        $controller = new $controllerName();

        if (method_exists($controller, $method)) {
            $controller->$method();
        } else {
            echo "404 - Page not found";
        }
    }
}
