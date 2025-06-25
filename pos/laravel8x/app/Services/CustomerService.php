<?php

namespace App\Services;
use DB;
use App\Http\Controllers\API\FileController;

class Customerservice extends Service{
    function __construct() {
        $this->_fileController = new FileController();
    }

    public function moveThumbnail($request){
        if( !empty( $request->customer_thumbnail ) ){
            $request->oldPath = 'upload/customer/tmp/'.$request->customer_thumbnail;
            if( file_exists($request->oldPath) ){
                $request->newPath = 'upload/customer/'.$request->customer_thumbnail;
                $this->_fileController->move($request);
                $request->directory = 'upload/customer/tmp';
                $this->_fileController->deleteDirectory($request);
            }
        }
    }

    public function deleteThumbnail($customer){
        if( $customer->customer_thumbnail ){
            $request->filePath = $customer->customer_thumbnail;
            $this->_fileController->delete($request);
        }
    }
}
