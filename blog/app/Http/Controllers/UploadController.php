<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showUploadForm(){
        return view('uploadPicture');

    }

    public function upload(Request $request){

        if ($request->hasFile('fileUpload')){
            //get file name from the fileupload input
            $fileName = $request->file('fileUpload')->getClientOriginalName();
            // stroe the file into loacal storage public/images
            $request->file('fileUpload')->storeAs('public/images',$fileName);

            return "Upload...!";
        }
            return "No file to choosing";
    }
}
