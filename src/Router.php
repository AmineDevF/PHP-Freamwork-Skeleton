<?php

namespace App;

class Router
{
    protected $routes = [];

    private function addRoute($route, $controller, $action, $method)
    {

        $this->routes[$method][$route] = ['controller' => $controller, 'action' => $action];
    }

    public function get($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "GET");
    }
    public function put($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "PUT");
    }   

    public function post($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "POST");
    }

    public function dispatch()
    {
        $uri = strtok(strtolower(rtrim($_SERVER['REQUEST_URI'],'/')), '?');
        
        $method =  $_SERVER['REQUEST_METHOD'];
          
        if (array_key_exists($uri, $this->routes[$method])) {
            $controller = $this->routes[$method][$uri]['controller'];
            dump($this->routes[$method]);
            $action = $this->routes[$method][$uri]['action'];

            $controller = new $controller();
            $controller->$action();
           
        } else {
            throw new \Exception("No route found for URI: $uri");
        }
    }
}
