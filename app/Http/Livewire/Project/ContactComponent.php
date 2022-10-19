<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Setting;
use App\Models\Visit;


class ContactComponent extends Component
{
    public function render()
    {
        $id = 5;

        $visit = Visit::where('id' , $id)->first('id');
        $visit->increment('views');

        $setting = Setting::all();
        return view('livewire.project.contact-component' , ['setting' => $setting])->layout('layouts.base');
    }
}
