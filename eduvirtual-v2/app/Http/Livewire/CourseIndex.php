<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Type;
use App\Models\Category;

use Livewire\WithPagination;

class CourseIndex extends Component
{
    use WithPagination;//paginacion dinamica

    public $type_id;
    public $category_id;

    public function render()
    {
        $types= Type::all();
        $categories= Category::all();
        $courses = Course::where('status', 3)
        ->category($this->category_id)
        ->type($this->type_id)
        ->latest('id')
        ->paginate(8);
        return view('livewire.course-index',compact('courses','types','categories'));
    }

    public function resetFilters(){

        $this->reset(['category_id',['type_id']]);
    }
}
