<?php

namespace App\Http\Livewire\Admin\Quaestion;

use Livewire\Component;
use App\Models\Question;
use App\Models\Notification;

class QuestionEditComponent extends Component
{
     public $title;
     public $description;
     public $question_id;

     public function mount($question_id) {
    

        $question =  Question::where('id' , $question_id)->first();
        $this->title = $question->title;
        $this->description = $question->description;
        $this->question_id = $question->id;


          

     }
    

       public function updateQuestion() {

            $question = Question::find($this->question_id);
            $question->title = $this->title;
            $question->description = $this->description;

            $question->save();
            $notification = new Notification();
            $notification->name = $this->title;
            $notification->notification = 'Yeni Bir Soru Cevap Düzenlendi!';
            $notification->color = 'secondary';
            $notification->save();
          
            session()->flash('message' , 'Güncelleme Başarılı!');

       }

    public function render()
    {
        return view('livewire.admin.quaestion.question-edit-component')->layout('layouts.admin');
    }
}
