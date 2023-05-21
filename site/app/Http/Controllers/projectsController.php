<?php

namespace App\Http\Controllers;

use App\Models\projectModel;
use Illuminate\Http\Request;

class projectsController extends Controller
{
    
    function projectPage()
    {

    // Course Component er jonno
       $projectData = json_decode(projectModel::orderBy('id','desc')->get());

       return view('project', compact('projectData'));
    }

}
