<?php

require 'Config.php';
require 'Controller.php';
require 'Database.php';
require 'Model.php';

class Boot {

    protected $controller = 'Index';
    protected $action = 'index';
    protected $params = [];

    public function __construct() {
        // echo "Booting sukses";

        $url = $_GET['r'];
        $url = $this->parseUrl($url);

        // Mengecek apakah file ada dlm direktori
        if (file_exists('apps/controllers/'.$url[0]).'.php'){
            $this->controller = $url[0];
            unset($url[0]);
        }

        // Instans controller default
        require ('apps/controllers/'.$this->controller.'.php');
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])){
                $this->action = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($url)){
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->action], $this->params);

        // var_dump($this->action);
    }

    // Routing aplikasi MVC --> Memilihkan controller. model, view yg diperlukan

    public function parseUrl($url) {
        if (isset($_GET['r'])){
            $url = rtrim($_GET['r'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
        }
        return $url;
    }
}

