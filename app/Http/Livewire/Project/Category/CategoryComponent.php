<?php

namespace App\Http\Livewire\Project\Category;

use Livewire\Component;
use App\Models\Category;
use App\Models\Blog;
use Livewire\WithPagination;

use Carbon\Carbon;



class CategoryComponent extends Component
{
 

    use WithPagination;
     
    public function render()
    { 
        Carbon::setLocale('tr');

        $category = Category::all();
        $blog = Blog::orderBy('id' , 'DESC')->paginate('4');
        return view('livewire.project.category.category-component' , ['category' => $category , 'blog'=> $blog]);
    }
}
