<?php
namespace App\Core;
class Controller {
    protected function model($model) {
        $modelClass = "App\\Models\\" . $model;
        require_once "app/Models/{$model}.php";
        return new $modelClass();
    }
    
    protected function view($view, $data = []) {
        extract($data);
        require_once "app/Views/{$view}.php";
    }
}
