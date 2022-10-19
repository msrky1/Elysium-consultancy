<?php

namespace App\Http\Livewire\Admin\Whatdo;

use Livewire\Component;
use App\Models\Whatdo;
use Carbon\Carbon;
use File;
use Illuminate\Support\Str;
use App\Models\Notification;

use Livewire\WithFileUploads;

class WhatDoingEditComponent extends Component
{ 

    use WithFileUploads;
    public $title;
    public $slug;
    public $description;
    public $image; 
    public $icon; 
    public $color; 
    public $newimage; 



    public $whatdo_id;

     public function mount($whatdo_id){

       $whatdo = Whatdo::where('id' , $whatdo_id)->first();

       $this->title = $whatdo->title;
       $this->slug = $whatdo->slug;
       $this->icon = $whatdo->icon;
       $this->color = $whatdo->color;
       $this->description = $whatdo->description;
      
       $this->image = $whatdo->image;
       $this->whatdo_id = $whatdo->id;
         

     }

            
     public function generateSlug(){


      $this->slug = Str::slug($this->title, '-');
  }
   

     public function updateWhatdo() {

          $whatdo = Whatdo::find($this->whatdo_id);
          $whatdo->title = $this->title;
          $whatdo->slug = $this->slug;
          $whatdo->icon = $this->icon;
          $whatdo->color = $this->color;
          $whatdo->description = $this->description;
          if ($this->newimage){
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('public/whatdoing', $imageName);
            $whatdo->image = $imageName; 
    
    
        }

          $whatdo->save();
          

          session()->flash('message' , 'Güncelleme Başarılı!');




     }

    public function render()
    {
        return view('livewire.admin.whatdo.what-doing-edit-component')->layout('layouts.admin');
    }
}
