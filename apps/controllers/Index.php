<?php

class Index {
    public function __construct(){
        echo 'Anda berada pada controller index</br>';
    }

    public function index(){
        echo 'Anda memanggil action index</br>';
    }

    public function home(){
        echo 'Anda memanggil action home</br>';
    }
}