<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\FileController;
use App\Access\ProductypeAccess;

class ProductypeController extends Controller
{

    function __construct() {
        $this->productypeAccess = new ProductypeAccess();
    }

    public function index(Request $request){
        $productype = $this->productypeAccess->get($request);
        return view($request->screen.'.productype.index', ['productype' => $productype]);
    }

    public function add(Request $request){
        $productype = $this->productypeAccess->get($request);
        return view($request->screen.'.productype.add', ['productype' => $productype]);
    }

    public function insert(Request $request){
        $this->productypeAccess->insert($request);
        return redirect()->route('productype.index', ['screen'=>'pos']);
    }

    public function edit(Request $request){
        $productype = $this->productypeAccess->getFirst(['productype_id' => $request->productype_id]);
        $productypes = $this->productypeAccess->get();
        return view($request->screen.'.productype.edit', ['productypes' => $productypes, 'productype' => $productype]);
    }

    public function update(Request $request){
        $this->productypeAccess->update($request);
        return redirect()->route('productype.index', ['screen'=>'pos']);
    }

    public function delete(Request $request){
        $this->productypeAccess->delete(['productype_id' => $request->productype_id]);
        return redirect()->route('productype.index', ['screen'=>'pos']);
    }
}
