<?php

namespace App\Http\Controllers;

use App\Models\projectModel;
use Illuminate\Http\Request;



class projectController extends Controller
{
    
    function projectIndex()
    {
        return view('project');
    }


    function getProjectData()
    {
        $result = json_encode(projectModel::orderBy('id','desc')->get());
        return $result;

    }


    
    //each Data Details
    function getProjectDetails(Request $req)
    {
        $id = $req->input('id');
        $result = projectModel::where('id','=', $id)->get();
        return $result;

    }


    function projectDelete(Request $req)
    {
        $id = $req->input('id');
        
        $result = projectModel::where('id','=', $id)->delete();

        if ($result==true) {
            return 1;
        }else{
            return 0;
        }

    }


    // update

    function projectUpdate(Request $req)
    {
        $id = $req->input('id');
        $name = $req->input('name');
        $des = $req->input('des');
        $link = $req->input('link');
        $img = $req->input('img');

        $result = projectModel::where('id','=', $id)
        ->update([
            'project_name'=>$name,
            'project_des'=>$des,
            'project_link'=>$link,
            'project_img'=>$img,
        ]);

        if ($result==true) {
            return 1;
        }else{
            return 0;
        }

    }

//  Project Add

    function projectAdd(Request $req)
    {
        $name = $req->input('name');
        $des = $req->input('des');
        $link = $req->input('link');
        $img = $req->input('img');

        $result = projectModel::insert([
            'project_name'=>$name,
            'project_des'=>$des,
            'project_link'=>$link,
            'project_img'=>$img,
        ]);

        if ($result==true) {
            return 1;
        }else{
            return 0;
        }

    }







}
