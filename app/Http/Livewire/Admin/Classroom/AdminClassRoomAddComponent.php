<?php

namespace App\Http\Livewire\Admin\Classroom;

use Livewire\Component;
use App\Models\Classroom;
use Livewire\Livewire;

class AdminClassRoomAddComponent extends Component
{

    public $classroom;
    public $classroom_id;

    public function classAdd() {

    
        $class = New Classroom();

        $class->classroom = $this->classroom;
        $class->classroom_id = $this->classroom_id;

        $class->save();

        session()->flash('message' , 'Sınıf Başarıyla Eklendi!');



    }
    public function render()
    {
        return view('livewire.admin.classroom.admin-class-room-add-component')->layout('layouts.admin');
    }
}
