<?php

namespace App\Http\Livewire\Project\Aducation\System;

use Livewire\Component;
use App\Models\System;
use Carbon\Carbon;

class SystemDetailComponent extends Component
{
    
    public $slug;

    public function mount($slug) {


        $this->$slug = $slug;
    }


    public function render()
    {

        Carbon::setLocale('tr');

        $system = System::where('slug', $this->slug)->first();

        return view('livewire.project.aducation.system.system-detail-component' , ['system' => $system])->layout('layouts.base');
    } 
}
