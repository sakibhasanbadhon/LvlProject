<?php

namespace App\Http\Controllers;

use App\Models\courseModel;
use Illuminate\Http\Request;

class coursesController extends Controller
{
    
    function coursesPage()
    {
        
       // Course Component er jonno
       $coursesData = json_decode(courseModel::orderBy('id','desc')->get());

       return view('course', compact('coursesData'));


    }



}
