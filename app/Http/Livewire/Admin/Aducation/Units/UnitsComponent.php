<?php

namespace App\Http\Livewire\Admin\Aducation\Units;

use Livewire\Component;
use App\Models\Unit;
use File;

class UnitsComponent extends Component
{
  public function deleteBlog($id)

  {
      $social = Unit::find($id);    
      File::Delete('storage/units/'.$social->image);
      $social->delete();
      session()->flash('message' , 'Eğitim Birimi  Başarıyla Slindi!');
  
  
      

  }
    
    public function render()
    {
      $unit = Unit::paginate(10);
      return view('livewire.admin.aducation.units.units-component' , ['unit' => $unit])->layout('layouts.admin');
    }
}
