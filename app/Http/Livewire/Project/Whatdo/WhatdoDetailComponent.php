<?php

namespace App\Http\Livewire\Project\Whatdo;

use Livewire\Component;
use App\Models\Category;
use App\Models\Whatdo;

class WhatdoDetailComponent extends Component
{


    public $slug;

    public function mount($slug) {


        $this->$slug = $slug;
    }
    public function render()
    {

        $whatdo = Whatdo::where('slug', $this->slug)->first();
        return view('livewire.project.whatdo.whatdo-detail-component' , ['whatdos' => $whatdo])->layout('layouts.base');
    }
}
