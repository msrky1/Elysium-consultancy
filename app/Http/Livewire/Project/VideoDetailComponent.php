<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Video;
use App\Models\Visit;

class VideoDetailComponent extends Component
{
   
    public $slug;

    public function mount($slug) {


        $this->$slug = $slug;
    }


    public function render()
    {
        $visit = Visit::first('id');
    
        $visit->increment('views');

        $galery = Video::where('slug', $this->slug)->first();


        return view('livewire.project.video-detail-component', ['galery' => $galery])->layout('layouts.base');
    }
}
