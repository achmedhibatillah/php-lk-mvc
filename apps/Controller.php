<?php

class Controller{

    // Menghandle model
    // 1. Apakah file model ada?
    // 2. Jika ada, maka require class Model
    // 3. Instansiasi pada class Model

    public function loadmodel($model){
        if (file_exists('apps/models/'.$model.'.php')){
            require_once('apps/models/'.$model.'.php');
            $model = new $model;
        }
        return $model;
    }

    public function loadview($view, $data=null){
        if(file_exists('apps/views/'.$view.'.php')){
            require_once('apps/views/'.$view.'.php');
        }
    }

}