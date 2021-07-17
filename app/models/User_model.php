<?php

class User_model {
    private $table = 'user';
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

    public function addUser($data)
    {
        // var_dump($data);

        $password = $data['password'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO user
                    VALUES
                  ('', :fullname, :email, :password, :phone, :address, :role)";

        $this->db->query($query);
        $this->db->bind('fullname', $data['fullname']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $password_hash);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('address', $data['address']);
        $this->db->bind('role', 'costumer');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getUserEmail($email)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:email');
        $this->db->bind('email', $email);
        return $this->db->single();
        
    }
}