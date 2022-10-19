<?php

namespace App\Http\Livewire\Admin\Quaestion;

use Livewire\Component;
use App\Models\Question;
use App\Models\Notification;
class QuestionAddComponent extends Component
{
    public $title;
    public $description;




  



    public function addQuestion()
       {
           $question = new Question();
      
           $question->title = $this->title;
           $question->description = $this->description;
    
      
        
       


           $question->save();
           $notification = new Notification();
           $notification->name = $this->title;
           $notification->notification = 'Yeni Bir Soru Cevap Eklendi!';
           $notification->color = 'secondary';
           $notification->save();
           session()->flash('message' ,'Soru ve Cevap başarıyla Eklendi ');



          }

          


    public function render()
    {
        return view('livewire.admin.quaestion.question-add-component')->layout('layouts.admin');
    }
}
