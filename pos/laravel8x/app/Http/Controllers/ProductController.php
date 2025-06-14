<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product.index');
    }

    public function add(){
        return view('product.add');
    }

    public function insert(Request $request){
        dd($request);
    }

    public function edit(){
        return view('product.edit');
    }
}
