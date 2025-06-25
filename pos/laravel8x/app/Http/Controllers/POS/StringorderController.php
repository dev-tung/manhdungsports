<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Access\StringorderAccess;
use App\Access\StringAccess;
use App\Services\StringorderService;

class StringorderController extends Controller
{
    function __construct() {
        $this->_stringorderAccess = new StringorderAccess();
        $this->_stringAccess = new StringAccess();
        $this->_stringorderService = new StringorderService();
    }

    public function index(Request $request){
        $stringorders = $this->_stringorderAccess->get($request);
        return view('POS.stringorder.index', ['stringorders' => $stringorders]);
    }

    public function add(Request $request){
        $string = $this->_stringAccess->get();
        return view('POS.string.add', ['string' => $string]);
    }

    public function insert(Request $request){
        $this->_stringorderService->moveThumbnail($request);
        $this->_stringorderAccess->insert($request);
        return redirect()->route('string.add');
    }

    public function edit(Request $request){
        $string = $this->_stringorderAccess->getFirst(['string_id' => $request->string_id]);
        $string = $this->_stringAccess->get();
        return view('POS.string.edit', ['string' => $string, 'string' => $string]);
    }

    public function update(Request $request){
        $this->_stringorderService->moveThumbnail($request);
        $this->_stringorderAccess->update($request);
        return redirect()->route('string.index');
    }

    public function delete(Request $request){
        $string = $this->_stringorderAccess->getFirst(['string_id' => $request->string_id]);
        $this->_stringorderService->deleteThumbnail($string);
        $this->_stringorderAccess->delete(['string_id' => $request->string_id]);
        return redirect()->route('string.index');
    }
}
