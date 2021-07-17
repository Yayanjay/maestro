<?php

class Products extends Controller {
    
    public function index()
    {
        $data['judul'] = 'Product Page';
        $data['products'] = $this->model('Product_model')->getAllProduct();
        $this->view('templates/header', $data);
        $this->view('products/index', $data);
        $this->view('templates/footer');
    }


}