<?php

class Product_model {
    private $table = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database ;
    }

    public function getAllProduct()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}