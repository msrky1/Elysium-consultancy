<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Image;
class GaleryDetailComponent extends Component
{


    public $slug;

    public function mount($slug) {


        $this->$slug = $slug;
    }


    public function render()
    {


        $galery = Image::where('slug', $this->slug)->first();


        return view('livewire.galery-detail-component' , ['galery' => $galery])->layout('layouts.galery');
    }
}
