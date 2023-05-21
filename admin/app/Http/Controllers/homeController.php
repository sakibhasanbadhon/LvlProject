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

      $totalContact = contactModel::count();
      $totalCourse  = courseModel::count();
      $totalProject =  projectModel::count();
      $totalReview =  reviewModel::count();
      $totalService =  serviceModel::count();
      $totalVisitor =  visitorModel::count();

        return view('home', compact('totalContact','totalCourse','totalProject','totalReview','totalService','totalVisitor'));
      }
}


