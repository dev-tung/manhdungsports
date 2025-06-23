<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\FileController;
use App\Dbaccess\Category;

class CategoryController extends Controller
{

    private $_db_category;

    function __construct() {
        $this->_dbCategory = new Category();
    }

    public function index(Request $request){
        $categories = $this->_dbCategory->get([
            ['category_name', 'like', '%' . $request->category_name . '%']
        ]);
        return view('POS.category.index', ['categories' => $categories]);
    }

    public function add(Request $request){
        $categories = $this->_dbCategory->get();
        return view('POS.category.add', ['categories' => $categories]);
    }

    public function insert(Request $request){
        $this->_dbCategory->insert($request);
        return redirect()->route('category.index');
    }

    public function edit(Request $request){
        $category = $this->_dbCategory->getFirst(['category_id' => $request->category_id]);
        $categories = $this->_dbCategory->get();
        return view('POS.category.edit', ['category' => $category, 'categories' => $categories]);
    }

    public function update(Request $request){
        $this->_dbCategory->update($request);
        return redirect()->route('category.index');
    }

    public function delete(Request $request){
        $this->_dbCategory->delete(['category_id' => $request->category_id]);
        return redirect()->route('category.index');
    }
}
