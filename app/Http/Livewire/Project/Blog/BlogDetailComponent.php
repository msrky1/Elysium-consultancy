<?php

namespace App\Http\Livewire\Project\Blog;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Category;
use Carbon\Carbon;

class BlogDetailComponent extends Component
{

    
    public $slug;


    public function mount($slug) {


        $this->$slug = $slug;
    }




    public function render()
    { 


        Carbon::setLocale('tr');
        
        $blogRecent = Blog::paginate(5);
        $category = Category::paginate(5);
        
        $blog = Blog::where('slug' , $this->slug)->first();
        return view('livewire.project.blog.blog-detail-component' , ['blog' => $blog , 'blogRecent' => $blogRecent, 'category' => $category])->layout('layouts.base');
    } 
}
