<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\About;
use App\Models\Galery;
use App\Models\Visit;

class AboutComponent extends Component
{
    public function render()
    {
       
        $id = 2;

        $visit = Visit::where('id' , $id)->first('id');
    
        $visit->increment('views');

        $about = About::all();
        $galery = Galery::all();
        return view('livewire.project.about-component' , ['about' => $about , 'galery' => $galery])->layout('layouts.base');
    }
}
