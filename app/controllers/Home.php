<?php

class Home extends Controller {
    
    public function index()
    {
        // cek apakah sudah login tau belum
        if (isset($_SESSION['loginData'])) {
            
            // cek apakah akun yang login merupakan costumer atau admin
            if ($_SESSION['loginData']['role'] == 'costumer') {
                
                $data['judul'] = 'Home page';
                $data['products'] = $this->model('Product_model')->getAllProduct();
                $data['user'] = $_SESSION['loginData'];
                $this->view('templates/header', $data);
                $this->view('templates/navCust', $data);
                $this->view('home/index', $data);
                $this->view('templates/footer');    
            } elseif ($_SESSION['loginData']['role'] == 'admin') {
                
                $data['judul'] = 'Home page';
                $data['products'] = $this->model('Product_model')->getAllProduct();
                $data['user'] = $_SESSION['loginData'];
                $this->view('templates/header', $data);
                $this->view('templates/navAdmin', $data);
                $this->view('home/index', $data);
                $this->view('templates/footer');    
            }
        } else {
            $data['judul'] = 'Home page';
            $data['products'] = $this->model('Product_model')->getAllProduct();
            $this->view('templates/header', $data);
            $this->view('templates/navGen', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        }
    }
}