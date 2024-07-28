<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function getStudent(){
        $data = new \App\Models\Stud;
        echo $data-> fun();
        $student = \App\Models\Stud::all();
        return view('student',['data'=>$student]);
    }
}
