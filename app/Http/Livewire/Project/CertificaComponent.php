<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Visit;


class CertificaComponent extends Component
{
    public function render()
    {
        $id = 4;

        $visit = Visit::where('id' , $id)->first('id');
        $visit->increment('views');

        return view('livewire.project.certifica-component')->layout('layouts.base');
    }
}
