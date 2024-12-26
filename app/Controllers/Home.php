<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $productModel = model('ProductModel');
        $data['product'] = $productModel->findAll();
        return view('home', $data);
    }
    public function delivery(){
        return view('delivery');
    }
    
}
