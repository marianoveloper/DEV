<?php

namespace App\Http\Controllers\Dev;

use Carbon\Carbon;
use App\Models\Type;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dev.courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::pluck('name','id');
        $subcategory=Type::pluck('name','id');


        return view('dev.courses.create',compact('categories','subcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //reglas de validacion

        $request->validate([
            'title'=> 'required',
            'slug'=> 'required|unique:courses',
            'description'=> 'required',
            'destination'=>'required',
            'duration'=> 'required',
            'date_start'=>'required|date|after:tomorrow',
            'date_limit'=>'required|date|after:date_start',
            'url_info'=>['required','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
            'link_inscription'=>['required','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
            'category_id'=> 'required',
            'type_id'=> 'required',
            'file'=>'image',
            'price'=>'required|numeric',

        ]);
        dd('llego');
        $course=Course::create($request->all());

        if($request->file('file')){
            $url=Storage::put('public/courses', $request->file('file'));
        }

        $course->image()->create([
            'url'=>$url,
        ]);



return $course;
      return redirect()->route('dev.courses.edit', $course);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('dev.courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories=Category::pluck('name','id');
       // $category_id=$course->type->category->id;

        //$subcategory = DB::table('types')->where('category_id', $category_id)->pluck('name','id');

        //dd($subcategory);


        $subcategory=Type::pluck('name','id');


       return view('dev.courses.edit',compact('course','categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title'=> 'required',
            'slug'=> 'required|unique:courses,slug,'.$course->id,
            'description'=> 'required',
            'destination'=>'required',
            'date_start'=>'required|date|after:tomorrow',
            'date_limit'=>'required|date|after:date_start',
            'url_info'=>['required','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
            'link_inscription'=>['required','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
            'category_id'=> 'required',
            'type_id'=> 'required',
            'file'=>'image',
            'price'=>'required',


        ]);
$course->update($request->all());

if($request->file('file')){
    $url=Storage::put('public/courses',$request->file('file'));

    if($course->image){
        Storage::delete($course->image->url);

        $course->image->update([
            'url'=>$url,
        ]);
    }else{
        $course->image()->create([
            'url'=>$url,
        ]);
    }
}


return redirect()->route('dev.courses.edit',$course);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }

    public function goals(Course $course){

        return view('dev.courses.goals',compact('course'));
    }

    public function status(Course $course){


        $course->status=2;
        $course->save();

        return back();
    }
}
