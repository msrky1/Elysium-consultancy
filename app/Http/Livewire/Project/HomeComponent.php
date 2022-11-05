<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Galery;
use App\Models\Lawyer;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Question;
use App\Models\Setting;
use App\Models\About;
use App\Models\Social;
use App\Models\Unit;
use App\Models\System;

use App\Models\Whatdo;
use App\Models\SocialCategory;
use Carbon\Carbon;
use App\Models\Classroom;
use App\Models\Lock;
use App\Models\Scholarship;
use App\Models\Popup;
use App\Models\Visit;



class HomeComponent extends Component
{

    public function setTarget(Request $request){
        Session::put('target',$request->target);
        return 1;
      }

    public function render()
    {
        


        Carbon::setLocale('tr');
           
        $slider = Slider::all();
        $Galery = Galery::orderBy('id' , 'DESC')->paginate('10');
        $lawyer = Lawyer::all();
        $question = Question::all();
        $contact = Contact::all();
        $setting = Setting::all();
        $blog = Blog::orderBy('id' , 'DESC')->paginate('10');
        $about = About::all();
        $whatdo = Whatdo::all();
        $class = Classroom::all();
        $category = SocialCategory::all();
        $lock = Lock::all();
        $popup = Popup::all();
        $system = System::all();
        $social = Social::orderBy('id' , 'ASC')->paginate('3');
        $unit = Unit::orderBy('id' , 'ASC')->paginate('10');
        
    
        $visit = Visit::first('id');
    
        $visit->increment('views');

        return view('livewire.project.home-component', 
        
         
        ['slider' => $slider ,
        
        
        'setting' => $setting, 

          'about' => $about ,

          'whatdo' => $whatdo, 
          'category' => $category, 

          'team' => $lawyer,
          'blog' => $blog,
           'galery' => $Galery,
           'class' => $class,
           'lock' => $lock,
           'unit' => $unit,
           'social' => $social,
           'popup' => $popup,
           'system' => $system,

           'questions' => $question
        

        
        
        ]
        
        )->layout('layouts.base');
    }
}
