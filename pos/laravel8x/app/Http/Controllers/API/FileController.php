<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use File;

class FileController extends Controller
{
    public function upload(Request $request){
        $file = $request->file('file');

        if( empty( $file ) ) return response()->json(['success' => false], Response::HTTP_OK);

        $fileName = time().'.'.$file->extension();

        $file->move($request->folder, $fileName);

        return response()->json([
            'success' => true, 
            'uploadURL' => asset($request->folder.'/'.$fileName)
        ], Response::HTTP_OK);
    }
}
