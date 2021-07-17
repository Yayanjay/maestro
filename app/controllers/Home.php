<?php

class Home extends Controller {
    
    public function index()
    {
        $data['judul'] = 'Home page';
        $data['products'] = $this->model('Product_model')->getAllProduct();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');    
    }
}