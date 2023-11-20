<?php

class Home extends Controller{

    private $dt;
    private $df;

    public function __construct(){
        // echo 'Anda berada pada controller home</br>';
        $this->dt = $this->loadmodel('barang'); // object
        $this->df = $this->loadmodel('DaftarBarang');
    }

    public function index(){
        echo 'Anda memanggil action index</br>';
    }

    public function home($data1, $data2){
        echo 'Anda memanggil action home</br>Data 1 ='. $data1.'</br>Data 2 ='.$data2;
    }

    public function lihatData($id){
        $data = $this->df->getDataById($id);

        // View
        $this->loadview('Templates/header', ['title'=>'Detail Barang']);
        $this->loadview('home/detailBarang', $data);
        $this->loadview('Templates/footer');
    }

    public function Utama(){
        $data = $this->df->getDataAll();
        
        // View
        $this->loadview('Templates/header', ['title'=>'List Barang']);
        $this->loadview('home/Utama', $data);
        $this->loadview('Templates/footer');
    }

    public function insertBarang(){
        $this->loadview('Templates/header', ['title'=>'Insert Barang']);
        $this->loadview('home/form');
        $this->loadview('Templates/footer');
    }

}