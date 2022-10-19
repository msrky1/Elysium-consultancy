<?php

namespace App\Http\Livewire\Admin\Whatdo;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Whatdo;
use File;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Notification;


class WhatDoingAddComponent extends Component
{

    use WithFileUploads;
    public $title;
    public $slug;
    public $description;
    public $image;
    public $icon;
    public $color;
    public $whatdo_id;

 

    public function generateSlug(){

        $this->slug  = Str::slug($this->title ,'-');

  }

    


     
    public function addWhatdo(){

          $whatdo = new Whatdo();
          
          $whatdo->title = $this->title;
          $whatdo->slug = $this->slug;
          $whatdo->description = $this->description;
          $whatdo->icon = $this->icon;
          $whatdo->color = $this->color;

          $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
         $this->image->storeAs('public/whatdoing', $imageName);
          $whatdo->image = $imageName; 
          $notification = new Notification();

          $notification->name = $this->title;
          $notification->notification = 'Neler Yapıyoruz Bölümüne Bir Yazı Başarıyla Eklendi!';
          $notification->color = 'info';
          $notification->save();
          $whatdo->save();

          session()->flash('message' , 'Kayıt Başarılı!');

    }









    public function render()
    {
        return view('livewire.admin.whatdo.what-doing-add-component')->layout('layouts.admin');
    }
}
