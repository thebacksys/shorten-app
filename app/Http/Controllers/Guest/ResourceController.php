<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    public function index()
    {
        return view('guest.pages.resource.index');
    }
}
