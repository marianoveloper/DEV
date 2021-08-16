<?php

namespace App\Http\Livewire\Dev;

use App\Models\Course;
use Livewire\Component;

class CoursesGoals extends Component
{
    public $course;

    public function mount(Course $course){
        $this->course=$course;
    }

    public function render()
    {
        return view('livewire.dev.courses-goals');
    }
}
