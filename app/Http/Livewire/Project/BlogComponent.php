<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Visit;
use Carbon\Carbon;


class BlogComponent extends Component
{

    public function render()
    {
        $id = 3;

        $visit = Visit::where('id' , $id)->first('id');
    
        $visit->increment('views');

        Carbon::setLocale('tr');
        $blog = Blog::orderBy('id' , 'DESC')->paginate('15');
        return view('livewire.project.blog-component' , ['blog' => $blog])->layout('layouts.base');
    } 
}
