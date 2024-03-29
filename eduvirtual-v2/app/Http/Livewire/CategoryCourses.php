<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Type;
use App\Models\Category;

class CategoryCourses extends Component
{


    public function render()
    {
        $types= Type::all();
        $categories= Category::all();
        $courses = Course::where('status', 3)
        ->whereIn('status_course',[5,6,7,8,9])
        ->inRandomOrder()
        ->paginate(8);

        return view('livewire.category-courses',compact('courses','types','categories'));

    }
}
