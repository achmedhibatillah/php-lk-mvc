<?php

class DaftarBarang extends Model{

    private $daftar = [];

    public function getDataAll(){
        $stmt = 'select * from daftarBarang';
        $query = $this->db->query($stmt);
        $data = [];

        while ($result = $this->db->fetch_array($query)){
            $data[] = $result;
        }
        return $data;
    }

    public function getDataById($id){
        $stmt = 'select * from daftarBarang where id = '. $id;
        $query = $this->db->query($stmt);
        $data = [];

        $data = $this->db->fetch_array($query);
        return $data;
    }

    // IUD
    public function addData($id, $name, $kuantitas)
    {
        $stmt = "insert into {$this->tablename} (id, nama, kuantitas) VALUES (:id, :nama, :kuantitas)";
        $param = [
            'id' => $id,
            'nama' => $nama,
            'kuantitas' => $kuantitas
        ];

        $query = $this->db->query($stmt, $param);
    }

    public function deleteData($id)
    {
        $stmt = "delete from {$this->tablename} WHERE id = :id";
        $param = [
            'id' => $id
        ];

        $query = $this->db->query($stmt, $param);
    }

    public function updateData($id, $name, $qty)
    {
        $stmt = "update {$this->tablename} SET nama = :nama, kuantitas = :kuantitas WHERE id = :id";
        $param = [
            'id' => $id,
            'nama' => $nama,
            'kuantitas' => $kuantitas
        ];

        $query = $this->db->query($stmt, $param);
    }


}