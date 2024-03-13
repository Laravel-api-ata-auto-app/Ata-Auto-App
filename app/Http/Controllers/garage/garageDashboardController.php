<?php

namespace App\Http\Controllers\garage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class garageDashboardController extends Controller
{
    //
    public function index()
    {
        return view('garage.dashboard');
    }
}
