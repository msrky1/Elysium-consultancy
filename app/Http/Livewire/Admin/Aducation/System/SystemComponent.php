<?php

namespace App\Http\Livewire\Admin\Aducation\System;

use Livewire\Component;
use App\Models\System;
use File;
class SystemComponent extends Component
{
    public function deleteBlog($id)

    {
        $social = System::find($id);    
        File::Delete('storage/system/'.$social->image);
        $social->delete();
        session()->flash('message' , 'Eğitim Sistemi  Başarıyla Slindi!');
    
    
        

    }
    public function render()
    {
        $system = System::paginate(10);
        return view('livewire.admin.aducation.system.system-component' , ['system' => $system])->layout('layouts.admin');
    }
}
