<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Visit;


class BusinessPartnerComponent extends Component
{
    public function render()
    {
        $id = 4;

        $visit = Visit::where('id' , $id)->first('id');
    
        
        $visit->increment('views');
        return view('livewire.project.business-partner-component')->layout('layouts.base');
    }
}
