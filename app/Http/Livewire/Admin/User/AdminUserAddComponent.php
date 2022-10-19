<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use Hash;
use App\Models\User;

class AdminUserAddComponent extends Component
{  

    public $users, $email, $password, $name;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function addUser(){

   
        $this->validate();
        $this->password = Hash::make($this->password); 

        User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);

        

         return redirect()->route('admin.user');


    }

    public function serPasswordAttribute($value) {


        $this->attributes['password']->bcsqrt($value);
    }

    public function render()
    {
        return view('livewire.admin.user.admin-user-add-component')->layout('layouts.admin');
    }
}
