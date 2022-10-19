<?php

namespace App\Http\Livewire\Project\Category;

use Livewire\Component;
use App\Models\Category;
use App\Models\Blog;
use Livewire\WithPagination;
use Carbon\Carbon;


class CategoryDetailComponent extends Component
{ 
      
    public $category_slug;
     


    public function mount($category_slug) {

     $this->category_slug = $category_slug;
        
    }


    use WithPagination;

    public function render()
    { 
        
        Carbon::setLocale('tr');
        $category = Category::where('slug' , $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;


        $categories = Category::All();
    
        $blogs = Blog::where('category_id' , $category->id)->orderBy('category_id',  'DESC')->paginate(10);

        return view('livewire.project.category.category-detail-component' , ['blogs' => $blogs , 'categories' => $categories, 'category_name' => $category_name])->layout('layouts.base');
    }
}
