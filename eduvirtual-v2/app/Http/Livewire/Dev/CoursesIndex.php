<?php

namespace App\Http\Livewire\Dev;

use Livewire\Component;
use App\Models\Course;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
class CoursesIndex extends Component
{
    use WithPagination;
    //protected $paginationTheme='bootstrap';
    public $search;

    public function render()
    {

        $courses = Course::where('title','LIKE','%' . $this->search . '%')
                        ->where('user_id',auth()->user()->id)
                        ->latest('id')

                        ->paginate(8);

        return view('livewire.dev.courses-index',compact('courses'));
    }

    public function limpiar_page(){

        $this->reset('page');
    }
}
