<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Pelanggan extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pelanggan";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
}