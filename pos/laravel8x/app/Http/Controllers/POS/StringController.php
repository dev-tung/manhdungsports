<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\FileController;
use App\Access\StringAccess;

class StringController extends Controller
{

    function __construct() {
        $this->_stringAccess = new StringAccess();
    }

    public function index(Request $request){
        $string = $this->_stringAccess->get($request);
        $priceTotalInput = $this->_stringAccess->priceTotalInput();
        return view('POS.string.index', ['string' => $string, 'priceTotalInput' => $priceTotalInput]);
    }

    public function add(Request $request){
        $string = $this->_stringAccess->get();
        
        return view('POS.string.add', [
            'string' => $string, 'colors' => commomGetColorList(), 
            'stringtypes' => commomGetStringTypeList()
        ]);
    }

    public function insert(Request $request){
        $this->_stringAccess->insert($request);
        return redirect()->route('string.index');
    }

    public function edit(Request $request){
        $string = $this->_stringAccess->getFirst(['string_id' => $request->string_id]);
        return view('POS.string.edit', ['string' => $string, 'colors' => commomGetColorList(), 'stringtypes' => commomGetStringTypeList()]);
    }

    public function update(Request $request){
        $this->_stringAccess->update($request);
        return redirect()->route('string.index');
    }

    public function delete(Request $request){
        $this->_stringAccess->delete(['string_id' => $request->string_id]);
        return redirect()->route('string.index');
    }
}
