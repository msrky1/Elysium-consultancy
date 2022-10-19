<?php

namespace App\Http\Livewire\Project\Class;

use Livewire\Component;
use App\Models\Classroom;
use App\Models\Setting;
use App\Models\Classtime;


class ClassDetailComponent extends Component
{ 

    public $classroom_id;
    public $classroom;
    public $name;
    public $email;
    public $tc;

    public function mount($classroom_id) {
      
        
         $this->$classroom_id = $classroom_id;

    }
    


    public function addApp() {
        
        $class = new Classroom();
        $class->name = $this->name;
        $class->email = $this->email;
        $class->classroom =  $this->classroom;
        $class->classroom_id =  $this->classroom_id;
        $class->save();
        
       session()->flash('message' , 'Başvurunuz Başarıyla Alınmıştır!');


    }
    public function render()
    {
        $setting = Setting::all();
        $class = Classroom::where('classroom_id' , $this->classroom_id)->first();
        $classtime = Classroom::find($this->classroom_id)->getHour;
        return view('livewire.project.class.class-detail-component', ['class' => $class , 'setting' => $setting, 'classtime' => $classtime])->layout('layouts.base');
    }
}
