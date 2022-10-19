<?php

namespace App\Http\Livewire\Admin\Bursluluk;

use Livewire\Component;
use App\Models\Scholarship;

class AdminBurslulukEditComponent extends Component
{
    public $url;
    public $durum;
    public $scholarship_id;

   

    public function mount ($scholarship_id) {
           
        $category = Scholarship::where('id' , $scholarship_id)->first();

        $this->url = $category->url;
        $this->durum = $category->durum;
        $this->scholarship_id = $category->id;





    }

    
  
     public function updateCategory() {


            $category = Scholarship::find($this->scholarship_id);
            $category->url = $this->url;
            $category->durum = $this->durum;

            $category->save();
           
            session()->flash('message' , 'Güncelleme Başarılı!');


     }

    public function render()
    {
        return view('livewire.admin.bursluluk.admin-bursluluk-edit-component')->layout('layouts.admin');
    }
}
