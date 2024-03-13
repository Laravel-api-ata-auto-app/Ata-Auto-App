<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shopdashboardcontroller extends Controller
{
    //
    public function index()
    {
        return view('shop.dashboard');
    }
}
