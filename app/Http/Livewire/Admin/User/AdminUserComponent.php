<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;

class AdminUserComponent extends Component
{
    public function deleteUser($id)

    {

        
        $user = User::find($id);    
        $user->delete();
        session()->flash('message' , 'Kullanıcı  Başarıyla Slindi!');
    
    
        

    }

    public function render()
    {

        $user = User::orderBy('id' ,  'ASC')->simplePaginate(50);
        return view('livewire.admin.user.admin-user-component' , ['user' => $user])->layout('layouts.admin');
    }
}
