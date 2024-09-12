<?php

class Controller
{
    public function view($pathView, $data = [])
    {
        extract($data);
        $viewPath = _DIR_ROOT . '/Views/' . str_replace('.', '/', $pathView) . '.php';

        if (file_exists($viewPath)) {

            require_once $viewPath;
        } else {
            echo 'loi';
        }
    }

    public function model($model)
    {
        if (file_exists(_DIR_ROOT . "/app/Models/{$model}.php")) {
            require_once _DIR_ROOT . "/app/Models/{$model}.php";
            if (class_exists($model)) {
                $model = new $model();
                return $model;
            }
        }

        return false;
    }
}