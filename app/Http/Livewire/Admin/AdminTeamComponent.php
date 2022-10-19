<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Lawyer;
use File;
class AdminTeamComponent extends Component
{ 
    public function deleteTeam($id)

    {
        $lawyer = lawyer::find($id);    
        File::Delete('storage/team/'.$lawyer->image);
        $lawyer->delete();
        return redirect()->route('admin.team');
    
    
        

    }


    public function render()
    { 

        $lawyer = Lawyer::orderBy('sira' , 'ASC')->simplePaginate(200);
        return view('livewire.admin.admin-team-component' , ['lawyer' => $lawyer])->layout('layouts.admin');
    }
}
