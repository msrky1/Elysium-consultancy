<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Popup;

class PopupComponent extends Component
{
    public function render()
    {

        $popup = Popup::all();
        return view('livewire.project.popup-component' , ['popup' => $popup])->layout('layouts.popup');
    }
}
