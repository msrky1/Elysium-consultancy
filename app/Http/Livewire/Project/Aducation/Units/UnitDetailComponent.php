<?php

namespace App\Http\Livewire\Project\Aducation\Units;

use Livewire\Component;
use App\Models\Unit;
use Carbon\Carbon;

class UnitDetailComponent extends Component
{

    public $slug;

    public function mount($slug) {


        $this->$slug = $slug;
    }


    public function render()
    {


        Carbon::setLocale('tr');

        $unit = Unit::where('slug', $this->slug)->first();

        return view('livewire.project.aducation.units.unit-detail-component' , ['unit' =>  $unit])->layout('layouts.base');
    }
}
