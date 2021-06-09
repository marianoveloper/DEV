<?php

namespace App\Http\Livewire;

use App\Models\Type;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryFilter extends Component
{

    public $category,$types;

    public function render()
    {

        $courses= $this->category->courses()->where('status',3)->paginate(8);
        return view('livewire.category-filter',compact('courses'));
    }

    public function resetFilters(){

        $this->reset(['category_id'],['type_id']);
    }
}
