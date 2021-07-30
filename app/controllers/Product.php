<?php

class Product extends Controller {
    
    public function index()
    {
        $data['judul'] = 'Product Page';
        $data['products'] = $this->model('Product_model')->getAllProduct();
        $this->view('templates/header', $data);
        $this->view('products/index', $data);
        $this->view('templates/footer');
    }
    
    public function detail($id)
    {
        $data['judul'] = 'Product Page';
        $data['product'] = $this->model('Product_model')->getProductId($id);
        $data['user'] = $_SESSION['loginData'];
        
        if (isset($_SESSION['loginData']) && $data['user']['role'] === 'costumer') {
            $this->view('templates/header', $data);
            $this->view('templates/navCust', $data);
            $this->view('products/detail', $data);
            $this->view('templates/footer');
        } elseif (isset($_SESSION['loginData']) && $data['user']['role'] === 'admin') {
            $data['user'] = $_SESSION['loginData'];
            $this->view('templates/header', $data);
            $this->view('templates/navAdmin', $data);
            $this->view('products/detail', $data);
            $this->view('templates/footer');
        } else {
            $this->view('templates/header', $data);
            $this->view('templates/navGen', $data);
            $this->view('products/detail', $data);
            $this->view('templates/footer');
        }
    }
    
    public function add_product()
    {
        $data = array(
            'nama' => $_POST['namaproduk'], 
            'harga' => $_POST['hargaproduk'], 
            'deskripsi' => $_POST['deskripsiproduk'], 
            'stok' => $_POST['stokproduk'], 
            'gambar' => $_FILES['gambarproduk']['name'], 
        );
        $gambar = $_FILES['gambarproduk']['name'];
        $tmp = $_FILES['gambarproduk']['tmp_name'];
        $size = $_FILES['gambarproduk']['size'];
        $path = "images/products/";

        $produkData = $this->model('Product_model')->getProductName($data['nama']);
        // cek apakah barang sudah terdaftar
        if ($produkData['nama_barang'] != $data['nama']) {
            // cek ukuran gambar
            if ($size > 1500000) {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'ukuran file terlalu besar');
                header('Location: ' . BASEURL . '/dashboard');
                exit;
            } else {
                // cek apakah file berhasil terupload
                if (move_uploaded_file($tmp,$path . $gambar)) {
                    $this->model('Product_model')->addProduct($data);
                    Flasher::setFlash('berhasil', 'ditambahkan', 'success', '');
                    header('Location: ' . BASEURL . '/dashboard');
                    exit;
                } else {
                    Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'gambar gagal diunggah');
                    header('Location: ' . BASEURL . '/dashboard');
                    exit;
                }
                
            }
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'barang sudah terdaftar');
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
        
        
    }

    public function delete_product($id)
    {
        if ( $this->model('Product_model')->deleteProduct($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', '');
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', '');
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
    }

    public function edit_product($id)
    {
        
    }
}