<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function login(Request $req){
        $req->session()->put('user',$req->input('user'));
        $req->session()->put('allData',$req->input());
        return redirect('sessionprofile');
    }
    function logout(Request $req){
        $req->session()->pull('user');
        return redirect('sessionprofile');

        
    }
}
