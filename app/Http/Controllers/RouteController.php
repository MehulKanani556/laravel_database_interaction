<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    //
    function get(){
        return "get function";
    }
    function post(){
        return "post function";
    }
    function put(){
        return "put function";
    }
    function delete(){
        return "delete function";
    }
    function patch(){
        return "patch function";
    }
    function any(){
        return "any function";
    }
    function group1(){
        return "group1 function";
    }
    function group2(){
        return "group2 function";
    }
}
