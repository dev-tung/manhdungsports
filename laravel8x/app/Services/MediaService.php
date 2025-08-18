<?php

namespace App\Services;
use DB;
use App\Http\Controllers\API\FileController;

class MediaService extends Service{
    function __construct() {
        $this->_fileController = new FileController();
    }

    public function moveThumbnail($request){
        if( !empty( $request->product_thumbnail ) ){
            $request->oldPath = 'upload/product/tmp/'.$request->product_thumbnail;
            if( file_exists($request->oldPath) ){
                $request->newPath = 'upload/product/'.$request->product_thumbnail;
                $this->_fileController->move($request);
                $request->directory = 'upload/product/tmp';
                $this->_fileController->deleteDirectory($request);
            }
        }
    }

    public function deleteThumbnail($request, $product){
        if( $product->product_thumbnail ){
            $request->filePath = $product->product_thumbnail;
            $this->_fileController->delete($request);
        }
    }
}
