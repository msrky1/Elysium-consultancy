<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Whatdo;
use File;

class AdminWhatDoingComponent extends Component
{


    public function deleteWhatdo($id)

    {
        $whatdo = Whatdo::find($id);
        File::Delete('storage/whatdoing/'.$whatdo->image);
        $whatdo->delete();
        session()->flash('message' , 'Başarıyla Slindi!');
    
    
        

    }
    public function render()
    {

        $whatdo = Whatdo::all();
        return view('livewire.admin.admin-what-doing-component',  ['whatdo' => $whatdo])->layout('layouts.admin');
    }
}
