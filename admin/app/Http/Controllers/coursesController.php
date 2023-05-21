<?php

namespace App\Http\Controllers;

use App\Models\courseModel;
use Illuminate\Http\Request;

class coursesController extends Controller
{
    
    function coursesIndex(){
        return view('courses');
    }

    function getCoursesData()
    {
        $result = json_encode(courseModel::orderBy('id','desc')->get());
        return $result;
    }

    //each Data Details
    function getCourseDetails(Request $req)
    {
        $id = $req->input('id');
        $result = courseModel::where('id','=', $id)->get();
        return $result;

    }

    // Course Delete

    function courseDelete(Request $req)
    {
        $id = $req->input('id');
        
        $result = courseModel::where('id','=', $id)->delete();

        if ($result==true) {
            return 1;
        }else{
            return 0;
        }

    }

    //Course Update
    function coursesUpdate(Request $req)
    {
        $id = $req->input('id');

        $course_name = $req->input('course_name');
        $course_des = $req->input('course_des');
        $course_fee = $req->input('course_fee');
        $course_totalenroll = $req->input('course_totalenroll');
        $course_totalclass = $req->input('course_totalclass');
        $course_link = $req->input('course_link');
        $course_img = $req->input('course_img');


        $result = courseModel::where('id','=', $id)
        ->update([
            'course_name'=>$course_name,
            'course_des'=>$course_des,
            'course_fee'=>$course_fee,
            'course_totalenroll'=>$course_totalenroll,
            'course_totalclass'=>$course_totalclass,
            'course_link'=>$course_link,
            'course_img'=>$course_img,
        ]);

        if ($result==true) {
            return 1;
        }else{
            return 0;
        }

    }


    // Course Add

    function courseAdd(Request $req)
    {
        $course_name = $req->input('course_name');
        $course_des = $req->input('course_des');
        $course_fee = $req->input('course_fee');
        $course_totalenroll = $req->input('course_totalenroll');
        $course_totalclass = $req->input('course_totalclass');
        $course_link = $req->input('course_link');
        $course_img = $req->input('course_img');

        $result = courseModel::insert([
            'course_name'=>$course_name,
            'course_des'=>$course_des,
            'course_fee'=>$course_fee,
            'course_totalenroll'=>$course_totalenroll,
            'course_totalclass'=>$course_totalclass,
            'course_link'=>$course_link,
            'course_img'=>$course_img,
        ]);

        if ($result==true) {
            return 1;
        }else{
            return 0;
        }

    }





}




