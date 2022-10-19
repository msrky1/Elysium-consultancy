<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Question;

class AdminQuesitionsComponent extends Component
{
    public function deleteQuestion($id)

    {
        $question = Question::find($id);
        $question->delete();
        session()->flash('message' , 'Başarıyla Slindi!');
    
    
        

    }
    public function render()
    {

        $question = Question::all();
        return view('livewire.admin.admin-quesitions-component' , ['question' => $question])->layout('layouts.admin');
    }
}
