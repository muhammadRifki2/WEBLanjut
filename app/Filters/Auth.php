<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (!session()->has('isLoggedIn')) {
            return redirect()->to(site_url('login'));
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
<<<<<<< HEAD
        $session = session();
        if ($session -> getFlashdata('logged_in')){
            return redirect()->to('/profil');
        }
=======
>>>>>>> 86f51c552727331f30ccbaa63570d766d814d880
    }
}
