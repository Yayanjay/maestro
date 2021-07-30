<?php

class Dashboard extends Controller {
    public function index()
    {
        // cek apakah sudah login
        if (isset($_SESSION['loginData'])) {

            // jika sudah login akan dilempar ke home
            if ($_SESSION['loginData']['role'] == 'admin') {
                // jika admin akan masuk Dashboard
                $data['judul'] = 'Dashboard Admin';
                $data['products'] = $this->model('Product_model')->getAllProduct();
                $data['user'] = $_SESSION['loginData'];
                $this->view('templates/headerDash', $data);
                $this->view('dashboard/index', $data);
                $this->view('templates/footerDash', $data);
            } else {
                // jika bukan admin akan dilempar ke halaman home
                $data['judul'] = 'Home page';
                $data['products'] = $this->model('Product_model')->getAllProduct();
                $data['user'] = $_SESSION['loginData'];
                $this->view('templates/header', $data);
                $this->view('templates/navCust', $data);
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
    
    public function admin()
    {
        $data['judul'] = 'Dashboard Admin';
        $data['admins'] = $this->model('User_model')->getAdmin();
        $data['user'] = $_SESSION['loginData'];
        $this->view('templates/headerDash', $data);
        $this->view('dashboard/admin', $data);
        $this->view('templates/footerDash', $data);
    }

    public function costumer()
    {
        $data['judul'] = 'Dashboard Admin';
        $data['costumers'] = $this->model('User_model')->getcostumer();
        $data['user'] = $_SESSION['loginData'];
        $this->view('templates/headerDash', $data);
        $this->view('dashboard/costumer', $data);
        $this->view('templates/footerDash', $data);
    }
    
    public function supplier()
    {
        $data['judul'] = 'Dashboard Admin';
        $data['suppliers'] = $this->model('Supplier_model')->getAllSupplier();
        $data['user'] = $_SESSION['loginData'];
        $this->view('templates/headerDash', $data);
        $this->view('dashboard/supplier', $data);
        $this->view('templates/footerDash', $data);
        
    }
}