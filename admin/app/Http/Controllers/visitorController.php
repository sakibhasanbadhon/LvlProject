<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\visitorModel;


class visitorController extends Controller
{
    

     function visitorindex(){

       // $visitorData = json_decode(visitorModel::all());

        $visitorData = json_decode(visitorModel::orderBy('id','desc')->take(10)->get());

         return view('visitor',compact('visitorData'));

       // dd($visitorData);

     }





}
