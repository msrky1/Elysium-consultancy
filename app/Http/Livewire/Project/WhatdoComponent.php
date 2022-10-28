<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Whatdo;
use App\Models\Visit;
use Carbon\Carbon;


class WhatdoComponent extends Component
{
    public function render()
    {
        $visit = Visit::first('id');
    
        $visit->increment('views');

        Carbon::setLocale('tr');

        $whatdo = Whatdo::all();
        return view('livewire.project.whatdo-component', ['whatdo' => $whatdo])->layout('layouts.base');
    }
}
    