<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){

        $courses=Course::where('status',2)->paginate();

        return view('admin.course.index',compact('courses'));
    }

    public function show(Course $course){

        return view('admin.course.show',compact('course'));
    }

    public function aproved(Course $course){

        $course->status=3;
        return "aqui se aprueba un curso";
    }
}
