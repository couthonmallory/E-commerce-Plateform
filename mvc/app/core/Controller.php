<?php
class Controller
{
    public function model($model)
    {
        require_once ROOTPATH.'models/'.$model.'.php';
        return new $model();
    }
    public function view($view, $data=[])
    {
        require_once ROOTPATH.'views/'.$view.'.php';
    }
}


