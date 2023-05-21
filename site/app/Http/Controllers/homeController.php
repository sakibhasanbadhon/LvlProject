<?php

namespace App\Http\Controllers;

use App\Models\contactModel;
use App\Models\courseModel;
use App\Models\projectModel;
use App\Models\reviewModel;
use App\Models\serviceModel;
use App\Models\visitorModel;



use Illuminate\Http\Request;


class homeController extends Controller
{

    function homeindex(){

        $UserIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate= date("Y-m-d h:i:sa");

        // visitor Component er jonno
        visitorModel::insert(['ip_address'=>$UserIP,'visit_time'=>$timeDate]);
 
        // service Component er jonno
        $serviceData = json_decode(serviceModel::all());

        // Course Component er jonno
        $coursesData = json_decode(courseModel::orderBy('id','desc')->limit(6)->get());


     // project Component er jonno
        $projectData = json_decode(projectModel::orderBy('id','desc')->limit(10)->get());

    // project Component er jonno
        $reviewData = json_decode(reviewModel::all());




        return view('home',compact('serviceData','coursesData','projectData','reviewData'));

    }


    function contactSend(Request $request)
    {
        $contact_name= $request->input('contact_name');
        $contact_mobile= $request->input('contact_mobile');
        $contact_email= $request->input('contact_email');
        $contact_msg= $request->input('contact_msg');

        $result= contactModel::insert([
            'contact_name'=> $contact_name,
            'contact_mobile'=> $contact_mobile,
            'contact_email'=> $contact_email,
            'contact_msg'=> $contact_msg

        ]);

        if ($result==true) {
            return 1;
        }
        else {
            return 0;
        }


    }







}
