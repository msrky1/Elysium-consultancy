<?php

namespace App\Http\Livewire\Admin\Aducation\Units;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Unit;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class UnitsAddComponent extends Component
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


    $blog = new Unit();
   
     $blog->slug = $this->slug;
      $blog->title = $this->title;
      $blog->description = $this->description;




  
    $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
    $this->image->storeAs('public/units', $imageName);
    $blog->image = $imageName; 



    $blog->save();

   

    session()->flash('message' ,'Eğitim Sistemine Başarıyla Eklendi! ');


  }
    public function render()
    {
        return view('livewire.admin.aducation.units.units-add-component')->layout('layouts.admin');
    }
}
