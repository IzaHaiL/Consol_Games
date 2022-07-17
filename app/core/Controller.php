<?php

class Controller{ //class utama controller
    public function view($view, $data = []) //digunakan untuk mengambil data dari view
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model) // digunakan untuk mengambil data dari model
    {
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }
}