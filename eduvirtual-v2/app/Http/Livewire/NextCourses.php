<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class NextCourses extends Component
{
    public function render()
    {

        $courses = Course::where('status', 3)
        ->whereIn('status_course',[2,5,8,9])
        ->inRandomOrder()
        ->paginate(10);
        return view('livewire.next-courses',compact('courses'));
    }
}
