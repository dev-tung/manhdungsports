<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use File;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request){
        $file = $request->file('file');

        if( empty( $file ) ) return response()->json(['success' => false], Response::HTTP_OK);

        $fileName = time().'.'.$file->extension();

        $file->move($request->folder, $fileName);

        return response()->json([
            'success' => true, 
            'url' => asset($request->folder.'/'.$fileName),
            'fileName' => $fileName
        ], Response::HTTP_OK);
    }

    public function move(Request $request){
        rename(public_path($request->oldPath), public_path($request->newPath));

        return response()->json([
            'success' => true,
            'filePath' => public_path($request->newPath)
        ], Response::HTTP_OK);
    }

    public function delete(Request $request){
        File::delete($request->filePath);
        return response()->json([
            'success' => true
        ], Response::HTTP_OK);
    }

    public function deleteDirectory(Request $request){
        $file = new Filesystem;
        $file->cleanDirectory($request->directory);
        return response()->json([
            'success' => true
        ], Response::HTTP_OK);
    }
}
