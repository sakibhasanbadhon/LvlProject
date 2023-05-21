<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\serviceModel;


class serviceController extends Controller
{
    
     function serviceIndex()
    {
        return view('services');
    }


    function getServiceData()
    {
        $result = json_encode(serviceModel::orderBy('id','desc')->get());
        return $result;

    }

    

    //each Data Details
    function getServiceDetails(Request $req)
    {
        $id = $req->input('id');
        $result = serviceModel::where('id','=', $id)->get();
        return $result;

    }



    
    function serviceDelete(Request $req)
    {
        $id = $req->input('id');
        
        $result = serviceModel::where('id','=', $id)->delete();

        if ($result==true) {
            return 1;
        }else{
            return 0;
        }

    }


       
    function serviceUpdate(Request $req)
    {
        $id = $req->input('id');
        $name = $req->input('name');
        $des = $req->input('des');
        $img = $req->input('img');

        $result = serviceModel::where('id','=', $id)
        ->update([
            'service_name'=>$name,
            'service_des'=>$des,
            'service_img'=>$img,
        ]);

        if ($result==true) {
            return 1;
        }else{
            return 0;
        }

    }



    function serviceAdd(Request $req)
    {
        $name = $req->input('name');
        $des = $req->input('des');
        $img = $req->input('img');

        $result = serviceModel::insert([
            'service_name'=>$name,
            'service_des'=>$des,  
            'service_img'=>$img,
        ]);

        if ($result==true) {
            return 1;
        }else{
            return 0;
        }

    }


}
