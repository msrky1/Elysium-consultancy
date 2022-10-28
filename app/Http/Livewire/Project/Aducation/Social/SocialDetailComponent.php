<?php

namespace App\Http\Livewire\Project\Aducation\Social;

use Livewire\Component;
use App\Models\SocialCategory;
use App\Models\Social;
use App\Models\Category;
use App\Models\Blog;
use Livewire\WithPagination;
use Carbon\Carbon;

class SocialDetailComponent extends Component
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
        
        Carbon::setLocale('tr');

        $blog = Social::where('slug' , $this->slug)->first();
        return view('livewire.project.aducation.social.social-detail-component', [
            'blog' => $blog , 'blogRecent' => $blogRecent, 'category' => $category
        ])->layout('layouts.base');
    }
}
