<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function users(){
        $users =  DB::select('select * from users');
        return view('users',['users' => $users]);
    }
}
