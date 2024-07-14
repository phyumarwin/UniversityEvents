<?php

class Controller
{
    // Load Model
    public function model($model)
    {
        $modelPath = '../app/models/' . $model . '.php';
        if (file_exists($modelPath)) {
            require_once $modelPath;
            return new $model();
        } else {
            die('Model does not exist: ' . $modelPath);
        }
    }

    // Load View
    public function view($view, $data = [])
    {
        $viewPath = '../app/views/' . $view . '.php';
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            die('View does not exist: ' . $viewPath);
        }
    }
}
?>
