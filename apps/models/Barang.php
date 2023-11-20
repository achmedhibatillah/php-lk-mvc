<?php

class Barang{

    private $id;
    private $nama;
    private $kuantitas;

    public function __construct(){
        $this->id = 'B01';
        $this->nama = 'Beras';
        $this->kuantitas = '100';
    }

    public function getData(){
        return 'Data yang diminta dari Model Barang : '
        .'</br>'.
        $this->nama
        .'</br>'.
        $this->id
        .'</br>'.
        $this->kuantitas;
    }

    public function getDataOne(){
        $data = [
            'id'=>$this->id,
            'nama'=>$this->nama,
            'kuantitas'=>$this->kuantitas,
        ];
        return $data;
    }

}