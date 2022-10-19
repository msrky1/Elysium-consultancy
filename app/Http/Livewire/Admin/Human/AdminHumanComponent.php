<?php

namespace App\Http\Livewire\Admin\Human;

use Livewire\Component;
use App\Models\Human;

class AdminHumanComponent extends Component
{

    public function deleteBlog($id)

    {
        $blog = Human::find($id);    
       $blog->delete();
        session()->flash('message' , 'CV Başarıyla Slindi!');
    
    
        

    }
    public function render()
    {
        $human = Human::orderBy('id' , 'DESC')->simplePaginate(15);
        return view('livewire.admin.human.admin-human-component' , ['human' => $human])->layout('layouts.admin');
    }
}
