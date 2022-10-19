<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Setting;
use App\Models\Human;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Visit;


class HumanResourcesComponent extends Component
{
    
    public $name;
    public $email;
    public $number;
    public $area;
    public $branch;
    public $cv;
    
    use WithFileUploads;

    public function addCv() {


        $human = new Human();
   
        $human->name = $this->name;
        $human->email = $this->email;
        $human->number = $this->number;
        $human->area = $this->area;
        $human->branch = $this->branch;

        $imageName = Carbon::now()->timestamp. '.' . $this->cv->extension();
        $this->cv->storeAs('public/cv', $imageName);
        $human->cv = $imageName; 

        $human->save();

        session()->flash('message' ,'CV niz başarıyla eklendi! ');



    }
    
    public function render()
    {
        
      

        $setting = Setting::all();
        return view('livewire.project.human-resources-component' , ['setting' => $setting])->layout('layouts.base');
    }
}
