<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

<<<<<<< HEAD
use App\Models\UserModel; 

=======
>>>>>>> 86f51c552727331f30ccbaa63570d766d814d880
class AuthController extends BaseController
{
    function __construct()
    {
        helper('form');
<<<<<<< HEAD
        $this->user= new UserModel();
    }

    public function login()
{
    $session = session();
    if ($this->request->getPost()) {
        $rules = [
            'username' => 'required|min_length[6]',
            'password' => 'required|min_length[7]|numeric',
            
        ];date_default_timezone_set('Asia/Jakarta');
        $waktuLogin = date('Y/m/d h:i:s');

        if ($this->validate($rules)) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');


            $dataUser = $this->user->where(['username' => $username])->first(); //pasw 1234567

            if ($dataUser) {
                if (password_verify($password, $dataUser['password'])) {
                    session()->set([
                        'username' => $dataUser['username'],
                        'role' => $dataUser['role'],
                        'email' => $dataUser['email'],
                        'waktuLogin' => $waktuLogin,
=======
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $dataUser = ['username' => 'april', 'password' => '202cb962ac59075b964b07152d234b70', 'role' => 'admin']; // passw 123

            if ($username == $dataUser['username']) {
                if (md5($password) == $dataUser['password']) {
                    session()->set([
                        'username' => $dataUser['username'],
                        'role' => $dataUser['role'],
>>>>>>> 86f51c552727331f30ccbaa63570d766d814d880
                        'isLoggedIn' => TRUE
                    ]);

                    return redirect()->to(base_url('/'));
                } else {
<<<<<<< HEAD
                    session()->setFlashdata('failed', 'Kombinasi Username & Password Salah');
=======
                    session()->setFlashdata('failed', 'Username & Password Salah');
>>>>>>> 86f51c552727331f30ccbaa63570d766d814d880
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->back();
            }
        } else {
<<<<<<< HEAD
            session()->setFlashdata('failed', $this->validator->listErrors());
            return redirect()->back();
        }
    }

    return view('v_login');
}

=======
            return view('v_login');
        }
    }

>>>>>>> 86f51c552727331f30ccbaa63570d766d814d880
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
