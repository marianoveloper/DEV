<?php

namespace App\Http\Livewire;

use App\Models\Type;
use App\Models\Course;
use Livewire\Component;
use App\Models\Category;

class CoursesTab extends Component
{
    public function render()
    {



            $types= Type::all();
            $categories= Category::all();
            $courses = Course::where('status', 3)
            ->latest('id')
            ->paginate(8);

            return view('livewire.courses-tab',compact('courses','types','categories'));



    }
}
