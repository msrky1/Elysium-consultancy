<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\About;
use App\Models\Whatdo;
use App\Models\Setting;
use App\Models\Blog;
use App\Models\Galery;
use App\Models\Scholarship;
use Carbon\Carbon;


class FooterComponent extends Component
{
    public function render()
    {


        $galery = Galery::orderBy('id' , 'DESC')->paginate('6');
      
     
        $whatdo = Whatdo::orderBy('id', 'DESC')->paginate('6');
        $setting = Setting::all();

        Carbon::setLocale('tr');
        $blog = Blog::orderBy('id' , 'DESC')->paginate('6');
  
        $about = About::all();
        $scholarship = Scholarship::all();

        return view('livewire.project.footer-component', [



            'setting' => $setting, 

            'about' => $about ,
  
            'whatdo' => $whatdo, 
  
             'galery' => $galery, 
              
             'blog' => $blog,
             'scholarship' => $scholarship,
      
        ]);
    }
}
