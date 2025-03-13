<?php
namespace App\Core;
class Router {
    private $routes = [];
    
    public function __construct(array $routes) {
        $this->routes = $routes;
    }
    
    public function dispatch($url) {
        if (array_key_exists($url, $this->routes)) {
            $controller = "App\\Controllers\\" . $this->routes[$url]['controller'];
            $action = $this->routes[$url]['action'];
            
            require_once "app/Controllers/{$this->routes[$url]['controller']}.php";
            $controller_instance = new $controller();
            $controller_instance->$action();
        } else {
            header('Location: /');
            exit;
        }
    }
}
