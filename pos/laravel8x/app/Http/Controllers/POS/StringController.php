<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Access\StringAccess;
use App\Access\StringtypeAccess;
use App\Services\StringService;

class StringController extends Controller
{
    function __construct() {
        $this->_stringAccess = new StringAccess();
        $this->_stringtypeAccess = new StringtypeAccess();
        $this->_stringService = new StringService();
    }

    public function index(Request $request){
        $searchParams = $this->_stringService->searchParam($request);
        $string = $this->_stringAccess->get($searchParams);
        $priceTotalInput = $this->_stringAccess->priceTotalInput();
        $stringtype = $this->_stringtypeAccess->get();
        return view('POS.string.index', ['string' => $string, 'priceTotalInput' => $priceTotalInput, 'stringtype' => $stringtype]);
    }

    public function add(Request $request){
        $stringtype = $this->_stringtypeAccess->get();
        return view('POS.string.add', ['stringtype' => $stringtype]);
    }

    public function insert(Request $request){
        $this->_stringService->moveThumbnail($request);
        $this->_stringAccess->insert($request);
        return redirect()->route('string.add');
    }

    public function edit(Request $request){
        $string = $this->_stringAccess->getFirst(['string_id' => $request->string_id]);
        $stringtype = $this->_stringtypeAccess->get();
        return view('POS.string.edit', ['string' => $string, 'stringtype' => $stringtype]);
    }

    public function update(Request $request){
        $this->_stringService->moveThumbnail($request);
        $this->_stringAccess->update($request);
        return redirect()->route('string.index');
    }

    public function delete(Request $request){
        $string = $this->_stringAccess->getFirst(['string_id' => $request->string_id]);
        $this->_stringService->deleteThumbnail($string);
        $this->_stringAccess->delete(['string_id' => $request->string_id]);
        return redirect()->route('string.index');
    }
}
