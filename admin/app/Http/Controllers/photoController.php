<?php

namespace App\Http\Controllers;

use App\Models\photoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class photoController extends Controller
{
    
    function photoIndex()
    {
        return view('photo');
    }



    function photoJson()
    {
        return photoModel::take('3')->get();
    }

    
    //photo Delete

    function photoDelete(Request $request)
    {
        $oldPhotoURL= $request->input('oldPhotoURL');
        $oldPhotoID= $request->input('id');
        $oldPhotoURLArray = explode("/",$oldPhotoURL);
        $oldPhotoName= end($oldPhotoURLArray);
        $DeletePhotoFile=Storage::delete('public/'.$oldPhotoName);
        $deleteRow = photoModel::where('id','=',$oldPhotoID)->delete();

        return $deleteRow;

    }


    function photoJsonById(Request $request)
    {
        $FirstId = $request->id;
        $lastId = $FirstId+3;

        return photoModel::where('id','>=',$FirstId)->where('id','<',$lastId)->get();

    }



    function photoUpload(Request $request)
    {
        $photoPath = $request->file('photo')->store('public');
        $photoName = (explode('/',$photoPath))[1];
        $host = $_SERVER['HTTP_HOST'];
        $location="http://".$host."/storage/".$photoName;

        $result= photoModel::insert(['photo_name'=>$location]);

        return $result;
   

      
    }


}
