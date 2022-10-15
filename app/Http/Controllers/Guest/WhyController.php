<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

class WhyController extends Controller
{
    public function index()
    {
        return view('guest.pages.why.index');
    }
}
