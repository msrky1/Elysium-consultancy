<?php

namespace App\Http\Livewire\Admin\Classroom;

use Livewire\Component;
use App\Models\Classroom;
use App\Models\Classtime;

class AdminClassRoomEditComponent extends Component
{ 

    public $classroom;
    public $classroom_id;
    public $class_id;
    public $hour;



    public function mount($class_id) {


                 $class = Classroom::where('id', $class_id)->first();

               $this->classroom = $class->classroom;
               $this->classroom_id = $class->classroom_id;
               $this->class_id = $class->id;


    }

    public function updateClass() {

        
       $class = Classroom::find($this->class_id);   
       $class->classroom = $this->classroom;
       $class->classroom_id = $this->classroom_id;
       $class->save();
       session()->flash('message' , 'Güncelleme Başarılı');

       
          }

    public function addClass() {
          
        $classtime = new Classtime();
        $classtime->hour = $this->hour;
        $classtime->classroom_id = $this->classroom_id;
        $classtime->save(); 
        session()->flash('message' , 'Saat Eklendi!');

 
            
    }

    public function deletTime($classroom_id)

    {
        $class = Classtime::find($classroom_id);    
        $class->delete();
    
    
    
        

    }
    public function render()
    {


        $classtime = Classroom::find($this->class_id)->getHour;
          
     
        return view('livewire.admin.classroom.admin-class-room-edit-component', ['classtime' => $classtime])->layout('layouts.admin');
    }
}
