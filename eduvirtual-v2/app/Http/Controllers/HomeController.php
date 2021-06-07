<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function __invoke()
    {
        $courses=Course::where('status',3)->latest('id')->get()->take(8);

      //  return $courses;


        return view('welcome',compact('courses'));
    }
}
