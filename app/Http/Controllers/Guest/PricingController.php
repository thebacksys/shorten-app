<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    public function index()
    {
        return view('guest.pages.pricing.index');
    }
}
