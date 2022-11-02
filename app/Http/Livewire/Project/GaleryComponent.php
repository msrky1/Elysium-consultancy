<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Galery;
use App\Models\Image;
use App\Models\Video;
use App\Models\GaleryCategory;
use App\Models\Visit;
use  Illuminate\Support\Facades\DB;


class GaleryComponent extends Component
{
    public function render()
    { 
        $id = 6;
        // DB::table('galeries')->truncate();


        $visit = Visit::where('id' , $id)->first('id');
    
        $visit->increment('views');

        $galery = Galery::all();
        $category = GaleryCategory::all();
        $image = Image::all();
        $video = Video::all();
        return view('livewire.project.galery-component' , ['galery' => $galery , 'image' => $image , 'category' => $category , 'video' => $video ])->layout('layouts.base');
    } 
}
