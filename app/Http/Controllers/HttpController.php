<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    //
    function getData(){
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response -> body();
        return view('httpview',['data'=>json_decode($response)]) ;
    }
}
