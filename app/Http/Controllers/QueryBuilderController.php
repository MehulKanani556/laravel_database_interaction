<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    //
    function queries(){
        // ************************** show *************************************

        $result = DB::table('users')->get();
        // $result = DB::table('users')->where('password','xyz')->get();
        // $result = DB::table('users')->first();
        // $result =[$result];
        // return $result;
        return view('querybuilder',['users'=>$result]);

        // ************************** insert *************************************
        // $result = DB::table('users')->insert([
        //     'name' => 'John Doe',
        //     'email' => 'johndoe@example.com',
        //     'password' => 'secret',
        // ]);

        // if($result){
        //     return 'User inserted successfully';
        // }
        // else{
        //     return 'Failed to insert user';
        // }

        // ************************** update *************************************

        // $result = DB::table('users')->where('name','xyz')->update(['email'=>'xyz.com']);

        // if($result){
        //     return 'User update successfully';
        // }
        // else{
        //     return 'Failed to update user';
        // }

        // ************************** delete *************************************

        // $result = DB::table('users')->where('name','xyz')->delete();

        // if($result){
        //     return 'User delete successfully';
        // }
        // else{
        //     return 'Failed to delete user';
        // }
    }
}
