<?php

namespace App\Http\Livewire\Admin\Aducation\System;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\System;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class SystemAddComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $slug;
    public $image;
    public $status;
       


    public function generateSlug(){

        $this->slug  = Str::slug($this->title ,'-');

  }

  
  public function addBlog() {


    $blog = new System();
   
     $blog->slug = $this->slug;
      $blog->title = $this->title;
      $blog->description = $this->description;




  
    $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
    $this->image->storeAs('public/system', $imageName);
    $blog->image = $imageName; 



    $blog->save();

   

    session()->flash('message' ,'Eğitim Sistemine Başarıyla Eklendi! ');


  }
    public function render()
    {
        return view('livewire.admin.aducation.system.system-add-component')->layout('layouts.admin');
    }
}
