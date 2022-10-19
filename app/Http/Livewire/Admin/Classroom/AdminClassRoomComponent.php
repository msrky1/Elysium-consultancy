<?php

namespace App\Http\Livewire\Admin\Classroom;

use Livewire\Component;
use App\Models\Classroom;

class AdminClassRoomComponent extends Component
{

    public function deleteClass($id)

    {
        $class = Classroom::find($id);    
       
        $class->delete();
        session()->flash('message' , 'Sınıf  Başarıyla Slindi!');
    
    
        

    }
    public function render()
    {

        $classroom = Classroom::all();
        return view('livewire.admin.classroom.admin-class-room-component', ['classroom' => $classroom])->layout('layouts.admin');
    }
}
