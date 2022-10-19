<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Lawyer;
use App\Models\Visit;

class TeamComponent extends Component
{
    public function render()
    { 

        $id = 6;

        $visit = Visit::where('id' , $id)->first('id');
    
        $visit->increment('views');
        $team = Lawyer::orderBy('sira' , 'ASC')->paginate(200);
        return view('livewire.project.team-component', ['team' => $team])->layout('layouts.base');
    }
}
