<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function upload (Request $req){

        // $path = $req->file('file')->store('public');
         $path = $req->file('file')->storeAs('public','dummy1.png');
        $fileNameArray = explode("/",$path);
        $fileName = $fileNameArray[1];
        return view('displayimage',['path'=>$fileName]);
    }
}
