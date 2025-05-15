<?php

namespace App\Controllers;

<<<<<<< HEAD
use App\Models\ProductModel; 

class Home extends BaseController
{   
    protected $product;

    function __construct()
    {
        $this->product = new ProductModel();
    }

    public function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('v_home', $data);
    }

    public function faq()
    {
        return view('v_faq'); // Mengarahkan ke view faq
=======
class Home extends BaseController
{
    public function index(): string
    {
        return view('v_home');
>>>>>>> 86f51c552727331f30ccbaa63570d766d814d880
    }
}
