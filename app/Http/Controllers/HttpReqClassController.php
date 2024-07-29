<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HttpReqClassController extends Controller
{
    //
    function login(Request $req){
        echo "Request method : " . $req->method();
        echo "<br>";
        echo "<br>";
        
        echo "Path : " . $req->path();
        echo "<br>";
        echo "<br>";

        echo "Url : " . $req->url();
        echo "<br>";
        echo "<br>";

        echo "Name  : " . $req->input('name');
        echo "<br>";
        echo "<br>";

        echo "Name  : " . $req->name;
        echo "<br>";
        echo "<br>";

        echo "Password  : " . $req->input('password');
        echo "<br>";
        echo "<br>";

        if($req -> isMethod('post')){
            echo "Request code for  POST request";
        }
        else{
            echo "Request code for  other request";
        }
        echo "<br>";
        echo "<br>";

        if($req -> is('login')){
            echo "Request code for login path";
        }
        else{
            echo "Request code for other path";
        }
        echo "<br>";
        echo "<br>";


        echo "IP  : " . $req->ip();
       

    }
}
