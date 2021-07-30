<?php

class Supplier_model {
    private $table = 'supplier';
    private $db;

    public function __construct()
    {
        $this->db = new Database ;
    }

    public function getAllSupplier()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function addSupplier($data)
    {
        $query = "INSERT INTO " . $this->table . "
                    VALUES
                  ('', :nama, :telepon, :alamat)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('alamat', $data['alamat']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}