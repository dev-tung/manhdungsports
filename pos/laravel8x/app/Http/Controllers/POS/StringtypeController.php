<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\FileController;
use App\Access\StringtypeAccess;

class StringtypeController extends Controller
{

    function __construct() {
        $this->_stringtypeAccess = new StringtypeAccess();
    }

    public function index(Request $request){
        $stringtype = $this->_stringtypeAccess->get([
            ['stringtype_name', 'like', '%' . $request->stringtype_name . '%']
        ]);
        return view('POS.stringtype.index', ['stringtype' => $stringtype]);
    }

    public function add(Request $request){
        $stringtype = $this->_stringtypeAccess->get();
        return view('POS.stringtype.add', ['stringtype' => $stringtype]);
    }

    public function insert(Request $request){
        $this->_stringtypeAccess->insert($request);
        return redirect()->route('stringtype.index');
    }

    public function edit(Request $request){
        $stringtype = $this->_stringtypeAccess->getFirst(['stringtype_id' => $request->stringtype_id]);
        $stringtypes = $this->_stringtypeAccess->get();
        return view('POS.stringtype.edit', ['stringtypes' => $stringtypes, 'stringtype' => $stringtype]);
    }

    public function update(Request $request){
        $this->_stringtypeAccess->update($request);
        return redirect()->route('stringtype.index');
    }

    public function delete(Request $request){
        $this->_stringtypeAccess->delete(['stringtype_id' => $request->stringtype_id]);
        return redirect()->route('stringtype.index');
    }
}
