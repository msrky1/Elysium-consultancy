<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Question;
use App\Models\Visit;

class QuestionsComponent extends Component
{
    public function render()
    {

     
        $question = Question::all();
        return view('livewire.project.questions-component' , ['question' => $question])->layout('layouts.base');
    }
}
