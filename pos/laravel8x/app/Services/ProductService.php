<?php

namespace App\Services;
use DB;
use App\Http\Controllers\API\FileController;

class Productservice extends Service{
    function __construct() {
        $this->_fileController = new FileController();
    }

    public function searchParam($request){
        $searchParams = [];

        if( !empty($request->product_name) ){
            $searchParams[] = ['product_name', 'like', '%' . $request->product_name . '%'];
        }

        if( !empty($request->product_productype) ){
            $searchParams[] = ['product_productype', 'like', '%' . $request->product_productype . '%'];
        }

        return $searchParams;
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

    public function deleteThumbnail($product){
        if( $product->product_thumbnail ){
            $request->filePath = $product->product_thumbnail;
            $this->_fileController->delete($request);
        }
    }
}
