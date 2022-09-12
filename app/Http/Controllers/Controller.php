<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function imageUpload($fileName,$folderName){
        if ($fileName) {
            $fileEx = $fileName->getClientOriginalExtension();
            $imageName = rand().time().'.'.$fileEx;
            $fileName->move($folderName,$imageName);

            return $imageName;
        }
    }

    public function imageUpdate($fileName,$folderName,$oldImage){
        if ($fileName) {
            file_exists('images/products/'.$oldImage) ? unlink('images/products/'.$oldImage) : false;

            $fileEx = $fileName->getClientOriginalExtension();
            $imagePath = rand().time().'.'.$fileEx;
            $fileName->move($folderName,$imagePath);
        }
        else{
            $imagePath = $oldImage;
        }

        return $imagePath;
    }


    public function imageRemove($oldImage){
        return file_exists('images/products/'.$oldImage) ? unlink('images/products/'.$oldImage) : false;
    }

}
