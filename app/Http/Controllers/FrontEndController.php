<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function list()
    {
        return view('category');
    }

    public function show()
    {
        return view('single-product');
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function confirmation()
    {
        return view('confirmation');
    }

    public function check()
    {
        return view('check');
    }
}
