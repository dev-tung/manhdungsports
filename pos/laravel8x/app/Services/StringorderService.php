<?php

namespace App\Services;
use DB;
use App\Http\Controllers\API\FileController;

class StringorderService extends Service{
    function __construct() {
        $this->_fileController = new FileController();
    }



    public function moveThumbnail($request){
        if( !empty( $request->stringorder_thumbnail ) ){
            $request->oldPath = 'upload/stringorder/tmp/'.$request->stringorder_thumbnail;
            if( file_exists($request->oldPath) ){
                $request->newPath = 'upload/stringorder/'.$request->stringorder_thumbnail;
                $this->_fileController->move($request);
                $request->directory = 'upload/stringorder/tmp';
                $this->_fileController->deleteDirectory($request);
            }
        }
    }

    public function deleteThumbnail($stringorder){
        if( $stringorder->stringorder_thumbnail ){
            $request->filePath = $stringorder->stringorder_thumbnail;
            $this->_fileController->delete($request);
        }
    }
}
