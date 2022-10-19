<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
use Hash;

class AdminUserEditComponent extends Component
{

    public $name;
    public $email;
    public $password;
    public $user_id;

   

    public function mount ($user_id) {
           
        $category = User::where('id' , $user_id)->first();

        $this->name = $category->name;
        $this->email = $category->email;
        $this->password = $category->password;
        $this->user_id = $category->id;





    }

    
   
     public function updateUser() {


   

            $validatedDate = $this->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ]);
            $this->password = Hash::make($this->password); 
            
            $lawyer = User::find($this->user_id);

            $lawyer->name = $this->name;
            $lawyer->email = $this->email;
            $lawyer->password = $this->password;

 

            $lawyer->save();


             return redirect()->route('admin.user');


     }

    public function render()
    {
        return view('livewire.admin.user.admin-user-edit-component')->layout('layouts.admin');
    }
}
