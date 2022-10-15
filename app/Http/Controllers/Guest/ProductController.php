<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('guest.pages.product.index');
    }
}
