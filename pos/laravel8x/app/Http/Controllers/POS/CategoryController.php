<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index(Request $request){
        $categorys = Category::get();
        return view('POS.category.index', ['categorys' => $categorys]);
    }

    public function add(){
        return view('POS.category.add');
    }

    public function create(Request $request){
        Category::add($request);
        return redirect()->back();
    }

    public function edit(){
        return view('POS.category.edit');
    }
}
