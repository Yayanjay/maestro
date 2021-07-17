<?php

class Auth extends Controller {
    public function index()
    {
        $this->view('auth/login');
    }
    
    public function register()
    {
        $this->view('auth/register');
    }

    public function login_process()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userData = $this->model('User_model')->getUserEmail($email);
        $password_hash = $userData['password'];
        $loginInfo = array('userId' => $userData['id'], 'email' => $userData['email'], 'isAuth' => true);

        // cek email ada atau tidak
        if ($userData > 0) {

            // cek password benar atau tidak
            if (password_verify($password, $password_hash)) {
                
                // $_SESSION['loginData'] = [
                //     'userId' => $userData['id'],
                //     'email' => $userData['email'],
                //     'isAuth' => true
                // ];
                $_SESSION['isAuth'] = 'true';
                header('Location: ' . BASEURL . '/home');
            } else {
                echo "<script>
                        alert('password salah');
                        window.location.replace('" . BASEURL ."/auth/login')
                      </script>";
            }
        } else {
            echo "<script>
                        alert('email tidak tersedia');
                        window.location.replace('" . BASEURL ."/auth/login')
                      </script>";
        }
    }

    public function register_process()
    {
        // cek email sudah digunakan atau belum
        if ($this->model('User_model')->getUserEmail($_POST['email']) > 0) {
            echo "<script>
                    alert('Email sudah digunakan');
                    window.location.replace('" . BASEURL ."/auth/register')
                  </script>";
            exit;
        }
        
        // cek apakah data sudah masuk ke database atau belum
        if ($this->model('User_model')->addUser($_POST) > 0  ) {
            echo "<script>
                    alert('Akun Berhasil dibuat');
                    window.location.replace('" . BASEURL ."/auth')
                    </script>";
            exit;
        } else {
            echo "<script>
                    alert('Akun Gagal dibuat');
                    window.location.replace('" . BASEURL ."/auth/register')
                    </script>";
            exit;
        }

        exit;
    }
}