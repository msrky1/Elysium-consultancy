<?php

namespace App\Http\Livewire\Project\Thanks;

use Livewire\Component;

class ThankyouComponent extends Component
{
    public function render()
    {
        return view('livewire.project.thanks.thankyou-component')->layout('layouts.base');
    }
}
