<?php

class Controller
{
    protected function view($view, $data = [], $layout = 'public')
    {
        extract($data);

        $content = "../app/views/{$view}.php";

        require_once "../app/views/layouts/{$layout}.php";
    }


    protected function model($model)
    {
        require_once "../app/models/{$model}.php";
        return new $model();
    }
}
