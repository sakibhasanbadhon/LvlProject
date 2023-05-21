<?php

namespace App\Http\Controllers;

use App\Models\reviewModel;
use Illuminate\Http\Request;

class reviewController extends Controller
{
        
    function reviewIndex()
    {
        return view('review');
    }

    //  Fetch/read Data table

    function getReviewData()
    {
        $result = json_encode(reviewModel::orderBy('id','desc')->get());
        return $result;

    }


   
    //each Data Details
    function getReviewDetails(Request $req)
    {
        $id = $req->input('id');
        $result = reviewModel::where('id','=', $id)->get();
        return $result;

    }


    //  review delete

    function reviewDelete(Request $req)
    {
        $id = $req->input('id');
        
        $result = reviewModel::where('id','=', $id)->delete();

        if ($result==true) {
            return 1;
        }else{
            return 0;
        }

    }



    
    // update

    function reviewUpdate(Request $req)
    {
        $id = $req->input('id');
        $name = $req->input('name');
        $des = $req->input('des');
        $img = $req->input('img');

        $result = reviewModel::where('id','=', $id)
        ->update([
            'name'=>$name,
            'des'=>$des,
            'img'=>$img,
        ]);

        if ($result==true) {
            return 1;
        }else{
            return 0;
        }

    }


    //  Review Add

    function reviewAdd(Request $req)
    {
        $name = $req->input('name');
        $des = $req->input('des');
        $img = $req->input('img');

        $result = reviewModel::insert([
            'name'=>$name,
            'des'=>$des,
            'img'=>$img,
        ]);

        if ($result==true) {
            return 1;
        }else{
            return 0;
        }

    }









}
