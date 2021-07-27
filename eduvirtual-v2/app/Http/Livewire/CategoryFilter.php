<?php

namespace App\Http\Livewire;

use App\Models\Type;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryFilter extends Component
{
    use WithPagination;
    public $category;
    public $view = "grid";

    public function render()
    {
        $types= Type::all();

        $courses= $this->category->courses()->where('status',3)->paginate(8);
        return view('livewire.category-filter',compact('courses','types'));
    }

  public function limpiar(){
        $this->reset(['type','page']);
    }


    public function updatedSubcategoria(){
        $this->resetPage();
    }
}
