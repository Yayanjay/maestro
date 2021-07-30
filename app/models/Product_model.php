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

    public function getProductId($id)
    {
        $this->db->query('SELECT * FROM barang WHERE id_barang=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getProductName($name)
    {
        $this->db->query('SELECT * FROM barang WHERE nama_barang=:namabarang');
        $this->db->bind('namabarang', $name);
        return $this->db->single();
    }
    
    public function addProduct($data)
    {
        $query = "INSERT INTO barang VALUES ('', :nama_barang, :harga_barang, :gambar_barang, :deskripsi_barang, :stok_barang) ";
        $this->db->query($query);
        $this->db->bind('nama_barang', $data['nama']);
        $this->db->bind('harga_barang', $data['harga']);
        $this->db->bind('deskripsi_barang', $data['deskripsi']);
        $this->db->bind('stok_barang', $data['stok']);
        $this->db->bind('gambar_barang', $data['gambar']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteProduct($id)
    {
        $query = "DELETE FROM barang WHERE id_barang = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}