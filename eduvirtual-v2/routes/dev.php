<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DevCourses;

Route::redirect('', 'dev/courses');
Route::get('courses', DevCourses::class)->name('courses.index');
