<?php

namespace App\Http\Controllers\POS;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('pos.dashboard.index');
    }
}
