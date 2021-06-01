<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DevCourses;
use App\Http\Controllers\Dev\CourseController;

Route::redirect('', 'dev/courses');


Route::resource('courses', CourseController::class)->names('courses');

//Route::get('courses', DevCourses::class)->middleware('can:Leer cursos')->name('courses.index');
